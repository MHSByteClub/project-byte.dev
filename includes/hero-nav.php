<?php $site = "http://".$_SERVER['SERVER_NAME'].""; date_default_timezone_set('America/Chicago'); ?>

<!DOCTYPE html>

<html>

<head>

	<title>Project Byte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo $site; ?>/assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $site; ?>/assets/css/main.css" />

</head>

<body>

	<nav class="nav-hero">
		<div class="nav-inner">
			<a class="brand" href="#">Project Byte</a>
			<a href="#">Home</a>
			<a href="#">Browse</a>
			<a class="right" href="#" style="float: right;">Sign In</a>
			<a href="#" style="float: right;">Sign Up</a>
			<div class="clear"></div>
		</div>
	</nav>