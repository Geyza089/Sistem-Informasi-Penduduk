<?php
require 'connection.php';
session_start();


$sql = "UPDATE penduduk SET
        nama = '".$_POST['nama']."',
        nik = '".$_POST['nik']."',
        tempat = '".$_POST['tempat']."',
        ttl = '".$_POST['tanggal']."',
        jenis_kelamin = '".$_POST['jenis']."',
        alamat = '".$_POST['alamat']."',
        agama = '".$_POST['agama']."',
        status = '".$_POST['status']."',
        pekerjaan = '".$_POST['pekerjaan']."',
        kewarganegaraan = '".$_POST['kewarganegaraan']."'
        WHERE id = '".$_POST['id']."' ";
$update = $kon->query($sql);
if ($update == TRUE){
    $_SESSION["suksesEdit"] = 'Data Berhasil Diubah';
    header('location:penduduk.php');
} else {
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Gagal Edit Data
    </div>
  </div>';
  echo '<meta http-equiv="refresh" content="3;url=penduduk.php">';
}



