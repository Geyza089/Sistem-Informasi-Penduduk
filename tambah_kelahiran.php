<?php
include 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kelahiran</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Google Font -->
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

        /* HEADER */

        .page-header{
            margin-bottom: 28px;
        }

        .page-title{
            font-size: 30px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 5px;
        }

        .page-subtitle{
            font-size: 14px;
            color: #64748b;
        }

        /* CARD */

        .form-card{
            border: none;
            border-radius: 30px;
            overflow: hidden;
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(12px);
            box-shadow: 0 15px 45px rgba(0,0,0,.08);
        }

        .form-header{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 32px;
            color: white;
        }

        .form-header-content{
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .header-icon{
            width: 75px;
            height: 75px;
            border-radius: 22px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            flex-shrink: 0;
        }

        .form-header h4{
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-header p{
            margin: 0;
            opacity: .92;
            font-size: 14px;
        }

        .form-body{
            padding: 35px;
        }

        /* LABEL */

        .form-label{
            font-weight: 600;
            color: #334155;
            margin-bottom: 10px;
        }

        /* INPUT */

        .input-group-modern{
            position: relative;
        }

        .input-group-modern i{
            position: absolute;
            top: 50%;
            left: 18px;
            transform: translateY(-50%);
            color: #94a3b8;
            z-index: 10;
            font-size: 16px;
        }

        .form-control,
        .form-select{
            height: 54px;
            border-radius: 16px;
            border: 1px solid #dbeafe;
            background: #f8fbff;
            padding-left: 50px;
            font-size: 14px;
            transition: .3s;
            box-shadow: none !important;
        }

        textarea.form-control{
            height: auto;
            min-height: 120px;
            padding-top: 15px;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #2563eb;
            background: white;
            box-shadow: 0 0 0 4px rgba(37,99,235,.10) !important;
        }

        /* BUTTON */

        .button-group{
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .btn-save{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border: none;
            color: white;
            padding: 13px 28px;
            border-radius: 16px;
            font-weight: 600;
            transition: .3s;
            box-shadow: 0 10px 22px rgba(37,99,235,.22);
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 14px 28px rgba(37,99,235,.28);
        }

        .btn-back{
            background: #e2e8f0;
            color: #334155;
            border: none;
            padding: 13px 28px;
            border-radius: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .btn-back:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        /* RESPONSIVE */

        @media(max-width: 768px){

            #main-content{
                padding: 18px !important;
            }

            .page-title{
                font-size: 24px;
            }

            .form-header{
                padding: 24px;
            }

            .form-header-content{
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
            }

            .header-icon{
                width: 65px;
                height: 65px;
                font-size: 28px;
            }

            .form-body{
                padding: 22px;
            }

            .button-group{
                flex-direction: column;
            }

            .btn-save,
            .btn-back{
                width: 100%;
                text-align: center;
            }
        }

    </style>
</head>

<body>

<div class="p-4" id="main-content">

    <!-- HEADER -->
    <div class="page-header">

        <div class="page-title">
            Tambah Data Kelahiran
        </div>

        <div class="page-subtitle">
            Lengkapi formulir data kelahiran penduduk dengan benar dan lengkap
        </div>

    </div>

    <!-- FORM -->
    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card form-card">

                <!-- HEADER CARD -->
                <div class="form-header">

                    <div class="form-header-content">

                        <div class="header-icon">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>

                        <div>
                            <h4>Formulir Data Kelahiran</h4>

                            <p>
                                Input data kelahiran penduduk secara lengkap dan valid
                            </p>
                        </div>

                    </div>

                </div>

                <!-- BODY -->
                <div class="form-body">

                    <form action="insert_kelahiran.php" method="POST">

                        <div class="row">

                            <!-- Nama -->
                            <div class="col-md-12 mb-4">

                                <label class="form-label">
                                    Nama Anak
                                </label>

                                <div class="input-group-modern">

                                    <i class="bi bi-person-fill"></i>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama"
                                        placeholder="Masukkan nama lengkap anak"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Tanggal -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tanggal Lahir
                                </label>

                                <div class="input-group-modern">

                                    <i class="bi bi-calendar-event-fill"></i>

                                    <input 
                                        type="date"
                                        class="form-control"
                                        name="tanggal"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Gender -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Jenis Kelamin
                                </label>

                                <div class="input-group-modern">

                                    <i class="bi bi-gender-ambiguous"></i>

                                    <select class="form-select" name="kelamin">

                                        <option value="Laki-laki">
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan">
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

                                <div class="input-group-modern">

                                    <i class="bi bi-person-badge-fill"></i>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="ayah"
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

                                <div class="input-group-modern">

                                    <i class="bi bi-person-heart"></i>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="ibu"
                                        placeholder="Masukkan nama ibu"
                                        required
                                    >

                                </div>

                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="button-group">

                            <button 
                                type="submit"
                                name="submit"
                                class="btn btn-save"
                            >

                                <i class="bi bi-save-fill me-2"></i>
                                Simpan Data

                            </button>

                            <a href="kelahiran.php" class="btn btn-back">

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