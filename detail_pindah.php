<?php
session_start();
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
    background: linear-gradient(135deg, #eef4ff, #f8fbff);
    min-height: 100vh;
}

/* MAIN CONTENT */
#main-content{
    transition: .3s;
}

/* TOPBAR */
.topbar{
    background: white;
    padding: 18px 25px;
    border-radius: 22px;
    box-shadow: 0 4px 25px rgba(0,0,0,0.05);
    margin-bottom: 25px;
}

/* TITLE */
.page-title{
    font-size: 28px;
    font-weight: 700;
    color: #0f172a;
    margin: 0;
}

.subtitle{
    font-size: 14px;
    color: #64748b;
}

/* CARD */
.detail-card{
    background: white;
    border: none;
    border-radius: 24px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.06);
    overflow: hidden;
}

/* HEADER CARD */
.card-header-custom{
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    padding: 28px 30px;
    color: white;
}

.card-header-custom h3{
    margin: 0;
    font-weight: 700;
}

.card-header-custom p{
    margin: 8px 0 0;
    opacity: .9;
    font-size: 14px;
}

/* ICON */
.icon-box{
    width: 65px;
    height: 65px;
    border-radius: 18px;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
}

/* BODY */
.card-body-custom{
    padding: 35px;
}

/* TABLE */
.table-detail{
    margin-bottom: 0;
}

.table-detail td{
    padding: 16px 10px;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
    font-size: 14px;
}

.table-detail tr:last-child td{
    border-bottom: none;
}

.table-detail td:first-child{
    font-weight: 600;
    color: #334155;
    width: 28%;
}

.table-detail td:nth-child(2){
    width: 10px;
    color: #94a3b8;
}

.table-detail td:last-child{
    color: #475569;
}

/* BUTTON */
.btn-back{
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    border: none;
    color: white;
    padding: 12px 28px;
    border-radius: 14px;
    font-weight: 600;
    transition: .3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
}

.btn-back:hover{
    transform: translateY(-2px);
    color: white;
    box-shadow: 0 8px 20px rgba(37,99,235,.25);
}

/* RESPONSIVE */
@media(max-width:768px){

    .page-title{
        font-size: 22px;
    }

    .card-body-custom{
        padding: 25px;
    }

    .table-detail td{
        display: block;
        width: 100% !important;
        padding: 8px 0;
        border: none;
    }

    .table-detail tr{
        border-bottom: 1px solid #e2e8f0;
        display: block;
        padding: 10px 0;
    }

    .table-detail td:nth-child(2){
        display: none;
    }
}
</style>
</head>

<body>

<div class="p-4" id="main-content">

    <!-- TOPBAR -->
    <div class="topbar">

        <h3 class="page-title">
            Detail Pindah Penduduk
        </h3>

        <div class="subtitle">
            Informasi lengkap data perpindahan penduduk
        </div>

    </div>

<?php 
$sql = "SELECT * FROM pindah WHERE id='".$_GET['id']."'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
?>

    <!-- DETAIL CARD -->
    <div class="detail-card">

        <!-- HEADER -->
        <div class="card-header-custom d-flex align-items-center gap-4">

            <div class="icon-box">
                <i class="bi bi-signpost-split-fill"></i>
            </div>

            <div>
                <h3>Detail Data Pindah</h3>
                <p>
                    Data lengkap perpindahan penduduk yang tersimpan di sistem.
                </p>
            </div>

        </div>

        <!-- BODY -->
        <div class="card-body-custom">

            <div class="table-responsive">

                <table class="table table-borderless table-detail">

                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?= $data->nama ?></td>
                    </tr>

                    <tr>
                        <td>Nomor Induk Kependudukan</td>
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
                        <td>Alamat Asal</td>
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

            </div>

            <!-- BUTTON -->
            <div class="mt-4">

                <a href="pindah.php" class="btn-back">

                    <i class="bi bi-arrow-left-circle me-2"></i>
                    Kembali

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>