<?php
include 'sidebar.php';
include 'connection.php';

$id = mysqli_real_escape_string($kon, $_GET['id']);
$sql = "SELECT * FROM kematian WHERE id='$id'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Kematian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background: linear-gradient(135deg, #e0f2fe, #f8fafc);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .main-card{
            border: none;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .card-header-custom{
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            padding: 20px;
        }

        .card-header-custom h4{
            margin: 0;
            color: white;
            font-weight: 600;
        }

        .table td{
            padding: 16px;
            vertical-align: middle;
        }

        .table tr{
            transition: 0.2s;
        }

        .table tr:hover{
            background-color: #f8fbff;
        }

        .label-title{
            font-weight: 600;
            color: #0d6efd;
            width: 25%;
        }

        .btn-modern{
            border-radius: 12px;
            padding: 10px 22px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-modern:hover{
            transform: translateY(-2px);
        }

        .detail-icon{
            width: 55px;
            height: 55px;
            background: rgba(255,255,255,0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .top-button{
            border-radius: 12px;
            padding: 10px 15px;
        }
    </style>
</head>

<body>

<div class="p-4" id="main-content">

    <div class="container-fluid">


        <div class="card main-card">

            <div class="card-header card-header-custom d-flex align-items-center">
                
                <div class="detail-icon me-3">
                    <i class="bi bi-file-earmark-medical-fill"></i>
                </div>

                <div>
                    <h4>Detail Data Kematian</h4>
                    <small class="text-white">
                        Informasi lengkap data kematian penduduk
                    </small>
                </div>

            </div>

            <div class="card-body p-4">

                <div class="table-responsive">

                    <table class="table align-middle">

                        <tr>
                            <td class="label-title">
                                <i class="bi bi-person-fill me-2"></i>Nama
                            </td>
                            <td width="2%">:</td>
                            <td><?php echo $data->nama ?></td>
                        </tr>

                        <tr>
                            <td class="label-title">
                                <i class="bi bi-credit-card-2-front-fill me-2"></i>NIK
                            </td>
                            <td>:</td>
                            <td><?php echo $data->nik ?></td>
                        </tr>

                        <tr>
                            <td class="label-title">
                                <i class="bi bi-geo-alt-fill me-2"></i>Tempat / Tanggal Lahir
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo $data->tempat . ", " . $data->tanggal ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="label-title">
                                <i class="bi bi-bookmark-fill me-2"></i>Agama
                            </td>
                            <td>:</td>
                            <td><?php echo $data->agama ?></td>
                        </tr>

                        <tr>
                            <td class="label-title">
                                <i class="bi bi-gender-ambiguous me-2"></i>Jenis Kelamin
                            </td>
                            <td>:</td>
                            <td><?php echo $data->kelamin ?></td>
                        </tr>

                        <tr>
                            <td class="label-title">
                                <i class="bi bi-calendar-x-fill me-2"></i>Tanggal Wafat
                            </td>
                            <td>:</td>
                            <td><?php echo $data->wafat ?></td>
                        </tr>

                        <tr>
                            <td class="label-title">
                                <i class="bi bi-heartbreak-fill me-2"></i>Sebab Kematian
                            </td>
                            <td>:</td>
                            <td><?php echo $data->sebab ?></td>
                        </tr>

                    </table>

                </div>

                <div class="mt-4">
                    <a href="kematian.php" class="btn btn-primary btn-modern shadow-sm">
                        <i class="bi bi-arrow-left-circle me-2"></i>
                        Kembali
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>
</body>
</html>