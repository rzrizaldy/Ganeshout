<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sistem pelaporan fasilitas kampus">
	<meta name="author" content="RNA">

	<title>Ganeshout!</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

	<!-- Custom Fonts & Icons -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	

</head>

<body>


	<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Basica"></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="lapor.php">Lapor</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar Laporan <i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="daftarLaporan.php">Tabel Daftar Laporan</a></li>
							<li><a href="petaLaporan.php">Peta Daftar Laporan</a></li>
						</ul>
					</li>
					<li><a href="#">About</a></li>
					<li><a href="#">Login</a></li> 
				</ul>
			</div>
		</div>
	</header><!--/header-->


	
	
	<section id="main-slider" class="no-margin">
		<div class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(img/slides/1.jpg)">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="carousel-content centered">
									<h2 class="animation animated-item-1"><span style="color:#aec62c;">GANESHOUT</span></h2>
									<p class="animation animated-item-2">Sistem pelaporan fasilitas kampus Institut Teknologi Bandung</p>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->

			</div><!--/.carousel-inner-->
		</div><!--/.carousel-->
		<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
			<i class="icon-angle-left"></i>
		</a>
		<a class="next hidden-xs" href="#main-slider" data-slide="next">
			<i class="icon-angle-right"></i>
		</a>
	</section><!--/#main-slider-->

	
	<!-- Call to Action Bar -->
	<div class="section section-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="calltoaction-wrapper">
						<h3>Selamat datang di <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">Ganeshout!</span> Sistem pelaporan fasilitas kampus</h3> <a href="lapor.php" class="btn btn-orange">Lapor disini!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Call to Action Bar -->


	<!-- Services -->
	<div class="section section-white">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="service-wrapper">
						<img src="img/001-newspaper.png" width="64" alt="lapor">
						<h3>Pelaporan secara online</h3>
						<p>Pelaporan fasilitas maupun insiden yang terjadi di kampus dilakukan secara online</p>
						<a href="lapor.php" class="btn">Lapor</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-wrapper">
						<img src="img/003-map.png" width="64" alt="maps">
						<h3>Pemanfaatan Google Maps</h3>
						<p>Penggunaan Google Maps mempermudah pemetaan lokasi kerusakan fasilitas kampus</p>
						<a href="lapor.php" class="btn">Lapor</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-wrapper">
						<img src="img/002-photo-camera.png" width="64" alt="multimedia">
						<h3>Pemanfaatan Multimedia</h3>
						<p>Entitas kampus dapat saling berbagi foto kerusakan dan insiden di dalam kampus</p>
						<a href="lapor.php" class="btn">Lapor</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services -->


	<hr>

	<!-- Footer -->
	<div class="footer">
		<div class="container">
			
			<div class="row">
				
				<div class="col-footer col-md-4 col-xs-6">
					<h3>Contact Us</h3>
					<p class="contact-us-details">
						<b>Alamat:</b> Jalan Ganesha No. 10, Bandung<br/>
						<b>Phone:</b> 081320589547<br/>
						<b>Fax:</b> 022123456<br/>
						<b>Email:</b> <a href="mailto:18214052@std.stei.itb.ac.id">18214052@std.stei.itb.ac.id</a>
					</p>
				</div>				
				<div class="col-footer col-md-4 col-xs-6">
					<h3>Social Networks</h3>
					<p>Hubungi kami disini!</p>
					<div>
						<img src="img/icons/facebook.png" width="32" alt="Facebook">
						<img src="img/icons/twitter.png" width="32" alt="Twitter">
						<img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
						<img src="img/icons/rss.png" width="32" alt="RSS Feed">
					</div>
				</div>
				<div class="col-footer col-md-4 col-xs-6">
					<h3>About Ganeshout</h3>
					<p>Ganeshout dikembangkan oleh kelompok RNA (Rizaldy, Nindy, Atika) dari program studi Sistem dan Teknologi Informasi 2014, Institut Teknologi Bandung</p>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>

	<!-- Javascripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Scrolling Nav JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>		

</body>
</html>