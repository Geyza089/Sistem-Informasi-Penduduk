<?php
require 'connection.php';
session_start();


$sql = "UPDATE kelahiran SET
        nama = '".$_POST['nama']."',
        tanggal = '".$_POST['tanggal']."',
        kelamin = '".$_POST['kelamin']."',
        ayah = '".$_POST['ayah']."',
        ibu = '".$_POST['ibu']."'
        WHERE id = '".$_POST['id']."' ";
$update = $kon->query($sql);
if ($update == TRUE){
    $_SESSION["suksesEdit"] = 'Data Berhasil Diubah';
    header('location:kelahiran.php');
} else {
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Gagal Edit Data
    </div>
  </div>';
  echo '<meta http-equiv="refresh" content="3;url=kelahiran.php">';
}



