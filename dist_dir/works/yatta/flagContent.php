<?php

if (isset ($_GET["id"])) {
		$id = $_GET["id"];
	}
if (isset ($_GET["keyword"])) {
		$keyword = $_GET["keyword"];
	}

// Getting database login
$host = "terrytorrescom.domaincommysql.com"; //Your database host server
$db = "events"; //Your database name
$user = "terrytorres"; //Your database user
$pass = "agustin87"; //Your password


// Create connection
$conn = mysql_connect($host, $user, $pass);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$table = $keyword . "GalleryData";

mysql_select_db($db, $conn);

// flip "flagged" bool

echo "id is $id";

$true = 1;

$query = "UPDATE $table SET flagged = $true WHERE id = $id;";

$result = mysql_query($query);
while($row = mysql_fetch_array($result)) {
echo $row;
}

$email = "yattaapp@gmail.com";
$subject = "Content flagged in " . $keyword;
$message = "Check gallery data associated with the id: " . $id . ".";
mail($email, $subject, $message);

  echo "great job";

  mysql_close($conn);

?>