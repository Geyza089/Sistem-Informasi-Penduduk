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
            background: linear-gradient(135deg, #eef5ff, #f8fbff);
            min-height: 100vh;
            overflow-x: hidden;
        }

        #main-content{
            transition: .3s;
        }

        /* HEADER */

        .top-header{
            margin-bottom: 30px;
        }

        .page-title{
            font-size: 30px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .page-subtitle{
            color: #64748b;
            font-size: 14px;
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
            padding: 35px;
            position: relative;
            overflow: hidden;
        }

        .form-header::before{
            content: '';
            position: absolute;
            width: 250px;
            height: 250px;
            background: rgba(255,255,255,.08);
            border-radius: 50%;
            top: -120px;
            right: -70px;
        }

        .header-content{
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .header-icon{
            width: 78px;
            height: 78px;
            border-radius: 24px;
            background: rgba(255,255,255,.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            color: white;
            flex-shrink: 0;
        }

        .header-text h3{
            color: white;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .header-text p{
            color: rgba(255,255,255,.9);
            margin: 0;
            font-size: 14px;
        }

        /* BODY */

        .form-body{
            padding: 40px;
        }

        .section-title{
            font-size: 15px;
            font-weight: 600;
            color: #2563eb;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-label{
            font-size: 14px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .form-control{
            height: 54px;
            border-radius: 16px;
            border: 1px solid #dbe4ee;
            padding: 12px 16px;
            font-size: 14px;
            transition: .3s;
            box-shadow: none;
        }

        textarea.form-control{
            height: auto;
            min-height: 120px;
            resize: none;
        }

        .form-control:focus{
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37,99,235,.12);
        }

        .input-icon{
            position: relative;
        }

        .input-icon i{
            position: absolute;
            top: 17px;
            left: 16px;
            color: #94a3b8;
            font-size: 15px;
        }

        .input-icon .form-control{
            padding-left: 45px;
        }

        /* BUTTON */

        .button-group{
            display: flex;
            gap: 14px;
            margin-top: 10px;
            flex-wrap: wrap;
        }

        .btn-save{
            border: none;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            border-radius: 16px;
            padding: 13px 26px;
            font-weight: 600;
            transition: .3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-width: 180px;
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 10px 25px rgba(37,99,235,.25);
        }

        .btn-back{
            border: none;
            background: #e2e8f0;
            color: #334155;
            border-radius: 16px;
            padding: 13px 26px;
            font-weight: 600;
            transition: .3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-width: 160px;
        }

        .btn-back:hover{
            background: #cbd5e1;
            color: #0f172a;
            transform: translateY(-2px);
        }

        /* MOBILE */

        @media(max-width: 768px){

            #main-content{
                padding: 18px !important;
            }

            .page-title{
                font-size: 24px;
                line-height: 1.3;
            }

            .page-subtitle{
                font-size: 13px;
            }

            .form-header{
                padding: 28px 22px;
            }

            .header-content{
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
            }

            .header-icon{
                width: 65px;
                height: 65px;
                font-size: 28px;
                border-radius: 20px;
            }

            .form-body{
                padding: 24px 20px;
            }

            .form-control{
                height: 50px;
                font-size: 13px;
            }

            textarea.form-control{
                min-height: 100px;
            }

            .button-group{
                flex-direction: column;
            }

            .btn-save,
            .btn-back{
                width: 100%;
                min-width: 100%;
            }
        }

    </style>
</head>

<body>

<div class="p-4" id="main-content">

    <div class="container-fluid">

        <!-- Header -->
        <div class="top-header">

            <div>
                <div class="page-title">
                    Tambah Data Kartu Keluarga
                </div>

                <div class="page-subtitle">
                    Lengkapi formulir data kartu keluarga dengan informasi yang valid
                </div>
            </div>

        </div>

        <!-- Form -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-10">

                <div class="card form-card">

                    <!-- Header -->
                    <div class="form-header">

                        <div class="header-content">

                            <div class="header-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>

                            <div class="header-text">

                                <h3>Formulir Kartu Keluarga</h3>

                                <p>
                                    Input data kartu keluarga secara lengkap dan benar
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- Body -->
                    <div class="form-body">

                        <div class="section-title">
                            <i class="bi bi-pencil-square"></i>
                            Informasi Kartu Keluarga
                        </div>

                        <form action="insert_keluarga.php" method="POST">

                            <div class="row">

                                <!-- NO KK -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Nomor Kartu Keluarga
                                    </label>

                                    <div class="input-icon">

                                        <i class="bi bi-credit-card-2-front"></i>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="no_kk"
                                            placeholder="Masukkan nomor KK"
                                            required
                                        >

                                    </div>

                                </div>

                                <!-- KEPALA KELUARGA -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Kepala Keluarga
                                    </label>

                                    <div class="input-icon">

                                        <i class="bi bi-person-fill"></i>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="kk"
                                            placeholder="Masukkan nama kepala keluarga"
                                            required
                                        >

                                    </div>

                                </div>

                                <!-- ALAMAT -->
                                <div class="col-12 mb-4">

                                    <label class="form-label">
                                        Alamat Lengkap
                                    </label>

                                    <textarea
                                        class="form-control"
                                        name="alamat"
                                        rows="4"
                                        placeholder="Masukkan alamat lengkap"
                                        required
                                    ></textarea>

                                </div>

                                <!-- KEC -->
                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Kecamatan
                                    </label>

                                    <div class="input-icon">

                                        <i class="bi bi-geo-alt-fill"></i>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="kec"
                                            placeholder="Masukkan kecamatan"
                                            required
                                        >

                                    </div>

                                </div>

                                <!-- KAB -->
                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Kabupaten
                                    </label>

                                    <div class="input-icon">

                                        <i class="bi bi-buildings-fill"></i>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="kab"
                                            placeholder="Masukkan kabupaten"
                                            required
                                        >

                                    </div>

                                </div>

                                <!-- PROV -->
                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Provinsi
                                    </label>

                                    <div class="input-icon">

                                        <i class="bi bi-globe-asia-australia"></i>

                                        <input
                                            type="text"
                                            class="form-control"
                                            name="prov"
                                            placeholder="Masukkan provinsi"
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
                                    class="btn-save"
                                >
                                    <i class="bi bi-save-fill"></i>
                                    Simpan Data
                                </button>

                                <a href="keluarga.php" class="btn-back">
                                    <i class="bi bi-arrow-left"></i>
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

</body>
</html>