<?php
session_start();
include 'sidebar.php';
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM keluarga WHERE id='$id'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kartu Keluarga</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

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

        /* CARD */

        .edit-card{
            border: none;
            border-radius: 30px;
            overflow: hidden;
            background: rgba(255,255,255,.97);
            backdrop-filter: blur(12px);
            box-shadow: 0 18px 45px rgba(15,23,42,.08);
        }

        /* HEADER */

        .edit-header{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 38px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .edit-header::before{
            content: '';
            position: absolute;
            width: 260px;
            height: 260px;
            background: rgba(255,255,255,.08);
            border-radius: 50%;
            top: -120px;
            right: -90px;
        }

        .header-content{
            position: relative;
            z-index: 2;
        }

        .header-icon{
            width: 85px;
            height: 85px;
            border-radius: 24px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            flex-shrink: 0;
        }

        .edit-header h3{
            font-weight: 700;
            margin-bottom: 6px;
        }

        .edit-header p{
            margin: 0;
            opacity: .92;
            font-size: 14px;
        }

        /* BODY */

        .edit-body{
            padding: 40px;
        }

        .form-wrapper{
            background: #f8fbff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 30px;
        }

        /* FORM */

        .form-label{
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control{
            height: 54px;
            border-radius: 16px;
            border: 1px solid #dbe3ef;
            padding: 0 18px;
            transition: .3s;
            font-size: 14px;
            box-shadow: none !important;
        }

        textarea.form-control{
            height: auto;
            min-height: 120px;
            padding-top: 14px;
            resize: none;
        }

        .form-control:focus{
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37,99,235,.12) !important;
            background: white;
        }

        /* BUTTON */

        .button-group{
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .btn-modern{
            border: none;
            padding: 13px 24px;
            border-radius: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-save{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
        }

        .btn-save:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 10px 25px rgba(37,99,235,.25);
        }

        .btn-cancel{
            background: #e2e8f0;
            color: #0f172a;
        }

        .btn-cancel:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        /* RESPONSIVE */

        @media(max-width: 768px){

            #main-content{
                padding: 18px !important;
            }

            .edit-header{
                padding: 28px 22px;
            }

            .header-icon{
                width: 68px;
                height: 68px;
                border-radius: 18px;
                font-size: 28px;
            }

            .edit-header h3{
                font-size: 22px;
            }

            .edit-header p{
                font-size: 13px;
            }

            .edit-body{
                padding: 22px 16px;
            }

            .form-wrapper{
                padding: 22px 16px;
                border-radius: 20px;
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

            .btn-modern{
                width: 100%;
            }

        }

    </style>

</head>

<body>

<div class="p-4" id="main-content">

    <div class="row justify-content-center">

        <div class="col-xl-9 col-lg-10">

            <div class="card edit-card">

                <!-- HEADER -->
                <div class="edit-header">

                    <div class="d-flex align-items-center gap-4 flex-wrap header-content">

                        <div class="header-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>

                        <div>
                            <h3>Edit Data Kartu Keluarga</h3>

                            <p>
                                Perbarui informasi kartu keluarga dengan lengkap dan benar
                            </p>
                        </div>

                    </div>

                </div>

                <!-- BODY -->
                <div class="edit-body">

                    <div class="form-wrapper">

                        <form action="edit_keluarga.php" method="POST">

                            <input
                                type="hidden"
                                name="id"
                                value="<?= $data->id ?>"
                            >

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Nomor Kartu Keluarga
                                    </label>

                                    <input
                                        type="text"
                                        name="no_kk"
                                        class="form-control"
                                        value="<?= $data->no_kk ?>"
                                        placeholder="Masukkan nomor kartu keluarga"
                                        required
                                    >

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Kepala Keluarga
                                    </label>

                                    <input
                                        type="text"
                                        name="kk"
                                        class="form-control"
                                        value="<?= $data->kk ?>"
                                        placeholder="Masukkan nama kepala keluarga"
                                        required
                                    >

                                </div>

                                <div class="col-12 mb-4">

                                    <label class="form-label">
                                        Alamat
                                    </label>

                                    <textarea
                                        name="alamat"
                                        class="form-control"
                                        placeholder="Masukkan alamat lengkap"
                                        required
                                    ><?= $data->alamat ?></textarea>

                                </div>

                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Kecamatan
                                    </label>

                                    <input
                                        type="text"
                                        name="kec"
                                        class="form-control"
                                        value="<?= $data->kec ?>"
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
                                        name="kab"
                                        class="form-control"
                                        value="<?= $data->kab ?>"
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
                                        name="prov"
                                        class="form-control"
                                        value="<?= $data->prov ?>"
                                        placeholder="Masukkan provinsi"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- BUTTON -->
                            <div class="button-group">

                                <button
                                    type="submit"
                                    name="submit"
                                    class="btn-modern btn-save"
                                >

                                    <i class="bi bi-check-circle-fill"></i>
                                    Simpan Perubahan

                                </button>

                                <a
                                    href="keluarga.php"
                                    class="btn-modern btn-cancel"
                                >

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