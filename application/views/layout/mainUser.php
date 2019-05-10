<!DOCTYPE html>
<html lang="en">
<head>
	<title>halaman home</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/main.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
</head>
<body>

	<section class="billboard">
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="h_logo" alt="" title=""></a>
				<nav>
					<ul class="main_nav">
						<li><a href="<?php echo base_url();?>/ikan_user/ikan_u">Ikan</a></li>
						<li><a href="<?php echo base_url();?>/seafood_user/seafood_u">Seafood</a></li>
						<li><a href="#">Log Out</a></li>
					</ul>
				</nav>
			</div>
			<?php
  $this->load->view($main_user);?>

		</header>
