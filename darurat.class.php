<?php

class Darurat
{

  protected $dbmenu;
  protected $conn;
  protected $a_nim;
  protected $a_laporan;
  protected $a_lokasi;
  protected $a_waktu;


  public function __construct($koneksi)
  {
    $this->conn = $koneksi;
    $this->dbmenu = mysqli_query($koneksi,"SELECT * FROM arduino");
    if (!$this->dbmenu) 
    {
    printf("Error: %s\n", mysqli_error($koneksi));
    exit();
    }
  }
  
 

  public function getDarurat()
  {
    return($this->dbmenu);
  }

  public function getNIMNIK($koneksi,$id)
  {
    $temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$id'");
    while($temp2 = mysqli_fetch_array($temp))
    {
      $a_nim = $temp2['NIM/NIK'];
    }
    return ($a_nim);
  }

  public function getLaporan($koneksi,$id)
  {
    $temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$id'");
    while($temp2 = mysqli_fetch_array($temp))
    {
      $a_laporan = $temp2['Laporan'];
    }
    return ($a_laporan);
  }

  public function getLokasi($koneksi,$id)
  {
    $temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$id'");
    while($temp2 = mysqli_fetch_array($temp))
    {
      $a_lokasi = $temp2['Lokasi'];
    }
    return ($a_lokasi);
  }

  public function getWaktu($koneksi,$id)
  {
    $temp = mysqli_query($koneksi,"SELECT * FROM arduino WHERE ID='$id'");
    while($temp2 = mysqli_fetch_array($temp))
    {
      $a_waktu = $temp2['Waktu'];
    }
    return ($a_waktu);
  }



  
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
    echo "{$user_info['NIM/NIK']}";
    echo "</td>";
    echo "<td>";    
    echo "{$user_info['Laporan']}";
    echo "</td>";
    echo "<td>";    
    echo "{$user_info['Lokasi']}";
    echo "</td>";
    echo "<td>";    
    echo "{$user_info['Waktu']}";
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