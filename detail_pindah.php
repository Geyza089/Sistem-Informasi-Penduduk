<?php
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Pindah Penduduk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    font-family: 'Poppins', sans-serif;
}

body{
    background: linear-gradient(135deg, #e0f2ff, #f7fbff);
    min-height: 100vh;
}

/* TITLE */
.page-title{
    font-size: 26px;
    font-weight: 700;
    color: #1e293b;
}

.subtitle{
    font-size: 13px;
    color: #64748b;
}

/* CARD */
.card-modern{
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(10px);
    border-radius: 22px;
    border: none;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}

/* HEADER CARD */
.card-header{
    border-radius: 22px 22px 0 0 !important;
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: white;
    font-weight: 600;
    font-size: 15px;
}

/* DETAIL TABLE */
.table-detail td{
    padding: 14px 10px;
    font-size: 14px;
}

.table-detail td:first-child{
    font-weight: 600;
    color: #334155;
    width: 30%;
}

.table-detail td:nth-child(2){
    width: 10px;
    color: #94a3b8;
}

/* BUTTON */
.btn-primary{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    border: none;
    border-radius: 14px;
    font-weight: 600;
}

.btn-primary:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(37,99,235,.25);
}

</style>
</head>

<body>

<div class="p-4" id="main-content">

<!-- HEADER -->
<div class="d-flex align-items-center mb-4">


    <div>
        <div class="page-title">Detail Pindah Penduduk</div>
        <div class="subtitle">Informasi lengkap perpindahan penduduk</div>
    </div>

</div>

<?php 
$sql = "SELECT * FROM pindah WHERE id='".$_GET['id']."'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
?>

<!-- CARD DETAIL -->
<div class="card card-modern">

    <div class="card-header">
        <i class="bi bi-signpost-split me-1"></i>
        Detail Data Pindah
    </div>

    <div class="card-body">

        <table class="table table-borderless table-detail">

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $data->nama ?></td>
            </tr>

            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?= $data->nik ?></td>
            </tr>

            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td><?= $data->tempat . ", " . $data->tanggal ?></td>
            </tr>

            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?= $data->agama ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $data->kelamin ?></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $data->alamat ?></td>
            </tr>

            <tr>
                <td>Kota Tujuan</td>
                <td>:</td>
                <td><?= $data->tujuan ?></td>
            </tr>

            <tr>
                <td>Alasan Pindah</td>
                <td>:</td>
                <td><?= $data->alasan ?></td>
            </tr>

        </table>

        <a href="pindah.php" class="btn btn-primary mt-3">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>

    </div>

</div>

</div>

</body>
</html>