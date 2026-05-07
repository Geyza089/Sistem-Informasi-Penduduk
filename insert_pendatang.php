<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $sql = "INSERT INTO pendatang (nama, nik, tempat, tanggal, agama, kelamin, asal, alamat, status) VALUES (
        '".$_POST['nama']."',
        '".$_POST['nik']."',
        '".$_POST['tempat']."',
        '".$_POST['tanggal']."',
        '".$_POST['agama']."',
        '".$_POST['kelamin']."',
        '".$_POST['asal']."',
        '".$_POST['alamat']."',
        '".$_POST['status']."'
        )";
    $exec = $kon->query($sql) or die ($kon->error);
    if ($exec == true) {
      $_SESSION["suksesAdd"] = 'Data Berhasil Ditambah';
      header('location:pendatang.php');
    }else {
      echo '<div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        Gagal Tambah Data
      </div>
    </div>';
    echo '<meta http-equiv="refresh" content="3;url=pendatang.php">';
    }
}

?>