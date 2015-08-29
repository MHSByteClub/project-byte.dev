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
		
		<div class="section-header">Featured</div>

		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<img src="http://placehold.it/500x500?text=Text%20Is%20Cool" />
					<div class="card-content">
						<div class="card-title">Project Title</div>
						<p>Hi</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="http://placehold.it/500x500?text=Text%20Is%20Cool" />
					<div class="card-content">
						<div class="card-title">Project Title</div>
						<p>Hi</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="http://placehold.it/500x500?text=Text%20Is%20Cool" />
					<div class="card-content">
						<div class="card-title">Project Title</div>
						<p>Hi</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="http://placehold.it/500x500?text=Text%20Is%20Cool" />
					<div class="card-content">
						<div class="card-title">Project Title</div>
						<p>Hi</p>
					</div>
				</div>
			</div>
		</div>

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
