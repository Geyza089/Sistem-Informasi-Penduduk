<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $sql = "INSERT INTO keluarga (no_kk, kk, alamat, kec, kab, prov) VALUES (
        '".$_POST['no_kk']."',
        '".$_POST['kk']."',
        '".$_POST['alamat']."',
        '".$_POST['kec']."',
        '".$_POST['kab']."',
        '".$_POST['prov']."'
        )";
    $exec = $kon->query($sql) or die ($kon->error);
    if ($exec == true) {
      $_SESSION["suksesAdd"] = 'Data Berhasil Ditambah';
      header('location:keluarga.php');
    }else {
      echo '<div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        Gagal Tambah Data
      </div>
    </div>';
    echo '<meta http-equiv="refresh" content="3;url=keluarga.php">';
    }
}

?>