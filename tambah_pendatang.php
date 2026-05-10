<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data Pendatang</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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

/* CARD */
.form-card{
    background: rgba(255,255,255,.95);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    overflow: hidden;
    border: none;
    box-shadow: 0 10px 35px rgba(0,0,0,.08);
}

/* HEADER */
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

.icon-box{
    width: 70px;
    height: 70px;
    border-radius: 18px;
    background: rgba(255,255,255,.18);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
}

/* BODY */
.form-body{
    padding: 35px;
}

/* INPUT */
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
    min-height: 110px;
    padding-top: 14px;
}

.form-control:focus,
.form-select:focus{
    border-color: #2563eb;
    box-shadow: 0 0 0 0.15rem rgba(37,99,235,.15);
    background: white;
}

/* ICON INPUT */
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
    background: #e2e8f0;
    color: #334155;
    border-radius: 14px;
    padding: 12px 30px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
}

.btn-cancel:hover{
    background: #cbd5e1;
    color: #0f172a;
}

@media(max-width:768px){

    .form-body{
        padding: 25px;
    }

    .btn-save,
    .btn-cancel{
        width: 100%;
        text-align: center;
    }
}

</style>
</head>

<body>

<div class="p-4" id="main-content">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="form-card">

                <!-- Header -->
                <div class="form-header d-flex align-items-center gap-4">

                    <div class="icon-box">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>

                    <div>
                        <h3>Tambah Data Pendatang</h3>
                        <p>
                            Lengkapi data pendatang dengan benar dan lengkap
                        </p>
                    </div>

                </div>

                <!-- Body -->
                <div class="form-body">

                    <form action="insert_pendatang.php" method="POST">

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <div class="input-icon">
                                    <i class="bi bi-person"></i>

                                    <input type="text"
                                           class="form-control"
                                           name="nama"
                                           placeholder="Masukkan nama lengkap"
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">
                                    Nomor Induk Kependudukan
                                </label>

                                <div class="input-icon">
                                    <i class="bi bi-credit-card-2-front"></i>

                                    <input type="text"
                                           class="form-control"
                                           name="nik"
                                           placeholder="Masukkan NIK"
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
                                           class="form-control"
                                           name="tempat"
                                           placeholder="Contoh: Bandung"
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
                                           class="form-control"
                                           name="tanggal"
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
                                           class="form-control"
                                           name="agama"
                                           placeholder="Masukkan agama"
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
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
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
                                           class="form-control"
                                           name="asal"
                                           placeholder="Masukkan kota asal"
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
                                        <option value="Menetap">Menetap</option>
                                        <option value="Kost">Kost</option>
                                        <option value="Sementara">Sementara</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">
                                    Alamat Lengkap
                                </label>

                                <textarea class="form-control"
                                          name="alamat"
                                          rows="4"
                                          placeholder="Masukkan alamat lengkap"
                                          required></textarea>
                            </div>

                        </div>

                        <!-- Button -->
                        <div class="d-flex flex-wrap gap-3 mt-3">

                            <button type="submit"
                                    name="submit"
                                    class="btn btn-save">

                                <i class="bi bi-check-circle-fill me-2"></i>
                                Simpan Data

                            </button>

                            <a href="pendatang.php"
                               class="btn btn-cancel">

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

</body>
</html>