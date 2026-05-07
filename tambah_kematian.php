<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kematian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body{
            background: linear-gradient(135deg, #eef4ff, #f8fbff);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        #main-content{
            transition: .3s;
        }

        .topbar{
            background: white;
            padding: 18px 25px;
            border-radius: 20px;
            box-shadow: 0 4px 25px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }

        .toggle-btn{
            width: 45px;
            height: 45px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            color: white;
            font-size: 20px;
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
        }

        .form-card{
            background: white;
            border: none;
            border-radius: 24px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.06);
            overflow: hidden;
        }

        .form-header{
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            padding: 30px;
            color: white;
        }

        .form-header h3{
            margin: 0;
            font-weight: 700;
        }

        .form-header p{
            margin: 8px 0 0;
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
            border-radius: 14px;
            border: 1px solid #dbeafe;
            padding: 12px 15px;
            height: 50px;
            box-shadow: none;
            transition: .3s;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #dc2626;
            box-shadow: 0 0 0 0.15rem rgba(220,38,38,0.15);
        }

        .input-group .form-control:first-child{
            margin-right: 10px;
        }

        .btn-save{
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            border: none;
            color: white;
            padding: 12px 28px;
            border-radius: 14px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
        }

        .btn-cancel{
            background: #e2e8f0;
            color: #334155;
            padding: 12px 28px;
            border-radius: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .btn-cancel:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        .icon-box{
            width: 65px;
            height: 65px;
            border-radius: 18px;
            background: rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        @media(max-width:768px){

            .page-title{
                font-size: 22px;
            }

            .form-body{
                padding: 25px;
            }

            .btn-save,
            .btn-cancel{
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

<div class="p-4" id="main-content">

    <!-- Topbar -->
    <div class="topbar d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center gap-3">
            <button class="toggle-btn" id="button-toggle">
                <i class="bi bi-list"></i>
            </button>

            <div>
                <h3 class="page-title">Tambah Data Kematian</h3>
                <div class="subtitle">
                    Form input data kematian penduduk
                </div>
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
                        <i class="bi bi-heartbreak-fill"></i>
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
                               class="btn-cancel">
                                <i class="bi bi-arrow-left-circle me-2"></i>
                                Batal
                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.getElementById("button-toggle").addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("active-sidebar");
    document.getElementById("main-content").classList.toggle("active-main-content");
});
</script>

</body>
</html>