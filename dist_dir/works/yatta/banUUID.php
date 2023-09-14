<?php

if (isset ($_GET["keyword"])) {
		$keyword = $_GET["keyword"];
		echo "keyword is $keyword  /  ";
	}
if (isset ($_GET["bannedUUID"])) {
		$bannedUUID = $_GET["bannedUUID"];
		echo "bannedUUID is $bannedUUID  /  ";
	}

// Getting database login
$host = "terrytorrescom.domaincommysql.com"; //Your database host server
$db = "events"; //Your database name
$user = "terrytorres"; //Your database user
$pass = "agustin87"; //Your password
$table = $keyword . "BannedUUIDs"; //the appropriate table

// Create connection
$conn = mysql_connect($host, $user, $pass);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$dbconnect = mysql_select_db($db, $conn);

if (!$dbconnect)
	{
		die("Unable to connect to the specified database!");
	}
	else
	{

	// Create entry in eventgallerydata

	$query = "INSERT INTO $table ( bannedUUID ) VALUES ('$bannedUUID');";

	echo "query is $query  /  ";

  	mysql_query($query);

  	echo "great job";

  	mysql_close($conn);
}

?>