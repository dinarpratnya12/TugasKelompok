<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/cover.css'); ?>" rel="stylesheet">

</head>
<body class="text-center">

	<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand">DILTOP</h3>          
				<nav class="nav nav-masthead justify-content-center">
					<a class="nav-link active" href="#">Home</a>
					<a class="nav-link" href="#">About</a>
					<a class="nav-link" href="#">Contact</a>
					<a class="nav-link" href="#">     </a>
					<a class="btn btn-secondary" href="<?= base_url(); ?>index.php/Welcome/Login">Log In<!-- <button type="button" class="btn btn-outline-light">Log In</button></a> -->
				</nav>
			</div>
		</header>

		<main role="main" class="inner cover">
			<h1 class="cover-heading">Welcome In Our Page</h1>
			<p class="lead">On this page we provide the needs of the laptop you need.</p>
			<p class="lead">
				<a href="<?= base_url(); ?>index.php/Learnmore" class="btn btn-lg btn-secondary">Learn more</a>
			</p>
		</main>

		<footer class="mastfoot mt-auto">
			<div class="inner">
				<!-- <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
			</div>
		</footer>
	</div>


	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>