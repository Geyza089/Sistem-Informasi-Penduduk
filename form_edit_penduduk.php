<?php
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penduduk</title>

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
        }

        #main-content{
            transition: .3s;
        }

        .form-card{
            border: none;
            border-radius: 28px;
            overflow: hidden;
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 40px rgba(0,0,0,.08);
        }

        .form-header{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            padding: 35px;
            color: white;
        }

        .form-header h3{
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-header p{
            margin: 0;
            opacity: .9;
            font-size: 14px;
        }

        .header-icon{
            width: 75px;
            height: 75px;
            border-radius: 22px;
            background: rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
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
            padding: 13px 15px;
            border: 1px solid #dbe4ee;
            transition: .3s;
            font-size: 14px;
        }

        .form-control:focus,
        .form-select:focus{
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
            text-decoration: none;
            transition: .3s;
        }

        .btn-cancel:hover{
            background: #cbd5e1;
            color: #0f172a;
        }

        @media(max-width: 768px){

            .form-body{
                padding: 25px;
            }

        }

    </style>
</head>

<body>

<div class="p-4" id="main-content">

        <?php

        $sql = "SELECT * FROM penduduk WHERE id='".$_GET['id']."'";
        $rows = $kon->query($sql);
        $data = $rows->fetch_object();

        ?>

        <!-- Card -->
        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card form-card">

                    <!-- Header -->
                    <div class="form-header">

                        <div class="d-flex align-items-center gap-4 flex-wrap">

                            <div class="header-icon">
                                <i class="bi bi-pencil-square"></i>
                            </div>

                            <div>
                                <h3>Edit Data Penduduk</h3>

                                <p>
                                    Perbarui informasi data penduduk dengan benar
                                </p>
                            </div>

                        </div>

                    </div>

                    <!-- Body -->
                    <div class="form-body">

                        <form action="edit_penduduk.php" method="POST">

                            <input 
                                type="hidden"
                                name="id"
                                value="<?php echo $data->id ?>"
                            >

                            <div class="row">

                                <!-- Nama -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Nama Lengkap
                                    </label>

                                    <input 
                                        type="text"
                                        name="nama"
                                        class="form-control"
                                        value="<?php echo $data->nama ?>"
                                        required
                                    >

                                </div>

                                <!-- NIK -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        NIK
                                    </label>

                                    <input 
                                        type="text"
                                        name="nik"
                                        class="form-control"
                                        value="<?php echo $data->nik ?>"
                                        required
                                    >

                                </div>

                                <!-- Tempat -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Tempat Lahir
                                    </label>

                                    <input 
                                        type="text"
                                        name="tempat"
                                        class="form-control"
                                        value="<?php echo $data->tempat ?>"
                                        required
                                    >

                                </div>

                                <!-- Tanggal -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Tanggal Lahir
                                    </label>

                                    <input 
                                        type="date"
                                        name="tanggal"
                                        class="form-control"
                                        value="<?php echo $data->ttl ?>"
                                        required
                                    >

                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Jenis Kelamin
                                    </label>

                                    <select class="form-select" name="jenis">

                                        <option value="Laki-laki"
                                            <?php if($data->jenis_kelamin=="Laki-laki"){ echo "selected"; } ?>>
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan"
                                            <?php if($data->jenis_kelamin=="Perempuan"){ echo "selected"; } ?>>
                                            Perempuan
                                        </option>

                                    </select>

                                </div>

                                <!-- Status -->
                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Status
                                    </label>

                                    <select class="form-select" name="status">

                                        <option value="Menikah"
                                            <?php if($data->status=="Menikah"){ echo "selected"; } ?>>
                                            Menikah
                                        </option>

                                        <option value="Belum Menikah"
                                            <?php if($data->status=="Belum Menikah"){ echo "selected"; } ?>>
                                            Belum Menikah
                                        </option>

                                    </select>

                                </div>

                                <!-- Alamat -->
                                <div class="col-12 mb-4">

                                    <label class="form-label">
                                        Alamat
                                    </label>

                                    <textarea 
                                        name="alamat"
                                        rows="3"
                                        class="form-control"
                                        required
                                    ><?php echo $data->alamat ?></textarea>

                                </div>

                                <!-- Agama -->
                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Agama
                                    </label>

                                    <input 
                                        type="text"
                                        name="agama"
                                        class="form-control"
                                        value="<?php echo $data->agama ?>"
                                        required
                                    >

                                </div>

                                <!-- Pekerjaan -->
                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Pekerjaan
                                    </label>

                                    <input 
                                        type="text"
                                        name="pekerjaan"
                                        class="form-control"
                                        value="<?php echo $data->pekerjaan ?>"
                                        required
                                    >

                                </div>

                                <!-- Kewarganegaraan -->
                                <div class="col-md-4 mb-4">

                                    <label class="form-label">
                                        Kewarganegaraan
                                    </label>

                                    <select class="form-select" name="kewarganegaraan">

                                        <option value="WNI"
                                            <?php if($data->kewarganegaraan=="WNI"){ echo "selected"; } ?>>
                                            WNI
                                        </option>

                                        <option value="WNA"
                                            <?php if($data->kewarganegaraan=="WNA"){ echo "selected"; } ?>>
                                            WNA
                                        </option>

                                    </select>

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
                                    Simpan Perubahan
                                </button>

                                <a href="penduduk.php" class="btn-cancel">
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