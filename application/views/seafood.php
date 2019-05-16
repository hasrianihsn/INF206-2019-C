<!DOCTYPE html>
<html lang="en">
<head>
	<title>halaman seafood</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<style>
.img-item {
	width: 300px;
	height: 200px;
}
</style>

	<section class="billboard">
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="h_logo" alt="" title=""></a>
				<nav>
					<ul class="main_nav">
						<li><a href="<?= base_url('index.php/ikan_user/ikan_u') ?>">Ikan</a></li>
						<li><a href="<?= base_url('index.php/seafood_user/seafood_u') ?>">Seafood</a></li>
						<li><a href="#">Log Out</a></li>
					</ul>
				</nav>
			</div>
		</header>

		</section>
		<section class="caption">
			<div class="wrapper">
				<div class="row">
				<?php foreach($result as $key){  ?>
					<div class="col-4 my-2">
					<?php 
					echo '<img src="data:image/jpeg;base64,'.base64_encode($key->gambar) .'" class="img-item" />';
					?>
						<a href="" target="_blink" class="author h4"><?php echo $key->nama_seafood ?></a>
					</div>			
					<?php } ?>
				</div>
			</div>
		</section>
	</section>


</body>

