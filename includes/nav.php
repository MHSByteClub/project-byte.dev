<?php $site = "//".$_SERVER['SERVER_NAME'].""; date_default_timezone_set('America/Chicago'); ?>

<!DOCTYPE html>

<html>

<head>

	<title>Project Byte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?php echo $site; ?>/assets/imgs/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo $site; ?>/assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $site; ?>/assets/css/main.css" />

</head>

<body>	
	
	<nav class="nav">
		<div class="nav-inner">
			<a class="brand" href="<?php echo $site; ?>">Project Byte</a>
			<a href="<?php echo $site; ?>">Home</a>
			<a href="<?php echo $site; ?>/browse">Browse</a>
			<a href="<?php echo $site; ?>/signin" style="float: right;">Sign In</a>
			<a href="<?php echo $site; ?>/signup" style="float: right;">Sign Up</a>
		</div>
	</nav>