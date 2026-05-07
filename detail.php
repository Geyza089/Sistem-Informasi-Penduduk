<?php
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Penduduk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
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

        .detail-card{
            border: none;
            border-radius: 28px;
            overflow: hidden;
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 40px rgba(0,0,0,.08);

        }

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

        .profile-icon{
            width: 80px;
            height: 80px;
            border-radius: 22px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
        }

        .detail-body{
            padding: 35px;
        }

        .table-detail{
            width: 100%;
        }

        .table-detail tr{
            border-bottom: 1px solid #eef2f7;
        }

        .table-detail td{
            padding: 18px 10px;
            vertical-align: top;
        }

        .label{
            width: 28%;
            font-weight: 600;
            color: #334155;
        }

        .separator{
            width: 3%;
            color: #64748b;
            font-weight: 600;
        }

        .value{
            color: #0f172a;
        }

        .footer-area{
            margin-top: 60px;
        }

        .signature{
            text-align: right;
            color: #334155;
        }

        .signature .city{
            margin-bottom: 70px;
        }

        .btn-back{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .btn-back:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 8px 20px rgba(37,99,235,.25);
        }

        @media(max-width: 768px){

            .detail-body{
                padding: 25px;
            }

            .label{
                width: 40%;
            }
        }

        @media print{

            body{
                background: white !important;
            }

            .btn-back{
                display: none !important;
            }

            .detail-card{
                box-shadow: none;
                border: 1px solid #ddd;
            }

        }

    </style>
</head>

<body>

<div class="p-4" id="main-content">


        <?php

        $sql = "SELECT * FROM penduduk WHERE id='".$_GET['id']."'";
        $rows = $kon->query($sql);
        $data = $rows->fetch_object();

        ?>

        <!-- Card -->
        <div class="card detail-card">

            <!-- Header -->
            <div class="detail-header">

                <div class="d-flex align-items-center gap-4 flex-wrap">

                    <div class="profile-icon">
                        <i class="bi bi-person-vcard-fill"></i>
                    </div>

                    <div>
                        <h3>Detail Data Penduduk</h3>

                        <p>
                            Informasi lengkap data penduduk
                        </p>
                    </div>

                </div>

            </div>

            <!-- Body -->
            <div class="detail-body">

                <table class="table-detail">

                    <tr>
                        <td class="label">NIK</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->nik ?></td>
                    </tr>

                    <tr>
                        <td class="label">Nama Lengkap</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->nama ?></td>
                    </tr>

                    <tr>
                        <td class="label">Tempat / Tanggal Lahir</td>
                        <td class="separator">:</td>
                        <td class="value">
                            <?= $data->tempat . ", " . $data->ttl ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="label">Jenis Kelamin</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->jenis_kelamin ?></td>
                    </tr>

                    <tr>
                        <td class="label">Alamat</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->alamat ?></td>
                    </tr>

                    <tr>
                        <td class="label">Agama</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->agama ?></td>
                    </tr>

                    <tr>
                        <td class="label">Status</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->status ?></td>
                    </tr>

                    <tr>
                        <td class="label">Pekerjaan</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->pekerjaan ?></td>
                    </tr>

                    <tr>
                        <td class="label">Kewarganegaraan</td>
                        <td class="separator">:</td>
                        <td class="value"><?= $data->kewarganegaraan ?></td>
                    </tr>

                </table>

                <!-- Footer -->
                <div class="footer-area">

                    <div class="signature">

                        <div class="city">
                            Serang, <?= date('d F Y') ?>
                        </div>

                        <div>
                            Petugas
                        </div>

                    </div>

                </div>

                <!-- Back Button -->
                <div class="mt-4">

                    <a href="penduduk.php" class="btn-back">
                        <i class="bi bi-arrow-left me-2"></i>
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Print -->
<script>

window.print();

</script>

</body>
</html>