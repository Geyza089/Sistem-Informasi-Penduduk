<?php
require 'connection.php';
session_start();


$sql = "UPDATE keluarga SET
        no_kk = '".$_POST['no_kk']."',
        kk = '".$_POST['kk']."',
        alamat = '".$_POST['alamat']."',
        kec = '".$_POST['kec']."',
        kab = '".$_POST['kab']."',
        prov = '".$_POST['prov']."'
        WHERE id = '".$_POST['id']."' ";
$update = $kon->query($sql);
if ($update == TRUE){
    $_SESSION["suksesEdit"] = 'Data Berhasil Diubah';
    header('location:keluarga.php');
} else {
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Gagal Edit Data
    </div>
  </div>';
  echo '<meta http-equiv="refresh" content="3;url=keluarga.php">';
}



