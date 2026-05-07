<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penduduk</title>

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
            background: linear-gradient(135deg, #e0f2ff, #f4f9ff);
            min-height: 100vh;
        }

        #main-content{
            transition: .3s;
        }

        .page-title{
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 3px;
        }

        .page-subtitle{
            color: #64748b;
            font-size: 14px;
        }

        .form-card{
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            border: 1px solid rgba(255,255,255,0.4);
        }

        .form-label{
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select{
            border-radius: 14px;
            padding: 12px 14px;
            border: 1px solid #dbe4ee;
            transition: .3s;
            font-size: 14px;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #3b82f6;
            box-shadow: 0 0 0 0.15rem rgba(59,130,246,.15);
        }

        .input-group .form-control:first-child{
            margin-right: 10px;
        }

        .btn-primary-custom{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border: none;
            border-radius: 14px;
            padding: 12px 24px;
            font-weight: 600;
            color: white;
            transition: .3s;
        }

        .btn-primary-custom:hover{
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37,99,235,.25);
        }

        .btn-secondary-custom{
            background: #e2e8f0;
            color: #334155;
            border: none;
            border-radius: 14px;
            padding: 12px 24px;
            font-weight: 600;
            transition: .3s;
            text-decoration: none;
        }

        .btn-secondary-custom:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        .toggle-btn{
            width: 48px;
            height: 48px;
            border-radius: 14px;
            border: none;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: .3s;
        }

        .toggle-btn:hover{
            transform: scale(1.05);
        }

        .section-title{
            font-size: 15px;
            font-weight: 600;
            color: #2563eb;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        @media(max-width: 768px){

            .form-card{
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

    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex align-items-center justify-content-between mb-4">

            <div class="d-flex align-items-center gap-3">

                <button class="toggle-btn" id="button-toggle">
                    <i class="bi bi-list fs-5"></i>
                </button>

                <div>
                    <div class="page-title">
                        Tambah Data Penduduk
                    </div>

                    <div class="page-subtitle">
                        Lengkapi informasi data penduduk dengan benar
                    </div>
                </div>

            </div>

        </div>

        <!-- Form Card -->
        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="form-card">

                    <div class="section-title">
                        <i class="bi bi-person-vcard"></i>
                        Formulir Data Penduduk
                    </div>

                    <form action="insert.php" method="POST">

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input 
                                    class="form-control" 
                                    type="text" 
                                    name="nama"
                                    placeholder="Masukkan nama lengkap"
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Nomor Induk Kependudukan
                                </label>

                                <input 
                                    class="form-control" 
                                    type="text" 
                                    name="nik"
                                    placeholder="Masukkan NIK"
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Tempat Lahir
                                </label>

                                <input 
                                    class="form-control" 
                                    type="text" 
                                    name="tempat"
                                    placeholder="Contoh: Bandung"
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Tanggal Lahir
                                </label>

                                <input 
                                    class="form-control" 
                                    type="date" 
                                    name="tanggal"
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Jenis Kelamin
                                </label>

                                <select class="form-select" name="jenis">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Agama
                                </label>

                                <input 
                                    class="form-control" 
                                    type="text" 
                                    name="agama"
                                    placeholder="Masukkan agama"
                                    required
                                >
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label">
                                    Alamat
                                </label>

                                <textarea 
                                    class="form-control" 
                                    name="alamat"
                                    rows="3"
                                    placeholder="Masukkan alamat lengkap"
                                    required
                                ></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Status
                                </label>

                                <select class="form-select" name="status">
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Pekerjaan
                                </label>

                                <input 
                                    class="form-control" 
                                    type="text" 
                                    name="pekerjaan"
                                    placeholder="Masukkan pekerjaan"
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Kewarganegaraan
                                </label>

                                <select class="form-select" name="warga">
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                            </div>

                        </div>

                        <!-- Button -->
                        <div class="d-flex gap-3 mt-2">

                            <button type="submit" name="submit" class="btn-primary-custom">
                                <i class="bi bi-save2 me-1"></i>
                                Simpan Data
                            </button>

                            <a href="penduduk.php" class="btn-secondary-custom">
                                <i class="bi bi-arrow-left me-1"></i>
                                Kembali
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