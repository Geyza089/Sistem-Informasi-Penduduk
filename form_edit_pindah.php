<?php
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Pindah Penduduk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    font-family: 'Poppins', sans-serif;
}

body{
    background: linear-gradient(135deg, #eef4ff, #f8fbff);
    min-height: 100vh;
}

/* MAIN CONTENT */
#main-content{
    transition: .3s;
}

/* TOPBAR */
.topbar{
    background: white;
    padding: 18px 25px;
    border-radius: 22px;
    box-shadow: 0 4px 25px rgba(0,0,0,0.05);
    margin-bottom: 25px;
}

/* TITLE */
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

/* CARD */
.form-card{
    background: white;
    border: none;
    border-radius: 24px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.06);
    overflow: hidden;
}

/* HEADER CARD */
.form-header{
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
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

/* ICON */
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

/* BODY */
.form-body{
    padding: 35px;
}

/* LABEL */
.form-label{
    font-weight: 600;
    color: #334155;
    margin-bottom: 8px;
}

/* INPUT */
.form-control,
.form-select{
    border-radius: 14px;
    border: 1px solid #dbeafe;
    padding: 12px 15px;
    min-height: 50px;
    box-shadow: none;
    transition: .3s;
    font-size: 14px;
}

.form-control:focus,
.form-select:focus{
    border-color: #2563eb;
    box-shadow: 0 0 0 0.15rem rgba(37,99,235,0.15);
}

textarea.form-control{
    min-height: 110px;
    resize: none;
}

/* BUTTON */
.btn-save{
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
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

/* RESPONSIVE */
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
        text-align: center;
    }
}
</style>
</head>

<body>

<div class="p-4" id="main-content">

    <!-- TOPBAR -->
    <div class="topbar">

        <h3 class="page-title">
            Edit Data Pindah Penduduk
        </h3>

        <div class="subtitle">
            Perbarui informasi perpindahan penduduk
        </div>

    </div>

<?php 
$sql = "SELECT * FROM pindah WHERE id='".$_GET['id']."'";
$rows = $kon->query($sql);
$data = $rows->fetch_object();
?>

    <!-- FORM -->
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="form-card">

                <!-- HEADER -->
                <div class="form-header d-flex align-items-center gap-4">

                    <div class="icon-box">
                        <i class="bi bi-pencil-square"></i>
                    </div>

                    <div>
                        <h3>Form Edit Pindah Penduduk</h3>
                        <p>
                            Ubah data perpindahan penduduk sesuai kebutuhan.
                        </p>
                    </div>

                </div>

                <!-- BODY -->
                <div class="form-body">

                    <form action="edit_pindah.php" method="POST">

                        <input type="hidden"
                               name="id"
                               value="<?= $data->id ?>">

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="nama"
                                       value="<?= $data->nama ?>"
                                       required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Nomor Induk Kependudukan
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="nik"
                                       value="<?= $data->nik ?>"
                                       required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Tempat Lahir
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="tempat"
                                       value="<?= $data->tempat ?>"
                                       required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Tanggal Lahir
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="tanggal"
                                       value="<?= $data->tanggal ?>"
                                       required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Agama
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="agama"
                                       value="<?= $data->agama ?>"
                                       required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Jenis Kelamin
                                </label>

                                <select class="form-select" name="kelamin">

                                    <option value="Laki-laki"
                                        <?= ($data->kelamin == 'Laki-laki') ? 'selected' : ''; ?>>
                                        Laki-laki
                                    </option>

                                    <option value="Perempuan"
                                        <?= ($data->kelamin == 'Perempuan') ? 'selected' : ''; ?>>
                                        Perempuan
                                    </option>

                                </select>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Alamat Asal
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="alamat"
                                       value="<?= $data->alamat ?>"
                                       required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Kota Tujuan
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="tujuan"
                                       value="<?= $data->tujuan ?>"
                                       required>
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">
                                    Alasan Pindah
                                </label>

                                <textarea class="form-control"
                                          name="alasan"
                                          required><?= $data->alasan ?></textarea>
                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="d-flex flex-wrap gap-3 mt-3">

                            <button type="submit"
                                    name="submit"
                                    class="btn btn-save">

                                <i class="bi bi-save-fill me-2"></i>
                                Simpan Perubahan

                            </button>

                            <a href="pindah.php"
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

</body>
</html>