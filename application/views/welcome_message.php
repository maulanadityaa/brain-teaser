<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style type="text/css">
		body {
			margin: 40px;
			font-family: Arial, sans-serif;
		}
	</style>
</head>

<body>
	<div class="container d-flex text-center justify-content-center">
		<div class="jumbotron">
			<h1>Welcome to CodeIgniter!</h1>
			<p class="lead">The small framework with powerful features.</p>
			<p><a class="btn btn-lg btn-primary" href="http://codeigniter.com" role="button">Learn more</a></p>
			<p><a class="btn btn-lg btn-success" href="<?php echo site_url('/game'); ?>" role="button">Brain Teaser Game</a></p>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>