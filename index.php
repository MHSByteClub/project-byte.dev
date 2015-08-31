<!-- Navigation specifically for pages with a hero image. Should only be one page... -->
<!-- require_once is a php parameter that makes the file specified only included once in the file. If it can't be found, the rest of the page won't load. IF there's a repeated require_once for the same file, it won't be included in the page again -->
<?php require_once("./includes/hero-nav.php"); ?>

	<div class="hero-wrapper">
		<div class="hero">
			<div class="header_main">
				<h2>Project Byte</h2>
				<h3>A Collection of Bytes</h3>
				<br /><br />
				<a href="#" class="hero-button">Browse Projects</a>
			</div>
		</div>
	</div>

	<div class="container">
		
		<div class="section-header">Featured</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="card hover">
					<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
					<div class="card-content">
						<div class="card-title"><a href="#">Project Title</a></div>
						<p>Hi</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="card hover">
					<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
					<div class="card-content">
						<div class="card-title"><a href="#">Project Title</a></div>
						<p>Hi</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="card hover">
					<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
					<div class="card-content">
						<div class="card-title"><a href="#">Project Title</a></div>
						<p>Hi</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="card hover">
					<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
					<div class="card-content">
						<div class="card-title"><a href="#">Project Title</a></div>
						<p>Hi</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="section-header">Recent</div>
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card hover">
							<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
							<div class="card-content">
								<div class="card-title"><a href="#">Project Title</a></div>
								<p>Hi</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card hover">
							<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
							<div class="card-content">
								<div class="card-title"><a href="#">Project Title</a></div>
								<p>Hi</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="section-header">Discussion</div>
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card hover">
							<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
							<div class="card-content">
								<div class="card-title"><a href="#">Project Title</a></div>
								<p>Hi</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card hover">
							<img src="http://placehold.it/500x500?text=Text+Is+Cool" />
							<div class="card-content">
								<div class="card-title"><a href="#">Project Title</a></div>
								<p>Hi</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

<?php require_once("./includes/footer.php"); ?>
