<?php

	session_start();

	if (!isset($_SESSION['dateOPR'])){
		$_SESSION['dateOPR'] = 0;
	}

	function Connection(){

		$server="localhost";
		$user="iot";
		$pass="MttyqgdaV1nWw";
		$db="iot";

		$connection = mysqli_connect($server, $user, $pass);

		if (!$connection) {
		    die('MySQL ERROR: ' . mysqli_connect_error());
		}

		mysqli_select_db($connection,$db) or die( 'MySQL ERROR: '. mysqli_connect_error() );

		return $connection;
	}

?>
