<?php
session_start();
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Kelahiran</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: linear-gradient(135deg, #eef5ff, #f8fbff);
            min-height: 100vh;
            overflow-x: hidden;
        }

        #main-content{
            transition: .3s;
        }

        /* CARD */

        .detail-card{
            border: none;
            border-radius: 30px;
            overflow: hidden;
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(12px);
            box-shadow: 0 15px 45px rgba(0,0,0,.08);
        }

        /* HEADER */

        .card-header-custom{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 35px;
            color: white;
        }

        .header-content{
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .header-icon{
            width: 82px;
            height: 82px;
            border-radius: 24px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            flex-shrink: 0;
        }

        .card-header-custom h4{
            margin: 0;
            font-weight: 700;
            font-size: 28px;
        }

        .card-header-custom p{
            margin-top: 6px;
            margin-bottom: 0;
            opacity: .92;
            font-size: 14px;
        }

        /* PROFILE */

        .profile-section{
            text-align: center;
            padding: 40px 25px 20px;
        }

        .profile-avatar{
            width: 105px;
            height: 105px;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            color: white;
            font-size: 44px;
            box-shadow: 0 14px 30px rgba(37,99,235,.25);
        }

        .profile-name{
            font-size: 28px;
            font-weight: 700;
            color: #0f172a;
            margin-top: 20px;
            margin-bottom: 5px;
        }

        .profile-subtitle{
            color: #64748b;
            font-size: 14px;
        }

        .info-badge{
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px;
            border-radius: 50px;
            background: #eff6ff;
            color: #2563eb;
            font-size: 13px;
            font-weight: 600;
            margin-top: 18px;
        }

        /* BODY */

        .detail-body{
            padding: 10px 35px 35px;
        }

        .detail-table{
            width: 100%;
            margin-top: 10px;
        }

        .detail-table tr{
            border-bottom: 1px solid #eef2f7;
            transition: .2s;
        }

        .detail-table tr:hover{
            background: #f8fbff;
        }

        .detail-table td{
            padding: 18px 12px;
            vertical-align: middle;
        }

        .label{
            width: 32%;
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

        .label i{
            width: 24px;
        }

        /* BUTTON */

        .button-area{
            margin-top: 35px;
        }

        .btn-back{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border: none;
            color: white;
            padding: 13px 28px;
            border-radius: 16px;
            font-weight: 600;
            transition: .3s;
            box-shadow: 0 10px 22px rgba(37,99,235,.22);
        }

        .btn-back:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 14px 28px rgba(37,99,235,.28);
        }

        /* MOBILE */

        @media(max-width: 768px){

            #main-content{
                padding: 18px !important;
            }

            .card-header-custom{
                padding: 25px;
            }

            .header-content{
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .header-icon{
                width: 68px;
                height: 68px;
                font-size: 30px;
            }

            .card-header-custom h4{
                font-size: 22px;
            }

            .profile-section{
                padding: 30px 18px 15px;
            }

            .profile-avatar{
                width: 88px;
                height: 88px;
                font-size: 36px;
            }

            .profile-name{
                font-size: 22px;
            }

            .detail-body{
                padding: 10px 20px 25px;
            }

            .detail-table,
            .detail-table tbody,
            .detail-table tr,
            .detail-table td{
                display: block;
                width: 100%;
            }

            .detail-table tr{
                padding: 14px 0;
            }

            .detail-table td{
                border: none;
                padding: 4px 0;
            }

            .label{
                width: 100%;
                margin-bottom: 6px;
                font-size: 14px;
            }

            .separator{
                display: none !important;
            }

            .value{
                width: 100%;
                font-size: 15px;
                padding-left: 30px !important;
            }

            .btn-back{
                width: 100%;
            }
        }

    </style>
</head>

<body>

<div class="p-4" id="main-content">

<?php

$sql = "SELECT * FROM kelahiran WHERE id='".$_GET['id']."'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();

?>

<div class="row justify-content-center">

    <div class="col-lg-9">

        <div class="card detail-card">

            <!-- HEADER -->
            <div class="card-header-custom">

                <div class="header-content">

                    <div class="header-icon">
                        <i class="bi bi-file-earmark-person-fill"></i>
                    </div>

                    <div>
                        <h4>Detail Data Kelahiran</h4>

                        <p>
                            Informasi lengkap data kelahiran penduduk
                        </p>
                    </div>

                </div>

            </div>

            <!-- PROFILE -->
            <div class="profile-section">

                <div class="profile-avatar">
                    <i class="bi bi-person-heart"></i>
                </div>

                <div class="profile-name">
                    <?= $data->nama ?>
                </div>

                <div class="profile-subtitle">
                    Data Kelahiran Penduduk
                </div>

                <div class="info-badge">
                    <i class="bi bi-gender-ambiguous"></i>
                    <?= $data->kelamin ?>
                </div>

            </div>

            <!-- BODY -->
            <div class="detail-body">

                <div class="table-responsive">

                    <table class="detail-table">

                        <tr>

                            <td class="label">
                                <i class="bi bi-person-fill text-primary"></i>
                                Nama Anak
                            </td>

                            <td class="separator">:</td>

                            <td class="value">
                                <?= $data->nama ?>
                            </td>

                        </tr>

                        <tr>

                            <td class="label">
                                <i class="bi bi-calendar-event-fill text-primary"></i>
                                Tanggal Lahir
                            </td>

                            <td class="separator">:</td>

                            <td class="value">
                                <?= date('d F Y', strtotime($data->tanggal)) ?>
                            </td>

                        </tr>

                        <tr>

                            <td class="label">
                                <i class="bi bi-gender-ambiguous text-primary"></i>
                                Jenis Kelamin
                            </td>

                            <td class="separator">:</td>

                            <td class="value">
                                <?= $data->kelamin ?>
                            </td>

                        </tr>

                        <tr>

                            <td class="label">
                                <i class="bi bi-person-badge-fill text-primary"></i>
                                Nama Ayah
                            </td>

                            <td class="separator">:</td>

                            <td class="value">
                                <?= $data->ayah ?>
                            </td>

                        </tr>

                        <tr>

                            <td class="label">
                                <i class="bi bi-person-heart text-primary"></i>
                                Nama Ibu
                            </td>

                            <td class="separator">:</td>

                            <td class="value">
                                <?= $data->ibu ?>
                            </td>

                        </tr>

                    </table>

                </div>

                <!-- BUTTON -->
                <div class="button-area">

                    <a href="kelahiran.php" class="btn btn-back">

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