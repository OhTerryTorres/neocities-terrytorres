<?php

// Getting values from the app
if (isset ($_GET["hashtag"])) {
		$hashtag = $_GET["hashtag"];
	}
if (isset ($_GET["name"])) {
		$name = $_GET["name"];
	}
if (isset ($_GET["title"])) {
		$title = $_GET["title"];
	}
if (isset ($_GET["uuid"])) {
		$uuid = $_GET["uuid"];
	}
if (isset ($_GET["keyword"])) {
		$keyword = $_GET["keyword"];
	}

// Getting database login
$host = "terrytorrescom.domaincommysql.com"; //Your database host server
$db = "events"; //Your database name
$user = "terrytorres"; //Your database user
$pass = "agustin87"; //Your password


$uploaddir = './' . $keyword . '/gallery/';
$file = basename($_FILES['userfile']['name']);
$uploadFile = $file;


$underscore = '_';

$newName = $uploaddir . $hashtag . $underscore . $name . $uploadFile;


if (file_exists($newName)) {

echo "IN IFF STATETMETN

";

    $i = 1;
    $newNameComparison = $hashtag . $underscore . $name;
    $similarFiles = glob($uploaddir . $newNameComparison . '*.jpg");
	// Here we check to see if a similar file has been uploaded already
	// Then we'll give it a new name
	// i.e. x_y.jpg, x_y_1.jpg, x_y_2.jpg
    while ($i <= count($similarFiles)) {

        $newNamePotential = $uploaddir . $newNameComparison . $underscore . $i . $uploadFile;
	if (!file_exists($newNamePotential)) {
		$newName = $newNamePotential;
    	}
	$i++;
    }
    
}if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	echo "File uploaded. \r\n";
} else {
	echo "File not uploaded. \r\n";
}

if ($_FILES['userfile']['size']> 30000000) {
	exit("Your file is too large."); 
}

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $newName)) {
    $postsize = ini_get("post_max_size");   //Not necessary, I was using these
    $canupload = ini_get("file_uploads");    //server variables to see what was 
    $tempdir = ini_get("upload_tmp_dir");   //going wrong.
    $maxsize = ini_get("upload_max_filesize");
    echo "http://terry-torres.com/yatta/{$keyword}/gallery/{$newName}" . "\r\n" . "size: {$_FILES['userfile']['size']} kb" . "\r\n" . $_FILES['userfile']['type'] ;
}


$filecount = 0;
$files = glob($uploaddir . "*.*");

if ($files){
	$filecount = count($files);
}
echo "{$filecount}";


// put spaces back into username and title
// handle escaping special characters for proper MySQL syntax

$username = str_replace("yyyspacezzz", " ", $name);
$title = str_replace("yyyspacezzz", " ", $title);
$title = str_replace("'", "''", $title);
$simpleFilename = str_replace($uploaddir, "", $newName);
echo "simpleFilename is $simpleFilename

";

// Create connection
$conn = mysql_connect($host, $user, $pass);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

mysql_select_db($db, $conn);

$table = $keyword . "GalleryData";

// Create entry in eventgallerydata
$query = "INSERT INTO `{$table}` ( `id` , `filename` , `achievementTitle` , `username` , `uuid` ) 
VALUES (
'{$filecount}', '{$simpleFilename}', '{$title}', '{$username}', '{$uuid}");";

  mysql_query($query);

  echo $query;

  echo "    great job";

  mysql_close($conn);


?>