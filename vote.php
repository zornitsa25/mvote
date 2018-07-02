<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Vote</title>

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/vote.css">

	<!-- Add js library -->
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900" rel="stylesheet">
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav>
		<span id="brand">
			<a href="index.html">M<span>Vote</span></a>
		</span>

		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">New Albums</a></li>
			<li><a href="vote.php">Vote</a></li>
			<li><a href="#footer-main">Contact</a></li>
		</ul>

		<div id="toggle">
			<div class="span" id="one"></div>
			<div class="span" id="two"></div>
			<div class="span" id="three"></div>
		</div>
	</nav>

	<div id="resize">
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">New Albums</a></li>
			<li><a href="vote.php">Vote</a></li>
			<li><a href="#footer-main">Contact</a></li>
		</ul>
	</div>

	<main class="content">
		<section class="content-poll">
			<div class="poll-wrapper">
				<!-- Poll -->
				<div id="poll"></div>
			</div>
		</section>
	</main>

	<?php
		include 'footer.php';
	?>

	<!-- Scripts -->
	<script src="js/vote.js" type="text/javascript"></script>
	<script src="js/menu.js" type="text/javascript"></script>
</body>
</html>