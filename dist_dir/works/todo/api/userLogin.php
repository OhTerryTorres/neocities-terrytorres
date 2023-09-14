<?php

require("conn.php");
require("dao.php");
$username = htmlentities($_POST["username"]);
$password = htmlentities($_POST["password"]);
$token = null;
if ((htmlentities($_POST["token"])) !== null) {
    $token = htmlentities($_POST["token"]);
}
$returnValue = array();

if(empty($username) || empty($password)) {
	$returnValue["status"] = "error";
	$returnValue["message"] = "Missing required field";
	echo json_encode($returnValue);
	return;
}

$secure_password = md5($password);

$dao = new Dao();
$dao->openConnection();
$userDetails = $dao->getUserDetailsWithPassword($username,$secure_password);

if(!empty($userDetails)) {
    if (!empty($token)) {
        $dao->addTokenForUser($token, $username);
    }
    if($userDetails["activated"]==true) {
        $returnValue["status"] = "success";
	    $returnValue["message"] = "Account is registered!";
	    echo json_encode($returnValue);
    } else {
        $returnValue["status"] = "error";
	    $returnValue["message"] = "Account is not activated!\nCheck email for activation link.";
	    echo json_encode($returnValue);
    }
	
} else {
	$returnValue["status"] = "error";
	$returnValue["message"] = "Username or password is invalid!";
	echo json_encode($returnValue);
}

$dao->closeConnection();

?>