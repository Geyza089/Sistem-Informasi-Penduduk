<?php
include 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data Penduduk</title>

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

.page-header{
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

/* FORM CARD */

.form-card{
    background: rgba(255,255,255,.96);
    backdrop-filter: blur(10px);
    border-radius: 30px;
    border: none;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,.08);
}

/* HEADER CARD */

.form-header{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    padding: 28px 35px;
    color: white;
    position: relative;
}

.form-header::before{
    content: '';
    position: absolute;
    width: 180px;
    height: 180px;
    background: rgba(255,255,255,.08);
    border-radius: 50%;
    top: -70px;
    right: -70px;
}

.form-header-content{
    position: relative;
    z-index: 2;
}

.header-icon{
    width: 68px;
    height: 68px;
    border-radius: 20px;
    background: rgba(255,255,255,.18);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    flex-shrink: 0;
}

.form-header h4{
    font-weight: 700;
    margin-bottom: 4px;
}

.form-header p{
    margin: 0;
    opacity: .9;
    font-size: 14px;
}

/* BODY */

.form-body{
    padding: 35px;
}

/* SECTION */

.section-title{
    font-size: 15px;
    font-weight: 600;
    color: #2563eb;
    margin-bottom: 22px;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* FORM */

.form-label{
    font-weight: 600;
    color: #334155;
    margin-bottom: 8px;
    font-size: 14px;
}

.form-control,
.form-select{
    border-radius: 16px;
    border: 1px solid #dbe4ee;
    padding: 13px 16px;
    font-size: 14px;
    transition: .3s;
    box-shadow: none !important;
}

.form-control:focus,
.form-select:focus{
    border-color: #3b82f6;
    box-shadow: 0 0 0 4px rgba(59,130,246,.12) !important;
}

textarea.form-control{
    resize: none;
}

/* BUTTON */

.action-buttons{
    display: flex;
    gap: 14px;
    margin-top: 15px;
    flex-wrap: wrap;
}

.btn-save{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    border: none;
    color: white;
    padding: 13px 24px;
    border-radius: 16px;
    font-weight: 600;
    transition: .3s;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-save:hover{
    transform: translateY(-2px);
    color: white;
    box-shadow: 0 10px 25px rgba(37,99,235,.25);
}

.btn-back{
    background: #e2e8f0;
    color: #0f172a;
    padding: 13px 24px;
    border-radius: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: .3s;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-back:hover{
    background: #cbd5e1;
    color: #0f172a;
    transform: translateY(-2px);
}

/* INFO BOX */

.info-box{
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: white;
    border-radius: 20px;
    padding: 18px 22px;
    margin-bottom: 25px;
}

.info-box i{
    font-size: 24px;
}

/* RESPONSIVE */

@media(max-width: 768px){

    #main-content{
        padding: 15px !important;
    }

    .page-title{
        font-size: 24px;
    }

    .form-header{
        padding: 24px 20px;
    }

    .form-header-content{
        flex-direction: column;
        align-items: flex-start !important;
        gap: 16px !important;
    }

    .header-icon{
        width: 58px;
        height: 58px;
        font-size: 24px;
        border-radius: 16px;
    }

    .form-body{
        padding: 20px;
    }

    .action-buttons{
        flex-direction: column;
    }

    .btn-save,
    .btn-back{
        width: 100%;
        justify-content: center;
    }

}

</style>
</head>

<body>

<div class="p-4" id="main-content">

    <!-- PAGE HEADER -->
    <div class="page-header">

        <div class="page-title">
            Tambah Data Penduduk
        </div>

        <div class="page-subtitle">
            Lengkapi informasi data penduduk dengan benar dan valid
        </div>

    </div>

    <!-- INFO -->
    <div class="info-box d-flex align-items-center gap-3">

        <i class="bi bi-info-circle-fill"></i>

        <div>
            <strong>Informasi Formulir</strong><br>
            Pastikan seluruh data yang dimasukkan sesuai dengan identitas resmi penduduk.
        </div>

    </div>

    <!-- FORM -->
    <div class="row justify-content-center">

        <div class="col-xl-9 col-lg-10">

            <div class="form-card">

                <!-- HEADER -->
                <div class="form-header">

                    <div class="d-flex align-items-center gap-4 form-header-content">

                        <div class="header-icon">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>

                        <div>
                            <h4>Form Data Penduduk</h4>
                            <p>Masukkan data penduduk secara lengkap</p>
                        </div>

                    </div>

                </div>

                <!-- BODY -->
                <div class="form-body">

                    <div class="section-title">
                        <i class="bi bi-person-vcard-fill"></i>
                        Informasi Penduduk
                    </div>

                    <form action="insert.php" method="POST">

                        <div class="row">

                            <!-- Nama -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama"
                                    placeholder="Masukkan nama lengkap"
                                    required
                                >

                            </div>

                            <!-- NIK -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Nomor Induk Kependudukan
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="nik"
                                    placeholder="Masukkan NIK"
                                    required
                                >

                            </div>

                            <!-- Tempat -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Tempat Lahir
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="tempat"
                                    placeholder="Contoh: Serang"
                                    required
                                >

                            </div>

                            <!-- Tanggal -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Tanggal Lahir
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    name="tanggal"
                                    required
                                >

                            </div>

                            <!-- Gender -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Jenis Kelamin
                                </label>

                                <select class="form-select" name="jenis">

                                    <option value="Laki-laki">
                                        Laki-laki
                                    </option>

                                    <option value="Perempuan">
                                        Perempuan
                                    </option>

                                </select>

                            </div>

                            <!-- Agama -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Agama
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="agama"
                                    placeholder="Masukkan agama"
                                    required
                                >

                            </div>

                            <!-- Alamat -->
                            <div class="col-12 mb-3">

                                <label class="form-label">
                                    Alamat
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="4"
                                    name="alamat"
                                    placeholder="Masukkan alamat lengkap"
                                    required
                                ></textarea>

                            </div>

                            <!-- Status -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Status
                                </label>

                                <select class="form-select" name="status">

                                    <option value="Menikah">
                                        Menikah
                                    </option>

                                    <option value="Belum Menikah">
                                        Belum Menikah
                                    </option>

                                </select>

                            </div>

                            <!-- Pekerjaan -->
                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Pekerjaan
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    name="pekerjaan"
                                    placeholder="Masukkan pekerjaan"
                                    required
                                >

                            </div>

                            <!-- Kewarganegaraan -->
                            <div class="col-md-6 mb-2">

                                <label class="form-label">
                                    Kewarganegaraan
                                </label>

                                <select class="form-select" name="warga">

                                    <option value="WNI">
                                        WNI
                                    </option>

                                    <option value="WNA">
                                        WNA
                                    </option>

                                </select>

                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="action-buttons">

                            <button type="submit" name="submit" class="btn-save">

                                <i class="bi bi-save2-fill"></i>
                                Simpan Data

                            </button>

                            <a href="penduduk.php" class="btn-back">

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

</body>
</html>