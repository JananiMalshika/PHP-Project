<?php
	
	//create connection
	$conn = new mysqli('localhost', 'root', '', 'zeeDB');

	//check errors
	if ($conn->connect_error)
	{
		die("CONNECTION FAILED! : ".$conn->connect_error);
	}
	//echo "Connected successfully";

?>