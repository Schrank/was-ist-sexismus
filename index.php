<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>Was ist Sexismus und wo begegnet er uns</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Was ist Sexismus und wo begegnet man ihm?">
	<meta name="author" content="Fabian Blechschmidt">

	<!-- Le styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">Was ist Sexismus?</a>

			<div class="nav-collapse">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#add">Spruch eintragen</a></li>
					<li><a href="#impressum">Impressum</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>
<div class="container" id="content">
	<?php if(isset($_GET['success']) && $_GET['success']): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss="alert">×</a>
		<h4 class="alert-heading">Danke!</h4>
		Dein Spruch wurde in die Datenbank aufgenommen.
	</div>
		<?php endif; ?>
	<?php require 'spruch/index.php'; ?>
</div>
<!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
