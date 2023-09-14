<?php

require("conn.php");
require("dao.php");

if(!isset ($_GET["username"]) || !isset ($_GET["authentication"])) {
	echo "Something went wrong?!";
}

$username = $_GET["username"];
$authentication = $_GET["authentication"];

$dao = new Dao();
$dao->openConnection();
$remoteAuthentication = $dao->authenticationCodeForUser($username);

if($authentication === $remoteAuthentication) {
	$result = $dao->activateUser($username);
	if (!$result) {
		echo "Activation failed!";
	} else {
        echo "Activation successful!";
	}
} else {
	echo "Authentication link error!";
}

$dao->closeConnection();

?>