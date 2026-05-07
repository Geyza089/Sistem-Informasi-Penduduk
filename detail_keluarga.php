<?php
include 'sidebar.php';
include 'connection.php';
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

        .header-icon{
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

        .detail-table{
            width: 100%;
        }

        .detail-table tr{
            border-bottom: 1px solid #eef2f7;
        }

        .detail-table td{
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

    </style>
</head>

<body>

<div class="p-4" id="main-content">



        <?php

        $sql = "SELECT * FROM keluarga WHERE id='".$_GET['id']."'";
        $rows = $kon->query($sql);
        $data = $rows->fetch_object();

        ?>

        <!-- Card -->
        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card detail-card">

                    <!-- Header -->
                    <div class="detail-header">

                        <div class="d-flex align-items-center gap-4 flex-wrap">

                            <div class="header-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>

                            <div>
                                <h3>Detail Kartu Keluarga</h3>

                                <p>
                                    Informasi lengkap data kartu keluarga
                                </p>
                            </div>

                        </div>

                    </div>

                    <!-- Body -->
                    <div class="detail-body">

                        <table class="detail-table">

                            <tr>
                                <td class="label">Nomor Kartu Keluarga</td>
                                <td class="separator">:</td>
                                <td class="value">
                                    <?php echo $data->no_kk ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">Kepala Keluarga</td>
                                <td class="separator">:</td>
                                <td class="value">
                                    <?php echo $data->kk ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">Alamat</td>
                                <td class="separator">:</td>
                                <td class="value">
                                    <?php echo $data->alamat ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">Kecamatan</td>
                                <td class="separator">:</td>
                                <td class="value">
                                    <?php echo $data->kec ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">Kabupaten</td>
                                <td class="separator">:</td>
                                <td class="value">
                                    <?php echo $data->kab ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">Provinsi</td>
                                <td class="separator">:</td>
                                <td class="value">
                                    <?php echo $data->prov ?>
                                </td>
                            </tr>

                        </table>

                        <!-- Button -->
                        <div class="mt-5">

                            <a href="keluarga.php" class="btn-back">
                                <i class="bi bi-arrow-left me-2"></i>
                                Kembali
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


</body>
</html>