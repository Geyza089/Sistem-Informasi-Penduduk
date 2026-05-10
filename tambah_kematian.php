<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kematian</title>

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
        }

        #main-content{
            transition: .3s;
        }

        .topbar{
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(10px);
            padding: 20px 25px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,.06);
            margin-bottom: 28px;
        }

        .page-title{
            font-size: 28px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .subtitle{
            font-size: 14px;
            color: #64748b;
            margin-top: 3px;
        }

        .form-card{
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 28px;
            box-shadow: 0 15px 40px rgba(0,0,0,.08);
            overflow: hidden;
        }

        .form-header{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            padding: 32px;
            color: white;
        }

        .form-header h3{
            margin: 0;
            font-weight: 700;
        }

        .form-header p{
            margin: 8px 0 0;
            opacity: .92;
            font-size: 14px;
        }

        .form-body{
            padding: 35px;
        }

        .form-label{
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select{
            height: 52px;
            border-radius: 14px;
            border: 1px solid #dbeafe;
            background: #f8fbff;
            padding-left: 16px;
            transition: .3s;
            box-shadow: none;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #2563eb;
            background: white;
            box-shadow: 0 0 0 0.15rem rgba(37,99,235,.15);
        }

        .btn-save{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            color: white;
            padding: 12px 28px;
            border-radius: 14px;
            font-weight: 600;
            transition: .3s;
            box-shadow: 0 8px 18px rgba(37,99,235,.20);
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 10px 22px rgba(37,99,235,.28);
        }

        .btn-cancel{
            background: #e2e8f0;
            color: #334155;
            padding: 12px 28px;
            border-radius: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
            border: none;
        }

        .btn-cancel:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        .icon-box{
            width: 68px;
            height: 68px;
            border-radius: 20px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        @media(max-width:768px){

            .page-title{
                font-size: 22px;
            }

            .form-body{
                padding: 24px;
            }

            .btn-save,
            .btn-cancel{
                width: 100%;
                justify-content: center;
            }
        }

    </style>
</head>
<body>

<div class="p-4" id="main-content">

    <!-- Topbar -->
    <div class="topbar d-flex justify-content-between align-items-center">

        <div>
            <h3 class="page-title">
                Tambah Data Kematian
            </h3>

            <div class="subtitle">
                Form input data kematian penduduk
            </div>
        </div>

    </div>

    <!-- Form Card -->
    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="form-card">

                <!-- Header -->
                <div class="form-header d-flex align-items-center gap-4">

                    <div class="icon-box">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                    </div>

                    <div>
                        <h3>Form Data Kematian</h3>

                        <p>
                            Lengkapi seluruh data dengan benar dan valid.
                        </p>
                    </div>

                </div>

                <!-- Body -->
                <div class="form-body">

                    <form action="insert_kematian.php" method="POST">

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="nama"
                                       placeholder="Masukkan nama lengkap"
                                       required>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Nomor Induk Kependudukan
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="nik"
                                       placeholder="Masukkan NIK"
                                       required>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tempat Lahir
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="tempat"
                                       placeholder="Masukkan tempat lahir"
                                       required>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tanggal Lahir
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="tanggal"
                                       required>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Agama
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="agama"
                                       placeholder="Masukkan agama"
                                       required>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Jenis Kelamin
                                </label>

                                <select class="form-select" name="kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tanggal Kematian
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="wafat"
                                       required>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Penyebab Kematian
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="sebab"
                                       placeholder="Masukkan penyebab kematian"
                                       required>

                            </div>

                        </div>

                        <!-- Button -->
                        <div class="d-flex flex-wrap gap-3 mt-3">

                            <button type="submit"
                                    name="submit"
                                    class="btn btn-save">

                                <i class="bi bi-save-fill me-2"></i>
                                Simpan Data

                            </button>

                            <a href="kematian.php"
                               class="btn btn-cancel">

                                <i class="bi bi-arrow-left-circle me-2"></i>
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
</html>s