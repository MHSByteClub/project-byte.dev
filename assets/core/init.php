<?php
	
	ob_start(); 
	session_start();
	error_reporting(0);

	$site = "http://".$_SERVER['SERVER_NAME']."";

	require("database/connect.php");
	require("functions/general.php");
	require("functions/users.php");

	if(logged_in() === true) {
		$session_user_id = $_SESSION['user_id'];
		$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'email', 'avatar', 'description', 'power_rank', 'active', 'type', 'dob');
		if(user_active($user_data['username']) === false) {
			session_destroy();
			header("location: index");
			exit;
		}
	}

	$errors = array();