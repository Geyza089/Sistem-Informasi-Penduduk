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
            background: linear-gradient(135deg, #f4f7ff, #e8f0ff);
            min-height: 100vh;
        }

        #main-content{
            transition: .3s;
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
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }

        .form-header{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            padding: 28px;
            color: white;
        }

        .form-header h4{
            font-weight: 700;
            margin-bottom: 6px;
        }

        .form-header p{
            margin: 0;
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
        }

        .form-control,
        .form-select{
            height: 52px;
            border-radius: 14px;
            border: 1px solid #dbeafe;
            background: #f8fbff;
            padding-left: 16px;
            transition: .3s;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #2563eb;
            box-shadow: 0 0 0 0.15rem rgba(37,99,235,.15);
            background: white;
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
        }

        .input-icon .form-control,
        .input-icon .form-select{
            padding-left: 45px;
        }

        .btn-save{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            color: white;
            border-radius: 14px;
            padding: 12px 30px;
            font-weight: 600;
            transition: .3s;
            box-shadow: 0 8px 18px rgba(37,99,235,.25);
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
        }

        .btn-cancel{
            border-radius: 14px;
            padding: 12px 30px;
            font-weight: 600;
            border: 1px solid #cbd5e1;
            background: white;
            color: #334155;
            transition: .3s;
        }

        .btn-cancel:hover{
            background: #f8fafc;
            color: #0f172a;
        }

        @media(max-width: 768px){
            .form-body{
                padding: 25px;
            }

            .page-title{
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

<div class="p-4" id="main-content">

    <!-- Header -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center gap-3">

            <div>
                <div class="page-title">
                    Tambah Data Kelahiran
                </div>
                <div class="page-subtitle">
                    Form input data kelahiran penduduk
                </div>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card form-card">

                <div class="form-header">
                    <h4>
                        <i class="bi bi-person-plus-fill me-2"></i>
                        Form Kelahiran
                    </h4>
                    <p>Lengkapi seluruh data dengan benar dan valid</p>
                </div>

                <div class="form-body">

                    <form action="insert_kelahiran.php" method="POST">

                        <div class="mb-4">
                            <label class="form-label">Nama Anak</label>
                            <div class="input-icon">
                                <i class="bi bi-person"></i>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Tanggal Lahir</label>
                            <div class="input-icon">
                                <i class="bi bi-calendar-date"></i>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="input-icon">
                                <i class="bi bi-gender-ambiguous"></i>
                                <select class="form-select" name="kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Nama Ayah</label>
                            <div class="input-icon">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class="form-control" name="ayah" placeholder="Masukkan nama ayah" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Nama Ibu</label>
                            <div class="input-icon">
                                <i class="bi bi-person-heart"></i>
                                <input type="text" class="form-control" name="ibu" placeholder="Masukkan nama ibu" required>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mt-4">
                            <button type="submit" name="submit" class="btn btn-save">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Simpan Data
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