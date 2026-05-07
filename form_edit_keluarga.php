<?php
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kartu Keluarga</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
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
        }

        #main-content{
            transition: .3s;
        }

        .edit-card{
            border: none;
            border-radius: 28px;
            overflow: hidden;
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 40px rgba(0,0,0,.08);
        }

        .edit-header{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 35px;
            color: white;
        }

        .edit-header h3{
            font-weight: 700;
            margin-bottom: 5px;
        }

        .edit-header p{
            margin: 0;
            opacity: .9;
            font-size: 14px;
        }

        .header-icon{
            width: 80px;
            height: 80px;
            border-radius: 22px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
        }

        .edit-body{
            padding: 35px;
        }

        .form-label{
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .form-control{
            height: 52px;
            border-radius: 14px;
            border: 1px solid #dbe3ef;
            padding-left: 16px;
            transition: .3s;
            box-shadow: none !important;
        }

        .form-control:focus{
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37,99,235,.12) !important;
        }

        .btn-save{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
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
            box-shadow: 0 8px 20px rgba(37,99,235,.25);
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

        @media(max-width: 768px){

            .edit-body{
                padding: 25px;
            }

        }

    </style>

</head>

<body>

<div class="p-4" id="main-content">

        <?php

        $sql = "SELECT * FROM keluarga WHERE id='".$_GET['id']."'";
        $rows = $kon->query($sql);
        $data = $rows->fetch_object();

        ?>

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="card edit-card">

                    <!-- Header -->
                    <div class="edit-header">

                        <div class="d-flex align-items-center gap-4 flex-wrap">

                            <div class="header-icon">
                                <i class="bi bi-pencil-square"></i>
                            </div>

                            <div>
                                <h3>Edit Data Kartu Keluarga</h3>
                                <p>
                                    Perbarui informasi kartu keluarga dengan lengkap
                                </p>
                            </div>

                        </div>

                    </div>

                    <!-- Body -->
                    <div class="edit-body">

                        <form action="edit_keluarga.php" method="POST">

                            <input type="hidden" 
                                   name="id" 
                                   value="<?php echo $data->id ?>">

                            <div class="row">

                                <div class="col-md-12 mb-4">
                                    <label class="form-label">
                                        Nomor Kartu Keluarga
                                    </label>

                                    <input type="text"
                                           name="no_kk"
                                           class="form-control"
                                           value="<?php echo $data->no_kk ?>"
                                           required>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label class="form-label">
                                        Kepala Keluarga
                                    </label>

                                    <input type="text"
                                           name="kk"
                                           class="form-control"
                                           value="<?php echo $data->kk ?>"
                                           required>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label class="form-label">
                                        Alamat
                                    </label>

                                    <input type="text"
                                           name="alamat"
                                           class="form-control"
                                           value="<?php echo $data->alamat ?>"
                                           required>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label class="form-label">
                                        Kecamatan
                                    </label>

                                    <input type="text"
                                           name="kec"
                                           class="form-control"
                                           value="<?php echo $data->kec ?>"
                                           required>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label class="form-label">
                                        Kabupaten
                                    </label>

                                    <input type="text"
                                           name="kab"
                                           class="form-control"
                                           value="<?php echo $data->kab ?>"
                                           required>
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label class="form-label">
                                        Provinsi
                                    </label>

                                    <input type="text"
                                           name="prov"
                                           class="form-control"
                                           value="<?php echo $data->prov ?>"
                                           required>
                                </div>

                            </div>

                            <!-- Button -->
                            <div class="d-flex gap-3 mt-3">

                                <button type="submit"
                                        name="submit"
                                        class="btn-save">

                                    <i class="bi bi-check-circle me-2"></i>
                                    Simpan Perubahan

                                </button>

                                <a href="keluarga.php" class="btn-cancel">

                                    <i class="bi bi-arrow-left me-2"></i>
                                    Batal

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