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
        <li><a href="index.php">Home</a></li>
        <li><a href="lapor.php">Lapor</a></li>
        <li class="active" class="dropdown">
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
<div class="col-md-6 col-centered panel panel-default">

  <br>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>NIM</th>
        <th>Jenis Laporan</th>
        <th>Lokasi</th>
        <th>Gambar</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>18214052</td>
        <td>Urgent</td>
        <td>xxxxx</td>
        <td>yyyy</td>
        <td>abcdefg</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>18214052</td>
        <td>Urgent</td>
        <td>xxxxx</td>
        <td>yyyy</td>
        <td>abcdefg</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>18214052</td>
        <td>Urgent</td>
        <td>xxxxx</td>
        <td>yyyy</td>
        <td>abcdefg</td>
      </tr>
    </tbody>
  </table>

</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2qQzprSbNBaE4hsZbZudfMDAR6dMvlDk&callback=initMap">
</script>
</body>
</html>