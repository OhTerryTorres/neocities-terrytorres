<?php

require("conn.php");
require("dao.php");
$username = htmlentities($_POST["username"]);
$deviceTokenString = htmlentities($_POST["deviceTokenString"]);
$returnValue = array();

if(empty($username) || empty($deviceTokenString)) {
	$returnValue["status"] = "error";
	$returnValue["message"] = "Missing required field";
	echo json_encode($returnValue);
	return;
}

$dao = new Dao();
$dao->openConnection();
$results = $dao->markTokenAsUnnotified($deviceTokenString, $username);

if(!empty($results)) {
    $returnValue["status"] = "success";
    $returnValue["message"] = "Device token notification acknowledged!";
    echo json_encode(   $returnValue);
    return;
} else {
	$returnValue["status"] = "error";
	$returnValue["message"] = "Device token notification error!";
	echo json_encode($returnValue);
    return;
}

$dao->closeConnection();

?>