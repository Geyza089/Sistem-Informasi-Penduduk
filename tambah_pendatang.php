<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data Pendatang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    font-family: 'Poppins', sans-serif;
}

body{
    background: linear-gradient(135deg, #e0f2ff, #f7fbff);
    min-height: 100vh;
}

/* TITLE */
.page-title{
    font-size: 26px;
    font-weight: 700;
    color: #1e293b;
}

.subtitle{
    font-size: 13px;
    color: #64748b;
}

/* CARD */
.form-card{
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(10px);
    border-radius: 22px;
    padding: 35px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    border: 1px solid rgba(255,255,255,0.4);
}

/* INPUT */
.form-label{
    font-weight: 600;
    color: #334155;
}

.form-control,
.form-select{
    border-radius: 14px;
    padding: 12px;
    font-size: 14px;
    border: 1px solid #dbe4ee;
}

.form-control:focus,
.form-select:focus{
    border-color: #2563eb;
    box-shadow: 0 0 0 0.15rem rgba(37,99,235,.15);
}

/* BUTTON */
.btn-primary{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    border: none;
    border-radius: 14px;
    font-weight: 600;
    padding: 12px 20px;
}

.btn-primary:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(37,99,235,.25);
}

.btn-secondary{
    border-radius: 14px;
    padding: 12px 20px;
}

.section-title{
    font-size: 15px;
    font-weight: 600;
    color: #2563eb;
    margin-bottom: 20px;
}
</style>
</head>

<body>

<div class="p-4" id="main-content">

<!-- HEADER -->
<div class="d-flex align-items-center mb-4">
    <div>
        <div class="page-title">Tambah Data Pendatang</div>
        <div class="subtitle">Isi data pendatang dengan lengkap dan benar</div>
    </div>

</div>

<!-- FORM -->
<div class="row justify-content-center">
<div class="col-lg-8">

<div class="form-card">

    <div class="section-title">
        <i class="bi bi-person-plus-fill"></i>
        Formulir Pendatang
    </div>

    <form action="insert_pendatang.php" method="POST">

        <div class="row">

            <div class="col-md-6 mb-3">
                <label class="form-label">Nama</label>
                <input class="form-control" type="text" name="nama" placeholder="Masukkan nama" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">NIK</label>
                <input class="form-control" type="text" name="nik" placeholder="Masukkan NIK" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input class="form-control" type="text" name="tempat" placeholder="Contoh: Bandung" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Agama</label>
                <input class="form-control" type="text" name="agama" placeholder="Agama" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Kota Asal</label>
                <input class="form-control" type="text" name="asal" placeholder="Asal kota" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Keterangan</label>
                <select class="form-select" name="status">
                    <option value="Menetap">Menetap</option>
                    <option value="Kost">Kost</option>
                    <option value="Sementara">Sementara</option>
                </select>
            </div>

            <div class="col-12 mb-4">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>

        </div>

        <div class="d-flex gap-3">
            <button type="submit" name="submit" class="btn btn-primary">
                <i class="bi bi-save me-1"></i> Simpan
            </button>

            <a href="pendatang.php" class="btn btn-secondary">
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