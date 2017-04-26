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

else if ($conn) {
	echo "Mantap";
}

else {
	echo "what the??";
}

echo "\n";

	//Masukan data
	echo ("Memasukkan data..");
	echo "\n";
		if (isset($_POST['submit'])){
			$NIM = $_POST['UserNIM'];
			$jenisLaporan = $_POST['JenisLaporan'];
			$laporanDesc = $_POST['LaporanDesc'];
			//$lokasi = $_POST[''];
	echo ("Memasukkan ke SQL");
	echo "\n";
			$sql = "INSERT INTO laporan (NIM, JenisLaporan, Keterangan)
			VALUES ('$NIM', '$jenisLaporan', '$laporanDesc')";
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
				} 
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
 ?>
