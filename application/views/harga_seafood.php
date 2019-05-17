<!DOCTYPE html>
<html lang="en">
<head>
	<title>harga ikan </title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="billboard">
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="h_logo" alt="" title=""></a>
				<nav>
					<ul class="main_nav">
						<li><a href="<?= base_url('index.php/ikan_user/ikan_u') ?>">Ikan</a></li>
						<li><a href="<?= base_url('index.php/seafood_user/seafood_u') ?>">Seafood</a></li>
						<li><a href="<?= base_url('index.php/Auth') ?>">Log Out</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section class="caption">
			<div class="wrapper">
				<section class="testimonials">
				<?php foreach($result as $key){  ?>
					<?php
					echo '<img src="data:image/jpeg;base64,'.base64_encode($key->gambar) .'" class="img-item" />';
					?>

					<a href="" target="_blink" class="author"><?php echo $key->nama_seafood ?></a>
					<div class="">
						<h4>Harga Ikan/kg</h4>
						<h5>Pasar <?php echo $key->nama_pasar ?>: Rp. <?php echo $key->harga ?></h5>
					</div>
						<?php } ?>
				</section>


	</section>


</body>
