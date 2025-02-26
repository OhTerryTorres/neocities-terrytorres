<?php

// Getting values from the app
if (isset ($_GET["id"])) {
		$id = (int)$_GET["id"];
	}
if (isset ($_GET["age"])) {
		$age = $_GET["age"];
	}
if (isset ($_GET["authorFirst"])) {
		$authorFirst = $_GET["authorFirst"];
	}
if (isset ($_GET["authorLast"])) {
		$authorLast = $_GET["authorLast"];
	}
if (isset ($_GET["character"])) {
		$character = $_GET["character"];
	}
if (isset ($_GET["gender"])) {
		$gender = $_GET["gender"];
	}
if (isset ($_GET["length"])) {
		$length = $_GET["length"];
	}
if (isset ($_GET["notes"])) {
		$notes = $_GET["notes"];
		$notes = str_replace("'","''",$notes);
	}
if (isset ($_GET["period"])) {
		$period = $_GET["period"];
	}
if (isset ($_GET["tags"])) {
		$tags = $_GET["tags"];
	}
if (isset ($_GET["text"])) {
		$text = $_GET["text"];
		$text = str_replace("'","''",$text);
	}
if (isset ($_GET["title"])) {
		$title = $_GET["title"];
		$title = str_replace("'","''",$title);
	}
if (isset ($_GET["tone"])) {
		$tone = $_GET["tone"];
	}
if (isset ($_GET["uuid"])) {
		$uuid = $_GET["uuid"];
	}


// Getting database login
$host = "localhost"; //Your database host server
$db = "terrytor_yorick"; //Your database name
$user = "terrytor"; //Your database user
$pass = "1000noKotob@"; //Your password


// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO  `terrytor_yorick`.`updates` (
 `id` ,
 `uuid` ,
 `age` ,
 `authorFirst` ,
 `authorLast` ,
 `character` ,
 `gender` ,
 `length` ,
 `notes` ,
 `period` ,
 `text` ,
 `title` ,
 `tags` ,
 `tone`
)
VALUES ("$id', '$uuid', '$age', '$authorFirst', '$authorLast', '$character', '$gender', '$length', '$notes', '$period', '$text', '$title', '$tags', '$tone")
ON DUPLICATE KEY UPDATE `uuid`='$uuid', `age`='$age', `authorFirst`='$authorFirst', `authorLast`='$authorLast', `character`='$character', `gender`='$gender', `length`='$length', `notes`='$notes', `period`='$period', `text`='$text', `title`='$title', `tags`='$tags', `tone`='$tone';";
	

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>