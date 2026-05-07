<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $sql = "INSERT INTO penduduk (nama, nik, tempat, ttl, jenis_kelamin, alamat, agama, status, pekerjaan, kewarganegaraan) VALUES (
        '".$_POST['nama']."',
        '".$_POST['nik']."',
        '".$_POST['tempat']."',
        '".$_POST['tanggal']."',
        '".$_POST['jenis']."',
        '".$_POST['alamat']."',
        '".$_POST['agama']."',
        '".$_POST['status']."',
        '".$_POST['pekerjaan']."',
        '".$_POST['warga']."'
        )";
    $exec = $kon->query($sql) or die ($kon->error);
    if ($exec == true) {
      $_SESSION["suksesAdd"] = 'Data Berhasil Ditambah';
      header('location:penduduk.php');
    }else {
      echo '<div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        Gagal Tambah Data
      </div>
    </div>';
    echo '<meta http-equiv="refresh" content="3;url=penduduk.php">';
    }
}

?>