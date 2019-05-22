<!DOCTYPE html>
<html lang="en">
<head>
	<title>halaman home</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/main.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/js/main.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
    $this->load->view($main_view);
    ?>
	<section class="billboard">
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="h_logo" alt="" title=""></a>
				<nav>
					<ul class="main_nav">
						<li><a href="<?= base_url('index.php/ikan_user/ikan_u') ?>">Ikan</a></li>
						<li><a href="<?= base_url('index.php/seafood_user/seafood_u') ?>">Seafood</a></li>
						<li><a href="#">Log Out</a></li>
												<li><input class="form-control" id="txtSearch" name="txtSearch" placeholder="Search" aria-controls="example1" type="text" /></li>

					</ul>
				</nav>
			</div>

		</header>

