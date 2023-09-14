<?php

if (isset ($_GET["filename"])) {
		$filename = $_GET["filename"];
	}
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


$urlprefix = "http://www.terry-torres.com/yatta/" . $keyword . "/gallery/";
$nullstring = "";
$filenamesimple = str_replace($urlprefix, $nullstring, $filename);
echo "filename is $filename
";
echo "filenamesimple is $filenamesimple
";


$uploaddir = './' . $keyword . '/gallery/';
$newName = $uploaddir . $filenamesimple;

if (file_exists($newName)) {
    unlink($newName);
    echo "The file $newName has been deleted
";
} else {
    echo "The file $newName does not exist
";
}

// Create connection
$conn = mysql_connect($host, $user, $pass);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$table = $keyword . "GalleryData";

mysql_select_db($db, $conn);

// delete entry in eventgallerydata

echo "id is $id";

$query1 = "DELETE FROM `{$table}` WHERE `id` = {$id} LIMIT 1;";
$query2 = "ALTER TABLE `{$table}` DROP `id`;";
$query3 = "ALTER TABLE `{$table}` ADD `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;";

  mysql_query($query1);
  mysql_query($query2);
  mysql_query($query3);

  echo "great job";

  mysql_close($conn);

?>