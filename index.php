<?php $site = "http://".$_SERVER['SERVER_NAME'].""; date_default_timezone_set('America/Chicago'); ?>

<!DOCTYPE html>

<html>

<head>

	<title>Project Byte</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $site; ?>/assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $site; ?>/assets/css/main.css" />

</head>

<body>

	<nav class="nav">
		<div class="nav-inner">
			<a class="brand" href="#">Project Byte</a>
			<a href="#">Home</a>
			<a href="#">Browse</a>
		</div>
	</nav>

	<div class="container">
		<center><h1>coming soon</h1></center>
	</div>

	<footer class="footer">
		<!-- Not needed for now <div class="footer-inner">
			
		</div> -->
		<div class="footer-copyright">
			<div class="footer-inner">
				&copy; HoloHex Corp. 2015 // <?php echo date("Y"); ?>. All rights reserved.
			</div>
		</div>
	</footer>

</body>

</html>
