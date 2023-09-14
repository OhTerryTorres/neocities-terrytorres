<?php
  	/***************************************************************
		Description: 	Check if user device has admin status.
		Developer:	Vishal Kurup
	***************************************************************/

	if (isset ($_GET["name"])) {
		$name = $_GET["name"];
	}

	$admin = "072715";
	
	//Check to see if we can connect to the server
	if( $name === $admin )
	{
		echo "Administrator status confirmed.";
	} else {
		$month = 1;
		$day = 1;
		$year = 3535;
		$array = array($month,$day,$year);

		echo json_encode($array);
	}
	


?>