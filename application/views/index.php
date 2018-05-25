<!DOCTYPE HTML>
<html>
	<head>
		<title>My Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css" />
		
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="<?php echo base_url('index.php/welcome/') ?>">My Blog</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="<?php echo base_url('index.php/welcome/') ?>">Home</a></li>
					<li><a href="<?php echo base_url('index.php/admin/post/login') ?>">Login</a></li>
					
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>Welcome</h2>
				<p>Hello, my name Mochammad Fajar</p>
				<ul class="actions">
					<li><a href="#" class="button big special">Get Started</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<?php 
						$query = $this->db->get('post');
						foreach ($query->result() as $row)
						{

					?>
						<article class="feature left">
							<span class="image"><img src="<?php echo base_url() ?>images/<?php echo $row->image?>" alt="" /></span>
							<div class="content">
								<h2><?php echo $row->title?></h2>
								<p><?php echo $row->html_content?></p>
								<!-- <hr> -->
								<h6>
									<i class="fas fa-camera-retro"></i><?php echo $row->datetime?>
									&nbsp;&nbsp;
									<i class="fas fa-camera-retro"></i><?php echo $row->author?>
								</h6>
								<ul class="actions">
									<li>
										<a href="<?php echo base_url('index.php/post/show/'.$row->id.'') ?>" class="button alt">More</a>
										<!-- <?php echo anchor('post/index/'.$row->id,'Edit'); ?> -->
									</li>
								</ul>
							</div>
						</article>

					<?php
						}
					?>
					
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Gallery Saya</h2>
						<p>Ayo lihat hal apa yang saya miliki Mbloo, tentunya akan membuat anda Nyaman</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo base_url() ?>images/pic10.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">Tempus Aliquam</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Smoga menginspirasi</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Detail saya</a></li>
					</ul>
				</div>
			</section>

		
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
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/skel.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?php echo base_url() ?>assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url() ?>assets/js/main.js"></script>
			<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

	</body>
</html>