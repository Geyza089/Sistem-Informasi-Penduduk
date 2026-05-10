<?php
session_start();
include 'sidebar.php';
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM keluarga WHERE id='$id'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Kartu Keluarga</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

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

        /* CARD */

        .detail-card{
            border: none;
            border-radius: 30px;
            overflow: hidden;
            background: rgba(255,255,255,.97);
            backdrop-filter: blur(12px);
            box-shadow: 0 18px 45px rgba(15,23,42,.08);
        }

        /* HEADER */

        .detail-header{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 35px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .detail-header::before{
            content: '';
            position: absolute;
            width: 250px;
            height: 250px;
            background: rgba(255,255,255,.08);
            border-radius: 50%;
            top: -100px;
            right: -80px;
        }

        .header-content{
            position: relative;
            z-index: 2;
        }

        .header-icon{
            width: 85px;
            height: 85px;
            border-radius: 24px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            flex-shrink: 0;
        }

        .detail-header h3{
            font-weight: 700;
            margin-bottom: 6px;
        }

        .detail-header p{
            margin: 0;
            opacity: .92;
            font-size: 14px;
        }

        /* BODY */

        .detail-body{
            padding: 40px;
        }

        .info-card{
            background: #f8fbff;
            border: 1px solid #e2e8f0;
            border-radius: 22px;
            padding: 10px 25px;
        }

        .detail-table{
            width: 100%;
        }

        .detail-table tr{
            border-bottom: 1px solid #e9eef5;
        }

        .detail-table tr:last-child{
            border-bottom: none;
        }

        .detail-table td{
            padding: 20px 10px;
            vertical-align: top;
        }

        .label{
            width: 32%;
            font-weight: 600;
            color: #334155;
            font-size: 14px;
        }

        .separator{
            width: 3%;
            color: #94a3b8;
            font-weight: 600;
        }

        .value{
            color: #0f172a;
            font-weight: 500;
            font-size: 14px;
            line-height: 1.7;
        }

        /* BUTTON */

        .action-area{
            margin-top: 35px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-modern{
            border: none;
            padding: 13px 24px;
            border-radius: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-back{
            background: #e2e8f0;
            color: #0f172a;
        }

        .btn-print{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
        }

        .btn-modern:hover{
            transform: translateY(-2px);
        }

        .btn-print:hover{
            color: white;
            box-shadow: 0 10px 25px rgba(37,99,235,.25);
        }

        .btn-back:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        /* MOBILE */

        @media(max-width: 768px){

            #main-content{
                padding: 18px !important;
            }

            .detail-header{
                padding: 28px 22px;
            }

            .detail-body{
                padding: 24px 18px;
            }

            .header-icon{
                width: 68px;
                height: 68px;
                font-size: 28px;
                border-radius: 18px;
            }

            .detail-header h3{
                font-size: 22px;
            }

            .detail-header p{
                font-size: 13px;
            }

            .info-card{
                padding: 5px 15px;
                border-radius: 18px;
            }

            .detail-table td{
                display: block;
                width: 100% !important;
                padding: 8px 0;
            }

            .detail-table tr{
                display: block;
                padding: 14px 0;
            }

            .separator{
                display: none !important;
            }

            .label{
                font-size: 13px;
                margin-bottom: 4px;
                color: #64748b;
            }

            .value{
                font-size: 14px;
                font-weight: 600;
            }

            .action-area{
                flex-direction: column;
            }

            .btn-modern{
                width: 100%;
                justify-content: center;
            }

        }

        /* PRINT */

        @media print{

            body{
                background: white !important;
            }

            .sidebar,
            .mobile-toggle,
            .overlay-mobile,
            .action-area{
                display: none !important;
            }

            #main-content{
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }

            .detail-card{
                box-shadow: none !important;
                border-radius: 0 !important;
                border: none !important;
            }

            .detail-header{
                background: #2563eb !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                padding: 25px !important;
            }

            .detail-body{
                padding: 20px !important;
            }

            .info-card{
                border: none;
                padding: 0;
                background: white;
            }

            .detail-table td{
                padding: 10px 5px;
                font-size: 13px;
            }

            .label{
                width: 30%;
            }

            @page{
                size: A4;
                margin: 12mm;
            }

        }

    </style>
</head>

<body>

<div class="p-4" id="main-content">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-11">

            <div class="card detail-card">

                <!-- HEADER -->
                <div class="detail-header">

                    <div class="d-flex align-items-center gap-4 flex-wrap header-content">

                        <div class="header-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <div>
                            <h3>Detail Kartu Keluarga</h3>

                            <p>
                                Informasi lengkap data kartu keluarga penduduk
                            </p>
                        </div>

                    </div>

                </div>

                <!-- BODY -->
                <div class="detail-body">

                    <div class="info-card">

                        <div class="table-responsive">

                            <table class="detail-table">

                                <tr>
                                    <td class="label">
                                        Nomor Kartu Keluarga
                                    </td>

                                    <td class="separator">:</td>

                                    <td class="value">
                                        <?= $data->no_kk ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="label">
                                        Kepala Keluarga
                                    </td>

                                    <td class="separator">:</td>

                                    <td class="value">
                                        <?= $data->kk ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="label">
                                        Alamat
                                    </td>

                                    <td class="separator">:</td>

                                    <td class="value">
                                        <?= $data->alamat ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="label">
                                        Kecamatan
                                    </td>

                                    <td class="separator">:</td>

                                    <td class="value">
                                        <?= $data->kec ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="label">
                                        Kabupaten
                                    </td>

                                    <td class="separator">:</td>

                                    <td class="value">
                                        <?= $data->kab ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="label">
                                        Provinsi
                                    </td>

                                    <td class="separator">:</td>

                                    <td class="value">
                                        <?= $data->prov ?>
                                    </td>
                                </tr>

                            </table>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="action-area">

                        <a href="keluarga.php" class="btn-modern btn-back">
                            <i class="bi bi-arrow-left"></i>
                            Kembali
                        </a>

                        <button onclick="window.print()" class="btn-modern btn-print">
                            <i class="bi bi-printer-fill"></i>
                            Cetak Data
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>