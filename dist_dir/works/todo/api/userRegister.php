<?php 


require("conn.php");
require("dao.php");

$username = htmlentities($_POST["username"]);
$email = htmlentities($_POST["email"]);
$password = htmlentities($_POST["password"]);
$token = null;
if ((htmlentities($_POST["token"])) !== null) {
    $token = htmlentities($_POST["token"]);
}

$returnValue = array();

if(empty($username) || empty($email) || empty($password)) {
	$returnValue["status"] = "error";
	$returnValue["message"] = "Missing required field!";
	echo json_encode($returnValue);
	return;
}

$dao = new Dao();
$dao->openConnection();
$userDetails = $dao->getUserDetails($username);

if(!empty($userDetails)) {
	$returnValue["status"] = "error";
	$returnValue["message"] = "Account with this name already exists!";
	echo json_encode($returnValue);
	return;
}

$secure_password = md5($password);

$result = $dao->registerUser($username, $email, $secure_password);

if($result) {
	$dao->createUserTable($username);
    $dao->createTokenTable($username);
    if (!empty($token)) {
        $dao->addTokenForUser($token, $username);
    }
	$returnValue["status"] = "success";
	$returnValue["message"] = "Account has been registered!";
	echo json_encode($returnValue);
	return;
} else {
    echo "User registration failed!!";
}

$dao->closeConnection();

?>
