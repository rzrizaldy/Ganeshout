<?php
	$servername = "server424.cloudhost.id";
	$username = "rnateami_atikaryp";
	$password = "sadagori";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	mysqli_select_db($conn,"rnateami_ganeshout");

	// Check connection
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}


	// Start XML file, create parent node
	$doc = new DOMDocument("1.0");
	$node = $doc->createElement("markers");
	$parnode = $doc->appendChild($node);

	// Select all the rows in the markers table
	$query = "SELECT * FROM laporan";
	$result = mysqli_query($conn,$query);
	if (!$result) {
	  die('Invalid query: ' . mysqli_error());
	}

	header("Content-type: text/xml");

	// Iterate through the rows, adding XML nodes for each
	while ($row = $result->fetch_assoc()){
	  // ADD TO XML DOCUMENT NODE
	  $node = $doc->createElement("marker");
	  $newnode = $parnode->appendChild($node);
	  $newnode->setAttribute("time", $row['Time']);
	  $newnode->setAttribute("nim", $row['NIM']);
	  $newnode->setAttribute("jenis", $row['JenisLaporan']);
	  $newnode->setAttribute("lat", $row['LokasiLat']);
	  $newnode->setAttribute("lng", $row['LokasiLng']);
	  $newnode->setAttribute("keterangan", $row['Keterangan']);
}

echo $doc->saveXML();

?>
