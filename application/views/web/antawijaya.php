<?php $this->load->view('header') ?>

	<!-- inner page banner-->
<div class="inner-banner">
	
</div>
<!-- //inner page banner-->

<!-- Welcome -->
<section class="welcome py-5 my-lg-5">
	<div class="container">
		<div class="row welcome_grids">
			<div class="col-lg-7 mb-lg-0 mb-5">
				<h3 class="mb-9 text-capitalize">Welcome to Antawijaya</h3>
				<!-- foreach untuk perulanfan setiap isi variable tadi, abouts di ambil dari arry variable $data tadi -->
            	<?php foreach($abouts as $about) : ?>
            		<!-- title dan deskripsi dari nama field yang ada di database -->
					<p class="my-2 initial font-italic"><?=$about->title?></p>
					<p class="mb-5 mt-4"> <?=$about->deskripsi?> </p>
            	<?php endforeach; ?>
				</div>
			<div class="col-lg-5 welcome_right">
				<img src="<?php echo base_url();?>/assets/web/images/antawijaya.jpeg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!-- //Welcome -->

<?php $this->load->view('footer') ?>