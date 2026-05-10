<?php
session_start();
include 'sidebar.php';
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM penduduk WHERE id='$id'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #eef5ff, #f8fbff);
            min-height: 100vh;
            overflow-x: hidden;
        }

        #main-content {
            transition: .3s;
        }

        .detail-card {
            border: none;
            border-radius: 30px;
            overflow: hidden;
            background: rgba(255, 255, 255, .96);
            backdrop-filter: blur(12px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
        }

        /* HEADER */

        .detail-header {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 35px;
            color: white;
            position: relative;
        }

        .detail-header::before {
            content: '';
            position: absolute;
            width: 180px;
            height: 180px;
            background: rgba(255, 255, 255, .08);
            border-radius: 50%;
            top: -60px;
            right: -60px;
        }

        .profile-wrapper {
            position: relative;
            z-index: 2;
        }

        .profile-icon {
            width: 85px;
            height: 85px;
            border-radius: 24px;
            background: rgba(255, 255, 255, .18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            flex-shrink: 0;
        }

        .detail-header h3 {
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 30px;
        }

        .detail-header p {
            margin: 0;
            opacity: .92;
            font-size: 14px;
        }

        /* BODY */

        .detail-body {
            padding: 35px;
        }

        .info-card {
            background: #f8fbff;
            border: 1px solid #e2e8f0;
            border-radius: 22px;
            padding: 10px;
        }

        .table-detail {
            width: 100%;
            border-collapse: collapse;
        }

        .table-detail tr {
            border-bottom: 1px solid #eef2f7;
        }

        .table-detail tr:last-child {
            border-bottom: none;
        }

        .table-detail td {
            padding: 18px 12px;
            vertical-align: top;
        }

        .label {
            width: 34%;
            font-weight: 600;
            color: #334155;
        }

        .separator {
            width: 3%;
            font-weight: 600;
            color: #64748b;
        }

        .value {
            color: #0f172a;
            line-height: 1.7;
        }

        /* FOOTER */

        .footer-area {
            margin-top: 50px;
        }

        .signature {
            text-align: right;
            color: #334155;
        }

        .signature .city {
            margin-bottom: 70px;
        }

        /* BUTTON */

        .action-buttons {
            margin-top: 35px;
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn-modern {
            border: none;
            padding: 13px 24px;
            border-radius: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-width: 180px;
        }

        .btn-back {
            background: #e2e8f0;
            color: #0f172a;
        }

        .btn-print {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
        }

        .btn-modern:hover {
            transform: translateY(-2px);
        }

        .btn-back:hover {
            background: #cbd5e1;
            color: #0f172a;
        }

        .btn-print:hover {
            color: white;
            box-shadow: 0 10px 25px rgba(37, 99, 235, .25);
        }

        /* ================= MOBILE ================= */

        @media(max-width: 768px) {

            #main-content {
                padding: 15px !important;
            }

            .detail-card {
                border-radius: 24px;
            }

            .detail-header {
                padding: 25px 20px;
            }

            .profile-wrapper {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 18px !important;
            }

            .profile-icon {
                width: 70px;
                height: 70px;
                border-radius: 20px;
                font-size: 30px;
            }

            .detail-header h3 {
                font-size: 24px;
            }

            .detail-body {
                padding: 20px;
            }

            .info-card {
                padding: 5px 10px;
            }

            .table-detail,
            .table-detail tbody,
            .table-detail tr,
            .table-detail td {
                display: block;
                width: 100%;
            }

            .table-detail tr {
                padding: 14px 0;
            }

            .table-detail td {
                padding: 4px 0;
            }

            .label {
                width: 100%;
                font-size: 13px;
                color: #64748b;
                margin-bottom: 3px;
            }

            .separator {
                display: none !important;
            }

            .value {
                width: 100%;
                font-size: 15px;
                font-weight: 500;
                word-break: break-word;
            }

            .footer-area {
                margin-top: 35px;
            }

            .signature {
                text-align: left;
                font-size: 14px;
            }

            .signature .city {
                margin-bottom: 55px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-modern {
                width: 100%;
                min-width: 100%;
            }

        }

        /* ================= PRINT ================= */

        @media print {

            html,
            body {
                background: white !important;
                width: 100%;
                height: auto;
                overflow: hidden;
                font-size: 12px;
            }

            /* Hilangkan elemen tidak perlu */

            .sidebar,
            .mobile-toggle,
            .overlay-mobile,
            .action-buttons {
                display: none !important;
            }

            /* Layout utama */

            #main-content {
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }

            .detail-card {
                width: 100%;
                border: none !important;
                border-radius: 0 !important;
                box-shadow: none !important;
                overflow: hidden;
            }

            /* Header */

            .detail-header {
                background: #2563eb !important;
                color: white !important;
                padding: 18px 22px !important;

                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .detail-header::before {
                display: none !important;
            }

            .profile-icon {
                width: 55px !important;
                height: 55px !important;
                font-size: 24px !important;
                border-radius: 14px !important;
            }

            .detail-header h3 {
                font-size: 20px !important;
                margin-bottom: 2px !important;
            }

            .detail-header p {
                font-size: 11px !important;
                margin: 0 !important;
            }

            /* Body */

            .detail-body {
                padding: 18px 22px !important;
            }

            .info-card {
                border: 1px solid #dbeafe !important;
                background: #ffffff !important;
                border-radius: 12px !important;
                padding: 8px 14px !important;
            }

            /* Table */

            .table-detail {
                width: 100%;
                border-collapse: collapse;
            }

            .table-detail tr {
                border-bottom: 1px solid #e5e7eb;
            }

            .table-detail td {
                padding: 8px 4px !important;
                font-size: 11px !important;
                line-height: 1.4;
            }

            .label {
                width: 32%;
                font-weight: 600;
                color: #334155 !important;
            }

            .separator {
                width: 3%;
            }

            .value {
                color: #111827 !important;
            }

            /* Footer */

            .footer-area {
                margin-top: 30px !important;
            }

            .signature {
                text-align: right;
                font-size: 11px !important;
                color: #334155 !important;
            }

            .signature .city {
                margin-bottom: 45px !important;
            }

            /* Sembunyikan yang tidak penting */

            .hide-print {
                display: none !important;
            }

            /* Hindari kepotong */

            tr,
            td,
            .detail-card,
            .info-card {
                page-break-inside: avoid !important;
            }

            /* Ukuran halaman */

            @page {
                size: A4 portrait;
                margin: 10mm;
            }

        }
    </style>
</head>

<body>

    <div class="p-4" id="main-content">

        <div class="card detail-card">

            <!-- Header -->
            <div class="detail-header">

                <div class="d-flex align-items-center gap-4 flex-wrap profile-wrapper">

                    <div class="profile-icon">
                        <i class="bi bi-person-vcard-fill"></i>
                    </div>

                    <div>
                        <h3>Detail Data Penduduk</h3>
                        <p>Informasi resmi data penduduk</p>
                    </div>

                </div>

            </div>

            <!-- Body -->
            <div class="detail-body">

                <div class="info-card">

                    <div class="table-responsive">

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

                            <tr class="hide-print">
                                <td class="label">Agama</td>
                                <td class="separator">:</td>
                                <td class="value"><?= $data->agama ?></td>
                            </tr>

                            <tr>
                                <td class="label">Status</td>
                                <td class="separator">:</td>
                                <td class="value"><?= $data->status ?></td>
                            </tr>

                            <tr class="hide-print">
                                <td class="label">Pekerjaan</td>
                                <td class="separator">:</td>
                                <td class="value"><?= $data->pekerjaan ?></td>
                            </tr>

                            <tr class="hide-print">
                                <td class="label">Kewarganegaraan</td>
                                <td class="separator">:</td>
                                <td class="value"><?= $data->kewarganegaraan ?></td>
                            </tr>

                        </table>

                    </div>

                </div>

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

                <!-- Buttons -->
                <div class="action-buttons">

                    <a href="penduduk.php" class="btn-modern btn-back">
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

</body>

</html>