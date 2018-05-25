<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>My BLog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="<?php echo base_url('index.php/welcome/') ?>">My BLOG</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="<?php echo base_url('index.php/welcome/') ?>">Home</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<?php foreach($post_detail as $row){ ?>
			
				<section id="main" class="wrapper">
					<div class="container">

						<header class="major special">
							<h2><?php echo "$row->title"; ?></h2>
							<p><?php echo "$row->html_content"; ?></p>
						</header>

						<a href="#" class="image fit"><img src="<?php echo base_url() ?>images/<?php echo "$row->image"; ?>" alt="" /></a>
						<p><?php echo "$row->markdown_content"; ?></p>

					</div>
				</section>

			<?php } ?>
			

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="#">Moch Fajar</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/skel.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?php echo base_url() ?>assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url() ?>assets/js/main.js"></script>

	</body>
</html>