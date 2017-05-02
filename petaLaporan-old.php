<!DOCTYPE html >
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
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 100px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      .floating-menu {
        font-family: Poppins;
        color : white;
        background: teal;
        padding: 5px;;
        width: 200px;
        z-index: 100;
        position: fixed;
        top: 30px;
        right: 30px;
      }
      #map-canvas {
        margin: 0;
        padding: 0;
        height: 400px;
        max-width: none;
      }
      #map-canvas img {
        max-width: none !important;
      }

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
            <li class="active" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar Laporan <i class="icon-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="daftarLaporan.php">Tabel Daftar Laporan</a></li>
                <li><a href="petaLaporan.php">Peta Daftar Laporan</a></li>
              </ul>
            </li>
            <li><a href="#">About</a></li>
          </ul>
        </div>
      </div>
    </header><!--/header-->


    <div align="center">
      <button class="w3-btn w3-hover-sand" onclick="location.href='index.php'">Back to home</button>
    </div>
  </nav>
  
  <div id="map"></div>

  <script>

    var customLabel = {
      Fasilitas: {
        label: 'F'
      },
      Insiden: {
        label: 'I'
      }
    };

    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), 
      {
        center: new google.maps.LatLng(-6.89148, 107.61065),
        zoom: 17,
        styles: [{"featureType":"landscape.natural",
        "elementType":"geometry.fill",
        "stylers":[{"visibility":"on"},
        {"color":"#e0efef"}]},
        {"featureType":"poi",
        "elementType":"geometry.fill",
        "stylers":[{"visibility":"on"},
        {"hue":"#1900ff"},
        {"color":"#c0e8e8"}]},
        {"featureType":"road",
        "elementType":"geometry",
        "stylers":[{"lightness":100},
        {"visibility":"simplified"}]},
        {"featureType":"road",
        "elementType":"labels",
        "stylers":[{"visibility":"off"}]},
        {"featureType":"transit.line",
        "elementType":"geometry",
        "stylers":[{"visibility":"off"},
        {"lightness":700}]},
        {"featureType":"water",
        "elementType":"all",
        "stylers":[{"color":"#7dcdcd"}]},
        {
         "featureType": "poi.business",
         "elementType": "labels",
         "stylers": [{ "visibility": "off" }]}
         ]

       });
var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('laporan.xml', function(data) { //masih test pake xml biasa
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var time = markerElem.getAttribute('time');
              var nim = markerElem.getAttribute('nim');
              var jenis = markerElem.getAttribute('jenis');
              var gambar = markerElem.getAttribute('gambar');
              var keterangan = markerElem.getAttribute('keterangan');
              var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('html');
              var strong = document.createElement('strong');
              strong.textContent = "Pelapor: " + nim
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = "Kategori: " + jenis
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));

              var html = document.createElement('html');
              html.textContent = "<img src='http://www.acservicecenterinchennai.com/ac-repairs/ac-broken-repair.jpg'>"
              infowincontent.appendChild(html);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = "Detail: " + keterangan
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));


              var text = document.createElement('text');
              text.textContent = "Waktu: " + time
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));
              
              var icon = customLabel[jenis] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
});
}

function downloadUrl(url, callback) {
  var request = window.ActiveXObject ?
  new ActiveXObject('Microsoft.XMLHTTP') :
  new XMLHttpRequest;

  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      request.onreadystatechange = doNothing;
      callback(request, request.status);
    }
  };

  request.open('GET', url, true);
  request.send(null);
}

function doNothing() {}

</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKbFGlvbtwtQucdIB_l8Vc8OQW5bPxtQs&callback=initMap">
</script>
</body>
</html>
