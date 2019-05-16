
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
					echo '<img src="data:image/jpeg;base64,'.base64_encode($key->gambar_ikan) .'" class="img-item" />';
					?>
						<a href="<?= base_url('index.php/harga_user/harga') ?>" target="_blink" class="author h4"><?php echo $key->nama_ikan ?></a>
					</div>			
					<?php } ?>
				</div>
			</div>
		</section>
	</section>
</body>
