<?php $this->load->view('header') ?>


</div>
<!-- //inner page banner-->

<!--/banner-->
<div class="banner_slide_bg">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-caption">
					<h3>Seminar & Workshop</h3>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4">We will help you in modern technology</p>
					<a href="<?php echo base_url();?>index.php/antawijaya/produk">Find Out More <span class="fas fa-long-arrow-alt-down"></span></a>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="carousel-caption">
					<h3>Inhouse Training</h3>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4">We will help you in modern technology</p>
					<a href="#">Find Out More <span class="fas fa-long-arrow-alt-down"></span></a>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="carousel-caption">
					<h3>Consultant Business<span></h3>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4">We will help you in modern technology</p>
					<a href="#">Find Out More <span class="fas fa-long-arrow-alt-down"></span></a>
					</div>
			</div>
			<div class="carousel-item item4">
				<div class="carousel-caption">
					<h3>Business Coaching <span>Projects</span></h3>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4">We will help you in modern technology</p>
					<a href="#">Find Out More <span class="fas fa-long-arrow-alt-down"></span></a>
					</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!--//banner-->

<!-- Welcome -->
<section class="welcome py-5 my-lg-5">
	<div class="container">
		<div class="row welcome_grids">
			<div class="col-lg-7 mb-lg-0 mb-5">
				<h3 class="mb-3 text-capitalize">Welcome to Antawijaya</h3>
				<p class="my-2 initial font-italic">Training & Consulting</p>
				<p class="mb-5 mt-5"> Antawijaya Training & Consulting didirikan dibawah bendera badan usaha PT. Antawijaya Multi Kreasi didirikan di atas fondasi keahlian, pengalaman, dan pemahaman yang mendalam atas pertumbuhan dan perkembangan bisnis, baik domestik maupun global. Tujuan utama kami adalah menciptakan nilai bagi para pelaku bisnis di tanah air. Kami melakukannya melalui penyediaan jasa konsultansi bisnis, seminar dan workshop, serta berbagai jenis in-house training. Kami juga menyediakan jasa bagi penyusunan perencanaan dan pengembangan bisnis, serta kami siap melakukan pendampingan konsultasi pada perusahaan-perusahaan di tanah air untuk menyelesaikan suatu proyek tertentu hingga mencapai misinya. </p>
				</div>
				<div class="col-lg-5">
				<img src="<?php echo base_url();?>/assets/web/images/logo.png" alt="logo">
			</div> 
		</div>
	</div>
</section>
<!-- //Welcome -->

<!-- model video-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body video">
				<iframe src="https://player.vimeo.com/video/7396421"></iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- //model video-->

<!-- Testimonials -->
<section class="testimonials py-5">
	<div class="container py-lg-5">
		<div class="row">
			<!-- Clients -->
			<div class=" col-lg-6 clients">
				<div class="slider p-sm-5 p-4">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="client row">
									<div class="col-sm-4">
										<img src="<?php echo base_url();?>/assets/web/images/coach.jpg" alt="" />
									</div>
									<div class="col-sm-8">
										<h5 class="my-2">DR.TB.DONNY SYAFARDAN,SE,MM</h5>
										<h6>Coach</h6>
										<ul class="rating mt-2">
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
										</ul>
									</div>
								</div>
								<p class="my-4">Doktor Ekonomi Manajemen Bisnis lulusan UNPAD tahun 2007 dengan disertasi ttg ASymmetric Information dan Agency Theory.</p>
								</li>
							</ul>
					</div>
				</div>
			</div>
			<!-- //Clients -->
			<div class="col-lg-6 collections mt-lg-0 mt-5 px-sm-5 px-4">
				<h3>Tubagus Donny Syafardan</h3>
				<p class="my-4">Sarjana ekonomi diperolehnya dari FE-UI tahun 1993,sedangkan Magister Manajemen diperoleh dari UGM tahun 1996. Pernah Mengajar Pasca Sarjana UNPAD, MM-NHI, Universitas Maranatha, Politeknik Pos, dan Universitas Parahyangan, Bandung. Berpengalaman kerja selama 25 tahun antara lain sebagai kepala kantor, manajer wilayah, senior manajer, hingga kepala proyek. Melakukan berbagai penelitian antara lain tentang Good Corporate Governance, Risk management,Optimal Investment,Telekomunikasi, Mind mapping,Entrepreneurship, dan leadership.</p>
				<p class="my-4">Tubagus Donny Syafardan memandang dirinya sebagai orang yang senantiasa berusaha memperoleh makna dan kemanfaatan bagi dirinya, orang lain dan lingkungan. Ia penuh semangat untuk mencapai kemajuan bersama, kegembiraan dan kebahagiaan bersama. Ia akan terus berusaha memahami apa, mengapa, dan bagaimana segala sesuatu untuk berkembang ke arah yang lebih baik dan lebih bermakna, lebih indah, dan lebih berguna. Ia sangat gandrung pada ilmu pengetahuan. Alhamdulillah.</p>
			</div>
		</div>
	</div>
