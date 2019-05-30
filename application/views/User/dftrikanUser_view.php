<style>
 .grid-container {
	display: grid;
	grid-gap: 20px 20px;
	grid-template-columns: auto auto auto;
	padding: 10px;
	background-color: transparent;

}
html{
	background: url(https://i.imgur.com/qeyA8cZ.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
body{
	background-color: transparent;
	padding : 20px;

}
.judul{
	color : #fff;
	text-align : center;
	padding : 50px;
}
</style>
<body>


<br>
<br>
<br>
<br>
<br>
<!-- Begin Page Content -->
<!-- <div > -->
	<h3 class="judul">
		<u>
			Daftar Ikan</u>
	</h3>
	<div class="grid-container">

		<?php
for ($i=0; $i < count($total) ; $i++) {
?>
		<div class="grid-item">
			<div class="card" style="width: 100%;">
				<center>
					<h4 style="color:black">
						<b>
							<u><?= $total[$i]->nama_ikan ?></u>
						</b>
					</h4>
				</center>
				<img
					class="card-img-top"
					src="<?= base_url('img/').$total[$i]->gambar_ikan ?>"
					width="280"
					height="200"
					alt="Card image cap">
				<div class="card-body">
					<div class="card-text">
						<button
							type="button"
							class="btn btn-primary"
							data-toggle="modal"
							data-target="#exampleModal<?= $i ?>">
							More Detail
						</button>
						<div
							class="modal fade"
							id="exampleModal<?= $i ?>"
							tabindex="-1"
							role="dialog"
							aria-labelledby="exampleModalLabel"
							aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="card-title" style="color:red">
											<b>
												<u>Info Data :
												</u>
											</b>
										</h5>
										<!-- <?= $this->session->flashdata('message'); ?> -->
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<?php
			  foreach ($ikan as $item ) {
				if ($item->nama_ikan == $total[$i]->nama_ikan) {
				  // code...
				  ?>
										<form
											id="modal"
											action="<?= base_url('dftrikan_user/editHarga/').$item->id_ikan ?>"
											method="post">
											<div class="row justify-content-end-mr-5">
												<div class="col-md-2" style="color:black"><b><?= $item->nama_pasar ?></b></div>
												<div class="form-group row">
													
														<span style="font-weight: bold;"> :  Rp.
														<?= $item->harga ?></span>
												</div>
												<!-- </div> <br> -->

												<div style="text-align:right;"  class="col-md-12">
													<span ><i>Last update data :
														<?= $item->last_update ?></i></span>
												</div>
											</div>
										</form>

										<?php
				}
			  }
			?>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		<?php
}
// }
?>
	</div>
</div>
</div>
</body>


 


