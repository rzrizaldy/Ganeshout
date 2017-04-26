<?php

class Menu
{
	protected $nim;
	protected $jenislaporan;
	protected $long;
	protected $lat;
	protected $gambar;
	protected $keterangan;
	protected $dbmenu;
	protected $conn;
	//
	protected $a_nim;
	protected $a_laporan;
	protected $a_lokasi;
	protected $a_waktu;


	public function __construct($koneksi)
	{
		$this->conn = $koneksi;
		$this->dbmenu = mysqli_query($koneksi,"SELECT * FROM laporan");
		if (!$this->dbmenu) 
		{
		printf("Error: %s\n", mysqli_error($koneksi));
		exit();
		}
	}
	
	public function getNIM($koneksi,$id)
	{
		
		$temp = mysqli_query($koneksi,"SELECT * FROM laporan WHERE ID_Laporan='$id'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$nim = $temp2['NIM'];
		}
		return ($nim);
	}

	public function getJenisLaporan($koneksi,$id)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM laporan WHERE ID_Laporan='$id'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$jenislaporan = $temp2['JenisLaporan'];
		}
		return ($jenislaporan);
	}
	
	public function getLong($koneksi,$id)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM laporan WHERE ID_Laporan='$id'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$long = $temp2['LokasiLng'];
		}
		return ($long);
	}

	public function getLat($koneksi,$id)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM laporan WHERE ID_Laporan='$id'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$lat = $temp2['LokasiLat'];
		}
		return ($lat);
	}

	public function getKeterangan($koneksi,$id)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM laporan WHERE ID_Laporan='$id'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$keterangan = $temp2['Keterangan'];
		}
		return ($keterangan);
	}

	public function getmenu()
	{
		return($this->dbmenu);
	}

	public function get_a_Nim($koneksi,$aid)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$aid'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$a_nim = $temp2['NIM/NIK'];
		}
		return ($a_nim);
	}

	public function getLaporan($koneksi,$aid)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$aid'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$a_laporan = $temp2['Laporan'];
		}
		return ($a_laporan);
	}

	public function getLokasi($koneksi,$aid)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$aid'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$a_lokasi = $temp2['Lokasi'];
		}
		return ($a_lokasi);
	}

	public function getWaktu($koneksi,$aid)
	{
		$temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$aid'");
		while($temp2 = mysqli_fetch_array($temp))
		{
			$a_waktu = $temp2['Waktu'];
		}
		return ($a_waktu);
	}



	// public function getGambar($koneksi,$id)
	// {
	// 	$temp = mysqli_query($koneksi,"SELECT * FROM menu WHERE ID='$id'");
	// 	while($temp2 = mysqli_fetch_array($temp))
	// 	{
	// 		$gambar = $temp2['Gambar'];
	// 	}
	// 	return ($gambar);
	// }	
	
	
	public function showAllLaporan()
	{
		$user_info = array();
	echo "<table border = 1>";
	while($user_info = mysqli_fetch_array($this->dbmenu))
	{
		echo "<tr>";
		echo "<td>";		
		echo "{$user_info['ID']}";
		echo "</td>";
		echo "<td>";		
		echo "{$user_info['NIM']}";
		echo "</td>";
		echo "<td>";		
		echo "{$user_info['JenisLaporan']}";
		echo "</td>";
		echo "<td>";		
		echo "{$user_info['LokasiLng']}";
		echo "</td>";
		echo "<td>";		
		echo "{$user_info['LokasiLat']}";
		echo "</td>";
		echo "<td>";		
		echo "{$user_info['JenisLaporan']}";
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($this->dbmenu);
	mysqli_close($this->conn);
	return $user_info;
	}
}
?>