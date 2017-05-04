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
                    <li class="active"><a href="lapor.php">Lapor</a></li>
                    <li><a href="daftarLaporan.php">Tabel Laporan</a></li>
                    <li><a href="petaLaporan.php">Peta Laporan</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

<!-- Page Title -->

<div id="map-canvas"></div>
<div class="container-fluid" id="main">
  <div class="row">
    <div class="col-xs-4" id="left">
        <div class="section section-breadcrumbs">
         <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <h1>Lapor!</h1>
               </div>
           </div>
       </div>
   </div>
   <!-- item list -->
   <br>
   <form method="POST" action="config.php" target="my_iframe">

    <div class="form-group">
        <label for="UserNIM">NIM</label>
        <input type="text" class="form-control" name="UserNIM">
    </div>
    <div class="form-group">
        <label for="JenisLaporan">Jenis laporan</label>
        <select class="form-control"  name="JenisLaporan">
            <option value="darurat">Darurat</option>
            <option value="fasilitas">Fasilitas</option>
        </select></br>
    </div>
    <label>Unggah Gambar</label>
    <div class="input-group">
     <span class="input-group-btn">
         <span class="btn btn-default btn-file">
             Browse… <input type="file" id="imgInp">
         </span>
     </span>
     <input type="text" class="form-control" readonly>
 </div>
 <img id='img-upload'/>


 <div class="form-group">
    <label for="LaporanDesc">Keterangan</label>
    <input type="text" class="form-control" name="LaporanDesc">
</div>

<input type="hidden" name="lat" id="lat" value="0" />
<input type="hidden" name="lng" id="lng" value="0" />
<div class="col-xs-8"><div id="map-canvas" style="width:100%;height:300px" align="center"></div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKbFGlvbtwtQucdIB_l8Vc8OQW5bPxtQs&sensor=false"></script>
<script type="text/javascript" src="map.js"></script></div> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKbFGlvbtwtQucdIB_l8Vc8OQW5bPxtQs&callback=initMap">
</script>

<button type="submit" class="btn btn-info btn-block" name="submit" onClick="window.location.reload()">Submit</button>
</form>

</div>

</body>
</html>