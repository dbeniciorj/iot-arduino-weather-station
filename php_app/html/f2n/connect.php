<?php

	function Connection(){
		$server="localhost";
		$user="iot";
		$pass="MttyqgdaV1nWw";
		$db="iot";
	   	
		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}
		
		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );

		return $connection;
	}
?>
