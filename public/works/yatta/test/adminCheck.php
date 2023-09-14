<?php
  	/***************************************************************
		Description: 	Check if user device has admin status.
		Developer:	Vishal Kurup
	***************************************************************/

	$host = "terrytorrescom.domaincommysql.com"; //Your database host server
	$db = "events"; //Your database name
	$user = "terrytorres"; //Your database user
	$pass = "agustin87"; //Your password
	
	$connection = mysql_connect($host, $user, $pass);


	if (isset ($_GET["name"])) {
		$name = $_GET["name"];
	}

	//put spaces back into username and title
	$username = str_replace("yyyspacezzz", " ", $name);

	$admin = "072715";
	
	//Check to see if we can connect to the server
	if( strcasecmp($username, $admin) == 0 )
	{
		echo "Administrator status confirmed.";
	} else {
		$month = 01;
		$day = 01;
		$year = 3535;
		$array = array($month,$day,$year);

		echo json_encode($array);
	}
	


?>