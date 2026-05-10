<?php
$hostname  = "localhost";
$database  = "pengolahan";
$usernamee = "root";
$password  = "";

// koneksi database
$kon = mysqli_connect($hostname, $usernamee, $password, $database);

// cek koneksi
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>