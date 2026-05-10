<?php
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kelahiran</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: linear-gradient(135deg, #f4f7ff, #e8f0ff);
            min-height: 100vh;
            overflow-x: hidden;
        }

        #main-content{
            transition: .3s;
            width: 100%;
        }

        .page-title{
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .page-subtitle{
            color: #64748b;
            font-size: 14px;
        }

        .form-card{
            border: none;
            border-radius: 28px;
            overflow: hidden;
            background: rgba(255,255,255,0.96);
            backdrop-filter: blur(10px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.08);
        }

        .card-header-custom{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            padding: 30px;
            color: white;
        }

        .card-header-custom h4{
            margin: 0;
            font-weight: 700;
            font-size: 24px;
        }

        .card-header-custom p{
            margin-top: 6px;
            margin-bottom: 0;
            opacity: .9;
            font-size: 14px;
        }

        .form-body{
            padding: 35px;
        }

        .form-label{
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .input-icon{
            position: relative;
        }

        .input-icon i{
            position: absolute;
            top: 50%;
            left: 16px;
            transform: translateY(-50%);
            color: #94a3b8;
            z-index: 10;
            font-size: 16px;
        }

        .input-icon .form-control,
        .input-icon .form-select{
            padding-left: 48px;
        }

        .form-control,
        .form-select{
            height: 54px;
            border-radius: 16px;
            border: 1px solid #dbeafe;
            background: #f8fbff;
            transition: .3s;
            font-size: 14px;
            box-shadow: none !important;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #2563eb;
            background: white;
            box-shadow: 0 0 0 0.18rem rgba(37,99,235,.12) !important;
        }

        .btn-save{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            color: white;
            border-radius: 16px;
            padding: 13px 28px;
            font-weight: 600;
            transition: .3s;
            box-shadow: 0 10px 20px rgba(37,99,235,.20);
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 12px 24px rgba(37,99,235,.28);
        }

        .btn-cancel{
            border-radius: 16px;
            padding: 13px 28px;
            font-weight: 600;
            border: 1px solid #dbe4ee;
            background: white;
            color: #334155;
            transition: .3s;
        }

        .btn-cancel:hover{
            background: #f8fafc;
            color: #0f172a;
            border-color: #cbd5e1;
        }

        /* ================= MOBILE ================= */

        @media(max-width: 768px){

            #main-content{
                padding: 18px !important;
            }

            .page-title{
                font-size: 22px;
            }

            .page-subtitle{
                font-size: 13px;
            }

            .card-header-custom{
                padding: 24px 20px;
            }

            .card-header-custom h4{
                font-size: 20px;
                line-height: 1.4;
            }

            .card-header-custom p{
                font-size: 13px;
            }

            .form-body{
                padding: 22px;
            }

            .form-control,
            .form-select{
                height: 50px;
                font-size: 13px;
            }

            .form-label{
                font-size: 13px;
            }

            .d-flex.gap-3{
                flex-direction: column;
            }

            .btn-save,
            .btn-cancel{
                width: 100%;
                text-align: center;
                justify-content: center;
            }

        }

        @media(max-width: 480px){

            #main-content{
                padding: 14px !important;
            }

            .form-card{
                border-radius: 22px;
            }

            .card-header-custom{
                padding: 20px 18px;
            }

            .form-body{
                padding: 18px;
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

    <!-- Header -->
    <div class="mb-4">

        <div class="page-title">
            Edit Data Kelahiran
        </div>

        <div class="page-subtitle">
            Perbarui informasi data kelahiran penduduk
        </div>

    </div>

    <!-- Form -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-9 col-md-11">

            <div class="card form-card">

                <!-- Header -->
                <div class="card-header-custom">

                    <h4>
                        <i class="bi bi-pencil-square me-2"></i>
                        Form Edit Kelahiran
                    </h4>

                    <p>
                        Pastikan data yang diperbarui sudah benar
                    </p>

                </div>

                <!-- Form Body -->
                <div class="form-body">

                    <form action="edit_kelahiran.php" method="POST">

                        <div class="row">

                            <!-- Nama -->
                            <div class="col-12 mb-4">

                                <label class="form-label">
                                    Nama Anak
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-person"></i>

                                    <input 
                                        type="text" 
                                        name="nama" 
                                        class="form-control"
                                        value="<?php echo $data->nama ?>" 
                                        placeholder="Masukkan nama anak"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Tanggal -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tanggal Lahir
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-calendar-event"></i>

                                    <input 
                                        type="date" 
                                        name="tanggal" 
                                        class="form-control"
                                        value="<?php echo $data->tanggal ?>" 
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Kelamin -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Jenis Kelamin
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-gender-ambiguous"></i>

                                    <select class="form-select" name="kelamin">

                                        <option value="Laki-laki"
                                            <?php if($data->kelamin=="Laki-laki"){ echo "selected"; } ?>>
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan"
                                            <?php if($data->kelamin=="Perempuan"){ echo "selected"; } ?>>
                                            Perempuan
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <!-- Ayah -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Nama Ayah
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-person-badge"></i>

                                    <input 
                                        type="text" 
                                        name="ayah" 
                                        class="form-control"
                                        value="<?php echo $data->ayah ?>" 
                                        placeholder="Masukkan nama ayah"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Ibu -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Nama Ibu
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-person-heart"></i>

                                    <input 
                                        type="text" 
                                        name="ibu" 
                                        class="form-control"
                                        value="<?php echo $data->ibu ?>" 
                                        placeholder="Masukkan nama ibu"
                                        required
                                    >

                                </div>

                            </div>

                        </div>

                        <!-- Hidden ID -->
                        <input 
                            type="hidden" 
                            name="id" 
                            value="<?php echo $data->id ?>"
                        >

                        <!-- Button -->
                        <div class="d-flex gap-3 mt-2">

                            <button type="submit" name="submit" class="btn btn-save">

                                <i class="bi bi-check-circle-fill me-2"></i>
                                Simpan Perubahan

                            </button>

                            <a href="kelahiran.php" class="btn btn-cancel">

                                <i class="bi bi-arrow-left me-2"></i>
                                Kembali

                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>