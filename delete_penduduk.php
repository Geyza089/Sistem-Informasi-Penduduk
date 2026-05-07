<?php
include 'connection.php';
session_start();
$id   = $_GET['id'];
$query="DELETE from penduduk where id='$id'";
mysqli_query($kon, $query);
$_SESSION["suksesDel"] = 'Data Berhasil Dihapus';
header('location:penduduk.php');

?>