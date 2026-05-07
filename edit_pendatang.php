<?php
require 'connection.php';
session_start();


$sql = "UPDATE pendatang SET
        nama = '".$_POST['nama']."',
        nik = '".$_POST['nik']."',
        tempat = '".$_POST['tempat']."',
        tanggal = '".$_POST['tanggal']."',
        agama = '".$_POST['agama']."',
        kelamin = '".$_POST['kelamin']."',
        asal = '".$_POST['asal']."',
        alamat = '".$_POST['alamat']."',
        status = '".$_POST['status']."'
        WHERE id = '".$_POST['id']."' ";
$update = $kon->query($sql);
if ($update == TRUE){
    $_SESSION["suksesEdit"] = 'Data Berhasil Diubah';
    header('location:pendatang.php');
} else {
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Gagal Edit Data
    </div>
  </div>';
  echo '<meta http-equiv="refresh" content="3;url=pendatang.php">';
}



