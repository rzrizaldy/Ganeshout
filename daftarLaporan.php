<?php
    session_start();
    include "config.php";
    include "laporan.class.php";
    include "darurat.class.php";
    $menu = new Menu($conn);
    $darurat = new Darurat($conn);
    $user_info = array();
  
?>


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
  <style>
  a img { display:none; }
  a:hover img { display:block; }
  </style>
  
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
          <li><a href="index.php">Home</a></li>
          <li><a href="lapor.php">Lapor</a></li>
          <li class="active"><a href="daftarLaporan.php">Tabel Laporan</a></li>
          <li><a href="petaLaporan.php">Peta Laporan</a></li>
          <li><a href="#">About</a></li>
      </ul>
    </div>
  </div>
</header><!--/header-->

<!-- Page Title -->
<div class="section section-breadcrumbs">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <h1>Lapor! </h1>
  </div>
</div>
</div>
</div>

<br>
<h2>Laporan Fasilitas Kampus</h2>
<br>
<div class="col-md-6 col-centered panel panel-default">

  <br>
  <table class="table">
    <thead>
      <tr>
        <!--<th>#</th>-->
        <th>Waktu</th>
        <th>Pelapor</th>
        <th>Jenis Laporan</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Gambar</th>
      </tr>
    </thead>
    <tbody>
      <?php while($user_info = mysqli_fetch_array($menu->getmenu())){?>
      <tr>
        <!--<td><?php echo $user_info['ID_Laporan']?></td>-->
        <td><?php echo $user_info['Time']?></td>
        <td><?php echo $user_info['NIM']?></td>
        <td><?php echo $user_info['JenisLaporan']?></td>
        <td><a href="petaLaporan.php" target="_blank"> Lat: <?php echo $user_info['LokasiLat']?>, Long: <?php echo $user_info['LokasiLng']?></td>
        <td><?php echo $user_info['Keterangan']?></td>
        <td><a href="#"><?php echo $user_info['Gambar']?><img src="<?php echo $user_info['Gambar']?>"width="200"></td>
      </tr>
      <?php } ?> 
    </tbody>
  </table>

</div>

<h2>Laporan Darurat</h2>
<br>
<div class="col-md-6 col-centered panel panel-default">

  <br>
  <table class="table">
    <thead>
      <tr>
        <th>Waktu</th>
        <th>Pelapor</th>
        <th>Laporan</th>
        <th>Lokasi</th>
      </tr>
    </thead>
    <tbody>
      <?php while($user_info = mysqli_fetch_array($darurat->getDarurat())){?>
      <tr>
        <td><?php echo $user_info['Waktu']?></td>
        <td><?php echo $user_info['NIM/NIK']?></td>
        <td><?php echo $user_info['Laporan']?></td>
        <td><a href="petaLaporan.php" target="_blank"><?php echo $user_info['Lokasi']?></td>
      </tr>
      <?php } ?> 
    </tbody>
  </table>

</div>


</body>
</html>