</section>
<!-- Testimonials -->

<!-- Process -->
<section class="process py-5 my-lg-5">
	<div class="container">
		<div class="row process-grids">
			<div class="col-lg-4 col-md-6 grid1">
				<span class="fab fa-digital-ocean"></span>
				<h3 class="text-uppercase mt-3">Visi</h3>
				<p class="mt-sm-5 mt-3">Menjadi perusahaan training provider terdepan untuk menciptakan sumber daya manusia yang unggul, memiliki kompentensi dan kemampuan berinovasi sesuai perkembangan jaman.</p>
							</div>
			<div class="col-lg-4 col-md-6 grid1 mt-md-0 mt-5">
				<span class="fab fa-digital-ocean"></span>
				<h3 class="text-uppercase mt-3">Misi</h3>
				<p class="mt-sm-5 mt-3">Menciptakan kondisi terbaik pada performa personal, organisasi industri, pemerintah, dan publik dengan menyediakan jasa pelatihan berkualitas tinggi, inovatif, pelayanan prima serta dengan dukungan sumber daya manusia profesional, berintegritas, visioner dan berbasis teknologi terdepan saat ini.</p>
				</div>
			<div class="col-lg-4 col-md-12 grid1 mt-lg-0 mt-5">
				<span class="fab fa-digital-ocean"></span>
				<h3 class="text-uppercase mt-3">Nilai</h3>
				<ul class="mt-4">
					<li class="mt-1"><span class="fas fa-angle-left"></span>Berpegang pada etika: selalu berpegang teguh pada standar mutu pelatihan yang tinggi dalam setiap aktifitas. Konsisiten dalam mencapai standar mutu terbaik.</li>
					<li class="mt-2"><span class="fas fa-angle-left"></span>Gigih: terus menerus meningkatkan kualitas dan materi pelatihan dengan standar tinggi  berbasis teknologi.</li>
					<li class="mt-2"><span class="fas fa-angle-right"></span>Proaktif: senantiasa mengupayakan peningkatan pelayanan kepada klien sesempurna mungkin.</li>
					<li class="mt-2"><span class="fas fa-angle-right"></span>Saling menghormati: membangun hubungan berdasarkan prinsip saling menghormati diantara rekan kerja, klien, principal dan masyarakat industri.
</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- //Process -->

<!-- project -->
<section class="project py-5 text-center">
	<div class="container">
		<h3 class="text-capitalize mb-5">Do you want to start?</h3>
		<a href="<?php echo base_url();?>index.php/register" class="text-uppercase"><i></i>DAFTAR </a>
	</div>
</section>
<!-- //project -->

<!-- footer -->	
<footer>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h3 class="text-uppercase mb-3">Address</h3>
				<address>
					<p><strong>ANTAWIJAYA TRAINING & CONSULTING:</strong></p>
					<p class="mb-3">Jl. Kuningan XI no.4 Antapani. Bandung 40291 – Indonesia</p>
					<p><strong>Phone</strong> : (022) 20547800</p>
					<p><strong>Email</strong> : <a href="mailto:infom">info@example.com</a></p>
					<p><strong>Fax</strong> : (022) 20547800</p>
				</address>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-sm-0 mt-4 p-md-0">
				<h3 class="text-uppercase mb-3">links</h3>
				<div class="links">
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/"><i class="fas fa-angle-right"></i> Beranda</a>
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/visimisi"><i class="fas fa-angle-right"></i> Visi-Misi</a>
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/produk"><i class="fas fa-angle-right"></i> Produk & Jasa</a>
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/kontak"><i class="fas fa-angle-right"></i>Kontak Kami</a>
				</div>	
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
				<h3 class="text-uppercase mb-3">Recent posts</h3>
				<div class="posts">
					<p class="pt-2">lorem ipsum dolor sit amet
					<span class="font-italic">31st march, 2018.</span></p>
					<p class="py-2 my-2 middle">lorem ipsum dolor sit amet
					<span class="font-italic">31st march, 2018.</span></p>
					<p class="pt-2">lorem ipsum dolor sit amet
					<span class="font-italic">31st march, 2018.</span></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer -->

<?php $this->load->view('footer') ?>