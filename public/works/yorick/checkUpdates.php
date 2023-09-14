<?php

// Getting values from the app
if (isset ($_GET["updates"])) {
		$upates = (int)$_GET["updates"];
	}

// Getting database login
$host = "localhost"; //Your database host server
$db = "terrytor_yorick"; //Your database name
$user = "terrytor"; //Your database user
$pass = "1000noKotob@"; //Your password


// Create connection
$conn = mysql_connect($host, $user, $pass);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

mysql_select_db($db, $conn);

$monologuesTable = "monologues";
$updatesTable = "updates";

// get number of updates
$result = mysql_query("SELECT * FROM updates");
$num_rows = 0;
$num_rows = mysql_num_rows($result);

echo "{$num_rows}";

$conn->close();
?>