<?php
set_time_limit(0);
ignore_user_abort(1);
  	/***************************************************************
		Description: 	City data in JSON.
		Developer:	Vishal Kurup
	***************************************************************/
	
	$host = "terrytorrescom.domaincommysql.com"; //Your database host server
	$db = "yoricktest"; //Your database name
	$user = "terrytorres"; //Your database user
	$pass = "agustin87"; //Your password
	
	$connection = mysql_connect($host, $user, $pass);

	// Received monologueTitle from app
	if (isset ($_GET["monologueTitle"])) {
		$monologueTitle = $_GET["monologueTitle"];
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
			$query = "SELECT tags FROM monologueTags WHERE monologueTitle='$monologueTitle'";
			$resultset = mysql_query($query, $connection);
			
			$tags = mysql_fetch_row($resultset);
			
			//Output the data as JSON
			echo json_encode($tags[0]);
		}
		
		
	}
	

?>