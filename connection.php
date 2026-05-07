<?php
$hostname = "localhost";
$database = "pengolahan";
$usernamee = "root";
$password = "";
$kon = mysqli_connect($hostname, $usernamee, $password, $database);
// script cek koneksi
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?> 