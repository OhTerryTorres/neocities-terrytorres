<?php
// Getting database login
$host = "localhost"; //Your database host server
$db = "terrytor_todo"; //Your database name
$user = "terrytor"; //Your database user
$pass = "1000noKotob@"; //Your password

if (isset ($_GET["method"])) {
	$method = $_GET["method"];
	
	if ($method == "get") {
		$get = true;
	}
	if ($method == "set") {
		$set = true;
	}
	if ($method == "delete") {
		$delete = true;
	}
	if ($method == "deleteCompleted") {
		$deleteCompleted = true;
	}
}

if (isset ($_GET["username"])) {
	$table = $_GET["username"];
}

// Create connection
$connection = mysql_connect($host, $user, $pass);

//Check to see if we can connect to the server
	if(!$connection) {
		die("Database server connection failed.");	
	}
	else {
		//Attempt to select the database
		$dbconnect = mysql_select_db($db, $connection);
		
		//Check to see if we could select the database
		if(!$dbconnect) {
			die("Unable to connect to the specified database!");
		}
		else {

			if ($get == true ) {
				$query = "SELECT * FROM {$table}";
				$resultset = mysql_query($query, $connection);
			
				$records = array();
			
				//Loop through all our records and add them to our array
				while($r = mysql_fetch_assoc($resultset))
				{
					$records[] = $r;		
				}
			
				//Output the data as JSON
				echo json_encode($records);
			}

			if ($set == true ) {
				$body = file_get_contents('php://input');
				echo("body is " . $body . ".\r");
				$task = json_decode($body);

				if (json_last_error() === JSON_ERROR_NONE) { 
				
					$uniqueID = $task->{"uniqueID"};
					$name = $task->{"name"};
                    $name = str_replace("'", "\'", $name);
                    $name = str_replace("\"", "\\\"", $name);
					$userCreated = $task->{"userCreated"};
					$userCompleted = $task->{"userCompleted"};
					$dateCreated = $task->{"dateCreated"};
                    $lastUpdate = $task->{"lastUpdate"};
					$dateCompleted = $task->{"dateCompleted"};
				
					$query = "INSERT INTO {$table} (
 `uniqueID` ,
 `name` ,
 `userCreated` ,
 `userCompleted` ,
 `dateCreated` ,
 `lastUpdate` ,
 `dateCompleted`
)
VALUES ('$uniqueID', '$name', '$userCreated', '$userCompleted', '$dateCreated', '$lastUpdate', '$dateCompleted')
ON DUPLICATE KEY UPDATE `uniqueID`='$uniqueID', `name`='$name', `userCreated`='$userCreated', `userCompleted`='$userCompleted', `dateCreated`='$dateCreated', `lastUpdate`='$lastUpdate', `dateCompleted`='$dateCompleted';";
				    $result = mysql_query($query);
				    if (!$result) {
				        echo "Error inserting record!";
				        trigger_error('Invalid query: ' . mysql_error());
				    } else {
    				    echo "New record created successfully";
				    }

				} else { 
    					echo("this isn't even JSON\r");
				} 

				
			}

			if ($delete == true ) {
				$uniqueID = utf8_decode(file_get_contents('php://input'));
				echo("uniqueID is " . $uniqueID . ".\r");
				$query = "DELETE FROM {$table} WHERE uniqueID='$uniqueID';";
				$result = mysql_query($query);
				if (!$result) {
					echo "Error!";
					trigger_error('Invalid query: ' . mysql_error());
				} else {
    					echo "Record deleted successfully";
				}
			}
			if ($deleteCompleted == true ) {
				$query = "DELETE FROM {$table} WHERE userCompleted NOT IN ('');";
				$result = mysql_query($query);
				if (!$result) {
					echo "Error!";
					trigger_error('Invalid query: ' . mysql_error());
				} else {
    					echo "Record deleted successfully";
				}
			}

		}

	}

mysql_close($connection);
?>