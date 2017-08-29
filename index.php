<?php session_start(); session_destroy(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PT. SALAM INDONESIA</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script> <![endif]-->
	<link rel="shortcut icon" href="images/ico/logos.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<script type="text/javascript">
	</script>
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation">
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="HalamanDepan.php"><h1></h1></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right" >
						<li class="scroll active"><a href="#navigation">Beranda</a></li>
						<li class="scroll"><a href="#about-us">Tentang Kami</a></li>
						<li class="scroll"><a href="#services">Login</a></li>
						<li class="scroll"><a href="#our-team">Tim Kami</a></li>
						<li class="scroll"><a href="#contact">Hubungi Kami</a></li>
					</ul>
				</div>
			</div>
		</div><!--/navbar-->
	</header> <!--/#navigation-->

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
			</ol><!--/.carousel-indicators-->
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/slide3.jpg)">
					<div class="carousel-caption">
						<div>
							<h2 class="heading animated bounceInDown"><font color="white">PT.SALAM INDONESIA</font></h2>
							<p class="animated bounceInUp"><font color="white" style="font-weight: bold;" >Mudah, Aman, Terjamin</font></p>
							<a class="btn btn-default slider-btn animated fadeIn" href="#services">Login</a>
						</div>
					</div>
				</div>
				<div class="item" style="background-image: url(images/slider/slide2.jpg)">
					<div class="carousel-caption"> <div>
						<h2 class="heading animated bounceInDown"><font color="white" >Suatu aplikasi yang digunakan untuk proses akad salam</font></h2>
						<p class="animated bounceInUp"><font style="font-weight: bold;">Dapat Digunakan Dengan Mudah</font></p> <a class="btn btn-default slider-btn animated fadeIn" href="#services">Login</a>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(images/slider/slide1.jpg)">
				<div class="carousel-caption">
					<div>
						<h2 class="heading animated bounceInRight"><font color="white">Transaksi Menjadi Lebih Aman</font></h2>
						<p class="animated bounceInLeft"><font color="white" style="font-weight: bold;">Kita sudah memiliki banyak pelanggan dibuktikan dengan testi yang sudah kita miliki.</font></p>
						<a class="btn btn-default slider-btn animated bounceInUp" href="#services">Login</a>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(images/slider/slide1.jpg)">
				<div class="carousel-caption">
					<div>
						<h2 class="heading animated bounceInRight">Bersama Kami</h2>
						<p class="animated bounceInLeft"><font style="font-weight: bold;">Anda Akan Mendapatkan Pelayanan Terbaik.</font></p>
						<a class="btn btn-default slider-btn animated bounceInUp" href="#services">Login</a>
					</div>
				</div>
			</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div>

</section><!--/#home-->

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">PT. SALAM INDONESIA</h2>
				<p>Didirikan oleh mahasiswa Teknik Informatika yang ingin mempermudah pembeli dalam melakukan transaksi Salam</p>
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-12">
					<h3>Apa itu Salam?</h3>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> Tentang Kami </a></li>
						<li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Tujuan Kami </a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<div class="media">
								<!-- <img class="pull-left media-object" src="images/about-us/about.jpg" alt="about us"> -->
								<div class="media-body">
									<p>Salam adalah proses jual beli dimana pembeli dapat memberikan jaminan uang muka terlebih dahulu.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission">
							<div class="media">
								<!--<img class="pull-left media-object" src="images/about-us/mission.jpg" alt="Mission"> -->
								<div class="media-body">
									<p>Tujuan aplikasi kami adalah pembeli merasa terjamin dengan melakukan pembelian disini dengan berbagai penawaran yang kami berikan.</p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section><!--/#about-us-->

	<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Login</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">

					<div class="our-service">
						<div class="services row">
						<div class="col-sm-3"> </div>
							<div class="col-sm-6">
								<div id="contact-form-section">
									<div class="status alert alert-success" style="display: none"></div>
									<form id="contact-form" class="contact" name="contact-form" method="post" action="Koneksi/login.php">
											<div class="form-group">
											<input type="text" name="userID" class="form-control text-field" required="required" placeholder="Masukkan User ID">
											</div>
											<div class="form-group">
												<input type="password" name="password" class="form-control password-field" required="required" placeholder="Masukkan Kata Sandi">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary" value="submit">Login</button>
											</div>
											<div class="form-group">
												<a href="lupapassword.php"> Lupa Kata Sandi?</a>
											</div>
											<div class="form-group">
												<font color="black"> Belum Memiliki Akun? </font><a href="RegistrasiPembeli.php"> Buat Akun</a>
											</div>
											<h2 style="color:red"><?php if(isset($_GET['error'])) {
												echo "Maaf, login anda salah";
											}
											 ?></h2>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#service-->

		<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Tim Kami</h2>
						<p>CCIT Salam adalah projek yang didirikan oleh mahasiswa 3TIPS1 dalam rangka menyelesaikan tugas projek SBA</p>
					</div>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
					<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<div class="carousel-inner team-members">
						<div class="row item active">
							<div class="col-sm-6 col-md-3" style="margin-left: 30px;">
								<div class="single-member">
									<img src="images/our-team/member2.jpg" alt="team member" />
									<h4>Ginfa Ghifari Yahya</h4>
									<h5>Main Programmer</h5>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3" style="margin-left: 120px;">
								<div class="single-member">
									<img src="images/our-team/member3.jpg" alt="team member" />
									<h4>Tivo Yudha Perwira</h4>
									<h5>Second Programmer</h5>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3" style="margin-left: 130px;">
								<div class="single-member">
									<img src="images/our-team/member3.jpg" alt="team member" />
									<h4>Genra Paksi Akbartanjung</h4>
									<h5>Senior Makalah </h5>
									<div class="socials">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#Our-Team-->
						<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Hubungi Kami</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										<div class="col-sm-6" style="margin-left: 300px;">
											<div class="contact-address"><address><p><span>CCIT</span>FTUI</p><strong>Projek Salam<br>PT. SALAM INDONESIA<br> Engineering Center Universitas Indonesia Kampus Depok</strong><br><strong>087704665764</strong> <br></address>
												<div class="social-icons">
													<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>

													<a href="#"><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

	<footer id="footer">
		<div class="container">
			<div class="text-center">
				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p>
			</div>
		</div>
	</footer> <!--/#footer-->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.parallax.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
