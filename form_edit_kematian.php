<?php
include 'sidebar.php';
include 'connection.php';

$id = mysqli_real_escape_string($kon, $_GET['id']);
$sql = "SELECT * FROM kematian WHERE id='$id'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kematian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background: linear-gradient(135deg, #e0f2fe, #f8fafc);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .main-card{
            border: none;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .card-header-custom{
            background: linear-gradient(135deg, #198754, #157347);
            padding: 20px;
        }

        .card-header-custom h4{
            margin: 0;
            color: white;
            font-weight: 600;
        }

        .form-control,
        .form-select{
            border-radius: 12px;
            padding: 12px;
            border: 1px solid #dbe2ea;
        }

        .form-control:focus,
        .form-select:focus{
            box-shadow: 0 0 0 0.15rem rgba(13,110,253,.15);
            border-color: #86b7fe;
        }

        .label-title{
            font-weight: 600;
            color: #0d6efd;
            vertical-align: middle;
        }

        .table td{
            padding: 16px;
            vertical-align: middle;
        }

        .btn-modern{
            border-radius: 12px;
            padding: 10px 24px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-modern:hover{
            transform: translateY(-2px);
        }

        .edit-icon{
            width: 55px;
            height: 55px;
            background: rgba(255,255,255,0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .top-button{
            border-radius: 12px;
            padding: 10px 15px;
        }

        .main-card{
            transition: 0.3s;
        }

        .main-card:hover{
            transform: translateY(-3px);
        }
    </style>
</head>

<body>

<div class="p-4" id="main-content">
        <div class="card main-card">

            <div class="card-header card-header-custom d-flex align-items-center">

                <div class="edit-icon me-3">
                    <i class="bi bi-pencil-square"></i>
                </div>

                <div>
                    <h4>Edit Data Kematian</h4>
                    <small class="text-white">
                        Silakan ubah data sesuai kebutuhan
                    </small>
                </div>

            </div>

            <div class="card-body p-4">

                <form action="edit_kematian.php" method="POST">

                    <div class="table-responsive">

                        <table class="table align-middle">

                            <tr>
                                <td class="label-title" width="25%">
                                    <i class="bi bi-person-fill me-2"></i>Nama
                                </td>
                                <td width="2%">:</td>
                                <td>
                                    <input type="text"
                                           name="nama"
                                           class="form-control"
                                           value="<?php echo $data->nama ?>"
                                           required>
                                </td>
                            </tr>

                            <tr>
                                <td class="label-title">
                                    <i class="bi bi-credit-card-2-front-fill me-2"></i>NIK
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text"
                                           name="nik"
                                           class="form-control"
                                           value="<?php echo $data->nik ?>"
                                           required>
                                </td>
                            </tr>

                            <tr>
                                <td class="label-title">
                                    <i class="bi bi-geo-alt-fill me-2"></i>Tempat / Tanggal Lahir
                                </td>
                                <td>:</td>
                                <td>

                                    <div class="row">

                                        <div class="col-md-6 mb-2">
                                            <input type="text"
                                                   name="tempat"
                                                   class="form-control"
                                                   placeholder="Tempat lahir"
                                                   value="<?php echo $data->tempat ?>"
                                                   required>
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <input type="date"
                                                   name="tanggal"
                                                   class="form-control"
                                                   value="<?php echo $data->tanggal ?>"
                                                   required>
                                        </div>

                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td class="label-title">
                                    <i class="bi bi-bookmark-fill me-2"></i>Agama
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text"
                                           name="agama"
                                           class="form-control"
                                           value="<?php echo $data->agama ?>"
                                           required>
                                </td>
                            </tr>

                            <tr>
                                <td class="label-title">
                                    <i class="bi bi-gender-ambiguous me-2"></i>Jenis Kelamin
                                </td>
                                <td>:</td>
                                <td>

                                    <select class="form-select" name="kelamin">

                                        <option value="Laki-laki"
                                            <?php echo ($data->kelamin == 'Laki-laki') ? 'selected' : ''; ?>>
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan"
                                            <?php echo ($data->kelamin == 'Perempuan') ? 'selected' : ''; ?>>
                                            Perempuan
                                        </option>

                                    </select>

                                </td>
                            </tr>

                            <tr>
                                <td class="label-title">
                                    <i class="bi bi-calendar-x-fill me-2"></i>Tanggal Wafat
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="date"
                                           name="wafat"
                                           class="form-control"
                                           value="<?php echo $data->wafat ?>"
                                           required>
                                </td>
                            </tr>

                            <tr>
                                <td class="label-title">
                                    <i class="bi bi-heartbreak-fill me-2"></i>Sebab Kematian
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="text"
                                           name="sebab"
                                           class="form-control"
                                           value="<?php echo $data->sebab ?>"
                                           required>
                                </td>
                            </tr>

                        </table>

                    </div>

                    <input type="hidden"
                           name="id"
                           value="<?php echo $data->id ?>">

                    <div class="mt-4 d-flex gap-2">

                        <button type="submit"
                                name="submit"
                                class="btn btn-success btn-modern shadow-sm">

                            <i class="bi bi-save me-2"></i>
                            Simpan

                        </button>

                        <a href="kematian.php"
                           class="btn btn-secondary btn-modern shadow-sm">

                            <i class="bi bi-arrow-left-circle me-2"></i>
                            Batal

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>