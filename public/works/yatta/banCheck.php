<?php
  	/***************************************************************
		Description: 	Check if user device is banned.
		Developer:	Vishal Kurup
	***************************************************************/

	$host = "terrytorrescom.domaincommysql.com"; //Your database host server
	$db = "events"; //Your database name
	$user = "terrytorres"; //Your database user
	$pass = "agustin87"; //Your password
	
	$connection = mysql_connect($host, $user, $pass);


	if (isset ($_GET["keyword"])) {
		$keyword = $_GET["keyword"];
		$table = $keyword . "BannedUUIDs";
	}

	if (isset ($_GET["UUID"])) {
		$UUID = $_GET["UUID"];
	}

	//Check to see if we can connect to the server
	if(!$connection)
	{
		die("Database server connection failed.");	
	}
	else
	{
		//Attempt to select the database
		$dbconnect = mysql_select_db($db, $connection);
		
		//Check to see if we could select the database
		if(!$dbconnect)
		{
			die("Unable to connect to the specified database!");
		}
		else
		{
			$result = mysql_query("SELECT bannedUUID FROM $table");
			$bannedUUIDs = Array();
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    				$bannedUUIDs[] =  $row['bannedUUID'];  
			}
	
		if (in_array($UUID, $bannedUUIDs)) {
			$banString = "You have been banned from this event";
    			echo "{$banString}";
		}
	}
		
		
	}


?>