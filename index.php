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

	<!-- Regular Nav <nav class="nav">
		<div class="nav-inner">
			<a class="brand" href="#">Project Byte</a>
			<a href="#">Home</a>
			<a href="#">Browse</a>
		</div>
	</nav> -->

	<nav class="nav-hero">
		<div class="nav-inner">
			<a class="brand" href="#">Project Byte</a>
			<a href="#" style="margin-left: 15px;">Home</a>
			<a href="#">Browse</a>
			<div class="clear"></div>
		</div>
	</nav>

	<div class="hero-wrapper">
		<div class="hero">
			<div class="header_main">
				<h2>Project Byte</h2>
				<h3>A Collection of Bytes</h3>
				<br /><br />
				<a href="#" class="hero-button">View Projects</a>
			</div>
		</div>
	</div>

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

		<div class="row">
			<div class="col-md-6">
				<div class="section-header">Recent</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<img src="http://placehold.it/500x500?text=Text%20Is%20Cool" />
							<div class="card-content">
								<div class="card-title">Project Title</div>
								<p>Hi</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
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
			<div class="col-md-6">
				<div class="section-header">Discussion</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<img src="http://placehold.it/500x500?text=Text%20Is%20Cool" />
							<div class="card-content">
								<div class="card-title">Project Title</div>
								<p>Hi</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
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
