<?php
include 'connection.php';
session_start();
$id   = $_GET['id'];
$query="DELETE from pindah where id='$id'";
mysqli_query($kon, $query);
$_SESSION["suksesDel"] = 'Data Berhasil Dihapus';
header('location:pindah.php');

?>