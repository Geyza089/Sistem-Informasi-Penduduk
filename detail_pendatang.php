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
<title>Detail Pendatang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    font-family: 'Poppins', sans-serif;
}

body{
    background: linear-gradient(135deg, #eef5ff, #f8fbff);
    min-height: 100vh;
}

#main-content{
    transition: .3s;
}

/* HEADER */
.page-title{
    font-size: 28px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 5px;
}

.subtitle{
    font-size: 14px;
    color: #64748b;
}

/* CARD */
.detail-card{
    border: none;
    border-radius: 28px;
    overflow: hidden;
    background: rgba(255,255,255,.96);
    backdrop-filter: blur(10px);
    box-shadow: 0 15px 40px rgba(0,0,0,.08);
}

/* CARD HEADER */
.detail-header{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    padding: 35px;
    color: white;
}

.detail-header h3{
    font-weight: 700;
    margin-bottom: 5px;
}

.detail-header p{
    margin: 0;
    opacity: .9;
    font-size: 14px;
}

.header-icon{
    width: 80px;
    height: 80px;
    border-radius: 22px;
    background: rgba(255,255,255,.18);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 34px;
}

/* BODY */
.detail-body{
    padding: 35px;
}

/* PROFILE */
.profile-section{
    text-align: center;
    margin-bottom: 30px;
}

.profile-avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    color: white;
    font-size: 40px;
    box-shadow: 0 10px 25px rgba(37,99,235,.25);
}

.profile-name{
    font-size: 24px;
    font-weight: 700;
    color: #1e293b;
    margin-top: 18px;
    margin-bottom: 5px;
}

.profile-subtitle{
    color: #64748b;
    font-size: 14px;
}

/* BADGE */
.info-badge{
    display: inline-block;
    padding: 7px 16px;
    border-radius: 50px;
    background: #eff6ff;
    color: #2563eb;
    font-size: 13px;
    font-weight: 600;
    margin-top: 12px;
}

/* TABLE */
.detail-table{
    width: 100%;
}

.detail-table tr{
    border-bottom: 1px solid #eef2f7;
}

.detail-table td{
    padding: 16px 10px;
    vertical-align: top;
}

.label{
    width: 30%;
    font-weight: 600;
    color: #334155;
}

.separator{
    width: 3%;
    color: #94a3b8;
    font-weight: 600;
}

.value{
    color: #0f172a;
    font-weight: 500;
}

/* BUTTON */
.btn-back{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    border: none;
    color: white;
    padding: 12px 28px;
    border-radius: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
    display: inline-block;
}

.btn-back:hover{
    transform: translateY(-2px);
    color: white;
    box-shadow: 0 8px 20px rgba(37,99,235,.25);
}

@media(max-width:768px){

    .detail-body{
        padding: 25px;
    }

    .label{
        width: 40%;
    }

    .profile-name{
        font-size: 20px;
    }

}

</style>
</head>

<body>

<div class="p-4" id="main-content">

    <!-- HEADER -->
    <div class="mb-4">

        <div class="page-title">
            Detail Pendatang
        </div>

        <div class="subtitle">
            Informasi lengkap data pendatang
        </div>

    </div>

    <?php 
    $sql = "SELECT * FROM pendatang WHERE id='".$_GET['id']."'";
    $rows = $kon->query($sql);
    $data = $rows->fetch_object();
    ?>

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card detail-card">

                <!-- HEADER CARD -->
                <div class="detail-header">

                    <div class="d-flex align-items-center gap-4 flex-wrap">

                        <div class="header-icon">
                            <i class="bi bi-person-vcard-fill"></i>
                        </div>

                        <div>
                            <h3>Detail Data Pendatang</h3>

                            <p>
                                Informasi lengkap data penduduk pendatang
                            </p>
                        </div>

                    </div>

                </div>

                <!-- BODY -->
                <div class="detail-body">

                    <!-- PROFILE -->
                    <div class="profile-section">

                        <div class="profile-avatar">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <div class="profile-name">
                            <?= $data->nama ?>
                        </div>

                        <div class="profile-subtitle">
                            Data Pendatang Penduduk
                        </div>

                        <div class="info-badge">
                            <?= $data->status ?>
                        </div>

                    </div>

                    <!-- TABLE -->
                    <div class="table-responsive">

                        <table class="detail-table">

                            <tr>
                                <td class="label">
                                    <i class="bi bi-person me-2 text-primary"></i>
                                    Nama
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->nama ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <i class="bi bi-credit-card-2-front me-2 text-primary"></i>
                                    NIK
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->nik ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <i class="bi bi-calendar-event me-2 text-primary"></i>
                                    Tempat / Tanggal Lahir
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->tempat . ", " . $data->tanggal ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <i class="bi bi-bookmark me-2 text-primary"></i>
                                    Agama
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->agama ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <i class="bi bi-gender-ambiguous me-2 text-primary"></i>
                                    Jenis Kelamin
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->kelamin ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <i class="bi bi-geo-alt me-2 text-primary"></i>
                                    Kota Asal
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->asal ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <i class="bi bi-house-door me-2 text-primary"></i>
                                    Alamat
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->alamat ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <i class="bi bi-info-circle me-2 text-primary"></i>
                                    Keterangan
                                </td>

                                <td class="separator">:</td>

                                <td class="value">
                                    <?= $data->status ?>
                                </td>
                            </tr>

                        </table>

                    </div>

                    <!-- BUTTON -->
                    <div class="mt-5">

                        <a href="pendatang.php" class="btn-back">

                            <i class="bi bi-arrow-left me-2"></i>
                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>