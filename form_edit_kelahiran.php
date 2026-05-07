<?php
include 'sidebar.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kelahiran</title>

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

        .form-card{
            border: none;
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }

        .card-header-custom{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            padding: 28px;
            color: white;
        }

        .card-header-custom h4{
            margin: 0;
            font-weight: 700;
        }

        .card-header-custom p{
            margin-top: 6px;
            margin-bottom: 0;
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
        }
    </style>
</head>
<body>

<div class="p-4" id="main-content">

    <?php 
    $sql = "SELECT * FROM kelahiran WHERE id='".$_GET['id']."'";
    $rows = $kon->query($sql);
    $data = $rows->fetch_object();
    ?>
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card form-card">

                    <!-- Header -->
                    <div class="card-header-custom">
                        <h4>
                            <i class="bi bi-pencil-square me-2"></i>
                            Edit Data Kelahiran
                        </h4>
                        <p>Perbarui informasi data kelahiran penduduk</p>
                    </div>

                    <!-- Form -->
                    <div class="form-body">

                        <form action="edit_kelahiran.php" method="POST">

                            <div class="mb-4">
                                <label class="form-label">Nama Anak</label>
                                <div class="input-icon">
                                    <i class="bi bi-person"></i>
                                    <input type="text" 
                                           name="nama" 
                                           class="form-control" 
                                           value="<?php echo $data->nama ?>" 
                                           required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="input-icon">
                                    <i class="bi bi-calendar-event"></i>
                                    <input type="date" 
                                           name="tanggal" 
                                           class="form-control" 
                                           value="<?php echo $data->tanggal ?>" 
                                           required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="input-icon">
                                    <i class="bi bi-gender-ambiguous"></i>

                                    <select class="form-select" name="kelamin">

                                        <option value="Laki-laki"
                                            <?php if($data->kelamin=="Laki-laki"){ echo "selected"; } ?>>
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan"
                                            <?php if($data->kelamin=="Perempuan"){ echo "selected"; } ?>>
                                            Perempuan
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Nama Ayah</label>
                                <div class="input-icon">
                                    <i class="bi bi-person-badge"></i>
                                    <input type="text" 
                                           name="ayah" 
                                           class="form-control" 
                                           value="<?php echo $data->ayah ?>" 
                                           required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Nama Ibu</label>
                                <div class="input-icon">
                                    <i class="bi bi-person-heart"></i>
                                    <input type="text" 
                                           name="ibu" 
                                           class="form-control" 
                                           value="<?php echo $data->ibu ?>" 
                                           required>
                                </div>
                            </div>

                            <!-- Hidden ID -->
                            <input type="hidden" 
                                   name="id" 
                                   value="<?php echo $data->id ?>">

                            <!-- Button -->
                            <div class="d-flex gap-3 mt-4">
                                <button type="submit" name="submit" class="btn btn-save">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    Simpan Perubahan
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

</div>


</body>
</html>