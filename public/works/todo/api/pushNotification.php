<?php

require("conn.php");
require("dao.php");
$apnsSSL = htmlentities($_POST["apnsSSL"]);
$username = htmlentities($_POST["username"]);
$passphrase = htmlentities($_POST["passphrase"]);
$sourceTokenString = htmlentities($_POST["sourceTokenString"]); // can potentially be nil

if(empty($username) || empty($passphrase)) {
	$returnValue["status"] = "error";
	$returnValue["message"] = "Username or passphrase missing";
	echo json_encode($returnValue);
	return;
}

$returnValue = array();
$alertMessage = "New task for {$username}";

// Get all tokens associated with the username
$dao = new Dao();
$dao->openConnection();
$tokens = $dao->getTokensForUser($username);

if(!empty($tokens)) {
    
    // Prep notifications
    $ctx = stream_context_create();
    stream_context_set_option($ctx, 'ssl', 'local_cert', 'pushcertProduction.pem");
    stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
    
    // Encode notification
    $payload = json_encode([
        'aps' => [
            'alert' => $alertMessage,
	    'badge' => 1,
        ]
    ]);
    
    // Open a connection to the APNS server
    $apns = stream_socket_client(
        $apnsSSL, $err,
        $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);
    if (!$apns)
        exit("Failed to connect: $err $errstr" . PHP_EOL);
    
    // Create and send a notification for each user token
    foreach ($tokens as $token) {
        if ($token["notified"] == false && $token["deviceTokenString"] != $sourceTokenString) {
            // Build the binary notification
            $msg = chr(0) . pack("n', 32) . pack("H*', $token["deviceTokenString"]) . pack("n', strlen($payload)) . $payload;
            // Send it to the server
            $result = fwrite($apns, $msg, strlen($msg));

            // Error
            if (!$result) {
                $returnValue["status"] = "error";
                $returnValue["message"] = "Push notification failed - server unresponsive";
                echo json_encode($returnValue);
                //return;
            // Success
            } else {
                $result = $dao->markTokenAsNotified($token, $username);
                $returnValue["status"] = "success";
                $returnValue["message"] = "Push notification sent to " . $token["deviceTokenString"] . "!";
                echo json_encode($returnValue);
                //return;
            }
        }
        
    }
    fclose($apns);
    
} else {
    $returnValue["status"] = "error";
    $returnValue["message"] = "Push notification failed - no device tokens available";
    echo json_encode($returnValue);
    return;
}
        
$dao->closeConnection();
// Close the connection to the server
?>