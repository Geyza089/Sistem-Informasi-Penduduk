<?php
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
            background: linear-gradient(135deg, #f4f7ff, #e8f0ff);
            min-height: 100vh;
        }

        #main-content{
            transition: .3s;
        }

        .detail-card{
            border: none;
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255,255,255,0.96);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }

        .card-header-custom{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            padding: 28px;
            color: white;
        }

        .card-header-custom h4{
            margin: 0;
            font-weight: 700;
        }

        .card-header-custom p{
            margin-top: 6px;
            margin-bottom: 0;
            opacity: .9;
            font-size: 14px;
        }

        .profile-section{
            text-align: center;
            padding: 35px 20px 15px;
        }

        .profile-icon{
            width: 95px;
            height: 95px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            color: white;
            font-size: 42px;
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

        .detail-table{
            margin-top: 25px;
        }

        .detail-table tr{
            border-bottom: 1px solid #eef2f7;
        }

        .detail-table td{
            padding: 16px 10px;
            vertical-align: middle;
        }

        .label{
            width: 30%;
            font-weight: 600;
            color: #334155;
        }

        .separator{
            width: 5%;
            color: #94a3b8;
            font-weight: 600;
        }

        .value{
            color: #0f172a;
            font-weight: 500;
        }

        .btn-back{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            color: white;
            padding: 12px 26px;
            border-radius: 14px;
            font-weight: 600;
            transition: .3s;
            box-shadow: 0 8px 18px rgba(37,99,235,.25);
        }

        .btn-back:hover{
            transform: translateY(-2px);
            color: white;
        }

        .info-badge{
            display: inline-block;
            padding: 6px 14px;
            border-radius: 50px;
            background: #eff6ff;
            color: #2563eb;
            font-size: 13px;
            font-weight: 600;
        }

        @media(max-width: 768px){

            .label{
                width: 40%;
            }

            .profile-name{
                font-size: 20px;
            }

            .card-header-custom{
                padding: 22px;
            }
        }
    </style>
</head>
<body>

<div class="p-4" id="main-content">

    <!-- Toggle -->
    <div class="container-fluid mb-4">
    </div>

    <?php 
    $sql = "SELECT * FROM kelahiran WHERE id='".$_GET['id']."'";
    $rows = $kon->query($sql);
    $data = $rows->fetch_object();
    ?>

        <div class="card detail-card">

            <!-- Header -->
            <div class="card-header-custom">
                <h4>
                    <i class="bi bi-file-earmark-person-fill me-2"></i>
                    Detail Data Kelahiran
                </h4>
                <p>Informasi lengkap data kelahiran penduduk</p>
            </div>

            <!-- Profile -->
            <div class="profile-section">
                <div class="profile-icon">
                    <i class="bi bi-person-heart"></i>
                </div>

                <div class="profile-name">
                    <?php echo $data->nama ?>
                </div>

                <div class="profile-subtitle">
                    Data Kelahiran Penduduk
                </div>

                <div class="mt-3">
                    <span class="info-badge">
                        <?php echo $data->kelamin ?>
                    </span>
                </div>
            </div>

            <!-- Detail -->
            <div class="card-body px-4 pb-4">

                <div class="table-responsive">
                    <table class="table detail-table">

                        <tr>
                            <td class="label">
                                <i class="bi bi-person me-2 text-primary"></i>
                                Nama
                            </td>
                            <td class="separator">:</td>
                            <td class="value">
                                <?php echo $data->nama ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="label">
                                <i class="bi bi-calendar-event me-2 text-primary"></i>
                                Tanggal Lahir
                            </td>
                            <td class="separator">:</td>
                            <td class="value">
                                <?php echo date('d F Y', strtotime($data->tanggal)) ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="label">
                                <i class="bi bi-gender-ambiguous me-2 text-primary"></i>
                                Jenis Kelamin
                            </td>
                            <td class="separator">:</td>
                            <td class="value">
                                <?php echo $data->kelamin ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="label">
                                <i class="bi bi-person-badge me-2 text-primary"></i>
                                Nama Ayah
                            </td>
                            <td class="separator">:</td>
                            <td class="value">
                                <?php echo $data->ayah ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="label">
                                <i class="bi bi-person-heart me-2 text-primary"></i>
                                Nama Ibu
                            </td>
                            <td class="separator">:</td>
                            <td class="value">
                                <?php echo $data->ibu ?>
                            </td>
                        </tr>

                    </table>
                </div>

                <!-- Button -->
                <div class="mt-4">
                    <a href="kelahiran.php" class="btn btn-back">
                        <i class="bi bi-arrow-left me-2"></i>
                        Kembali
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>
</body>
</html>