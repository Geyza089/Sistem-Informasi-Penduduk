<?php
include 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kartu Keluarga</title>

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
            background: linear-gradient(135deg, #eaf4ff, #f7fbff);
            min-height: 100vh;
        }

        #main-content{
            transition: .3s;
        }

        .page-title{
            font-size: 28px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 5px;
        }

        .page-subtitle{
            color: #64748b;
            font-size: 14px;
        }

        .toggle-btn{
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 16px;
            background: white;
            box-shadow: 0 8px 20px rgba(0,0,0,.08);
            transition: .3s;
        }

        .toggle-btn:hover{
            transform: scale(1.05);
        }

        .form-card{
            border: none;
            border-radius: 28px;
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 40px rgba(0,0,0,.08);
            overflow: hidden;
        }

        .form-header{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 30px;
            color: white;
        }

        .form-header h4{
            font-weight: 700;
            margin-bottom: 5px;
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

        .form-control{
            border-radius: 14px;
            padding: 13px 15px;
            border: 1px solid #dbe4ee;
            transition: .3s;
            font-size: 14px;
        }

        .form-control:focus{
            border-color: #2563eb;
            box-shadow: 0 0 0 0.15rem rgba(37,99,235,.15);
        }

        .btn-save{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 14px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 8px 20px rgba(37,99,235,.25);
        }

        .btn-cancel{
            background: #e2e8f0;
            color: #334155;
            border: none;
            padding: 12px 24px;
            border-radius: 14px;
            font-weight: 600;
            transition: .3s;
            text-decoration: none;
        }

        .btn-cancel:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        .section-icon{
            width: 60px;
            height: 60px;
            border-radius: 18px;
            background: rgba(255,255,255,.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
        }

        @media(max-width: 768px){

            .form-body{
                padding: 25px;
            }

            .page-title{
                font-size: 24px;
            }
        }

    </style>
</head>

<body>

<div class="p-4" id="main-content">

    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex align-items-center gap-3 mb-4">

            <button class="toggle-btn" id="button-toggle">
                <i class="bi bi-list fs-5"></i>
            </button>

            <div>
                <div class="page-title">
                    Tambah Data Kartu Keluarga
                </div>

                <div class="page-subtitle">
                    Lengkapi formulir data kartu keluarga dengan benar
                </div>
            </div>

        </div>

        <!-- Form -->
        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card form-card">

                    <!-- Header Card -->
                    <div class="form-header">

                        <div class="d-flex align-items-center gap-3">

                            <div class="section-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>

                            <div>
                                <h4>Formulir Kartu Keluarga</h4>

                                <p>
                                    Input data kartu keluarga secara lengkap
                                </p>
                            </div>

                        </div>

                    </div>

                    <!-- Body -->
                    <div class="form-body">

                        <form action="insert_keluarga.php" method="POST">

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Nomor Kartu Keluarga
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="no_kk"
                                        placeholder="Masukkan nomor KK"
                                        required
                                    >

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Kepala Keluarga
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="kk"
                                        placeholder="Masukkan nama kepala keluarga"
                                        required
                                    >

                                </div>

                                <div class="col-12 mb-4">

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

                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Kecamatan
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="kec"
                                        placeholder="Masukkan kecamatan"
                                        required
                                    >

                                </div>

                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Kabupaten
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="kab"
                                        placeholder="Masukkan kabupaten"
                                        required
                                    >

                                </div>

                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Provinsi
                                    </label>

                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="prov"
                                        placeholder="Masukkan provinsi"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Button -->
                            <div class="d-flex gap-3 mt-2">

                                <button 
                                    type="submit"
                                    name="submit"
                                    class="btn-save"
                                >
                                    <i class="bi bi-save-fill me-2"></i>
                                    Simpan Data
                                </button>

                                <a href="keluarga.php" class="btn-cancel">
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

</div>

<!-- Sidebar Toggle -->
<script>

document.getElementById("button-toggle").addEventListener("click", () => {

    document.getElementById("sidebar")
    .classList.toggle("active-sidebar");

    document.getElementById("main-content")
    .classList.toggle("active-main-content");

});

</script>

</body>
</html>