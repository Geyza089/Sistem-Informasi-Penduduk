<?php
include 'sidebar.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Pendatang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
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

/* HEADER */
.page-title{
    font-size: 28px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 5px;
}

.subtitle{
    font-size: 14px;
    color: #64748b;
}

/* CARD */
.edit-card{
    border: none;
    border-radius: 28px;
    overflow: hidden;
    background: rgba(255,255,255,.96);
    backdrop-filter: blur(10px);
    box-shadow: 0 15px 40px rgba(0,0,0,.08);
}

/* CARD HEADER */
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

/* BODY */
.edit-body{
    padding: 35px;
}

/* FORM */
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
    box-shadow: none;
}

textarea.form-control{
    height: auto;
    padding-top: 14px;
}

.form-control:focus,
.form-select:focus{
    border-color: #2563eb;
    box-shadow: 0 0 0 0.15rem rgba(37,99,235,.15);
    background: white;
}

/* INPUT ICON */
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

/* BUTTON */
.btn-save{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
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
    text-decoration: none;
    transition: .3s;
}

.btn-cancel:hover{
    background: #f8fafc;
    color: #0f172a;
}

/* RESPONSIVE */
@media(max-width:768px){

    .edit-body{
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

    <!-- HEADER -->
    <div class="mb-4">

        <div class="page-title">
            Edit Data Pendatang
        </div>

        <div class="subtitle">
            Perbarui informasi data pendatang
        </div>

    </div>

    <?php 
    $sql = "SELECT * FROM pendatang WHERE id='".$_GET['id']."'";
    $rows = $kon->query($sql);
    $data = $rows->fetch_object();
    ?>

    <!-- FORM -->
    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card edit-card">

                <!-- HEADER CARD -->
                <div class="edit-header">

                    <div class="d-flex align-items-center gap-4 flex-wrap">

                        <div class="header-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>

                        <div>
                            <h3>Edit Data Pendatang</h3>

                            <p>
                                Perbarui data pendatang dengan lengkap dan benar
                            </p>
                        </div>

                    </div>

                </div>

                <!-- BODY -->
                <div class="edit-body">

                    <form action="edit_pendatang.php" method="POST">

                        <input type="hidden"
                               name="id"
                               value="<?= $data->id ?>">

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Nama
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-person"></i>

                                    <input type="text"
                                           name="nama"
                                           class="form-control"
                                           value="<?= $data->nama ?>"
                                           required>

                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    NIK
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-credit-card-2-front"></i>

                                    <input type="text"
                                           name="nik"
                                           class="form-control"
                                           value="<?= $data->nik ?>"
                                           required>

                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tempat Lahir
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-geo-alt"></i>

                                    <input type="text"
                                           name="tempat"
                                           class="form-control"
                                           value="<?= $data->tempat ?>"
                                           required>

                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tanggal Lahir
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-calendar-event"></i>

                                    <input type="date"
                                           name="tanggal"
                                           class="form-control"
                                           value="<?= $data->tanggal ?>"
                                           required>

                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Agama
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-bookmark"></i>

                                    <input type="text"
                                           name="agama"
                                           class="form-control"
                                           value="<?= $data->agama ?>"
                                           required>

                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Jenis Kelamin
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-gender-ambiguous"></i>

                                    <select class="form-select" name="kelamin">

                                        <option value="Laki-laki"
                                            <?= ($data->kelamin == 'Laki-laki') ? 'selected' : '' ?>>
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan"
                                            <?= ($data->kelamin == 'Perempuan') ? 'selected' : '' ?>>
                                            Perempuan
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Kota Asal
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-building"></i>

                                    <input type="text"
                                           name="asal"
                                           class="form-control"
                                           value="<?= $data->asal ?>"
                                           required>

                                </div>

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Keterangan
                                </label>

                                <div class="input-icon">

                                    <i class="bi bi-info-circle"></i>

                                    <select class="form-select" name="status">

                                        <option value="Menetap"
                                            <?= ($data->status == 'Menetap') ? 'selected' : '' ?>>
                                            Menetap
                                        </option>

                                        <option value="Kost"
                                            <?= ($data->status == 'Kost') ? 'selected' : '' ?>>
                                            Kost
                                        </option>

                                        <option value="Sementara"
                                            <?= ($data->status == 'Sementara') ? 'selected' : '' ?>>
                                            Sementara
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-12 mb-4">

                                <label class="form-label">
                                    Alamat
                                </label>

                                <textarea name="alamat"
                                          class="form-control"
                                          rows="4"
                                          required><?= $data->alamat ?></textarea>

                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="d-flex gap-3 mt-3">

                            <button type="submit"
                                    class="btn btn-save">

                                <i class="bi bi-check-circle-fill me-2"></i>
                                Simpan Perubahan

                            </button>

                            <a href="pendatang.php"
                               class="btn btn-cancel">

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

</body>
</html>