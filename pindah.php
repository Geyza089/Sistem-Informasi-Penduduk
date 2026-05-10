<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Pindah Penduduk</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
.page-title{
    font-size: 30px;
    font-weight: 700;
    color: #0f172a;
}

.page-subtitle{
    color: #64748b;
    font-size: 14px;
}

/* INFO CARD */
.info-card{
    border: none;
    border-radius: 22px;
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    color: white;
    box-shadow: 0 10px 30px rgba(37,99,235,.2);
}

/* MAIN CARD */
.main-card{
    border: none;
    border-radius: 24px;
    background: rgba(255,255,255,.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 35px rgba(0,0,0,.07);
}

/* BUTTON TAMBAH */
.btn-add{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    border: none;
    color: white;
    padding: 12px 20px;
    border-radius: 14px;
    font-weight: 600;
    transition: .3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
}

.btn-add:hover{
    transform: translateY(-2px);
    color: white;
    box-shadow: 0 8px 20px rgba(37,99,235,.25);
}

/* SEARCH */
.search-box{
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #dbe4ee;
}

.search-box input{
    border: none;
    padding: 12px;
}

.search-box input:focus{
    box-shadow: none;
}

.search-box button{
    border: none;
    background: #2563eb;
    color: white;
    padding: 0 18px;
}

/* TABLE */
.table{
    border-collapse: separate;
    border-spacing: 0 12px;
    min-width: 850px;
}

.table thead th{
    background: #2563eb;
    color: white;
    border: none;
    padding: 16px;
    font-size: 14px;
    font-weight: 600;
}

.table thead th:first-child{
    border-top-left-radius: 14px;
    border-bottom-left-radius: 14px;
}

.table thead th:last-child{
    border-top-right-radius: 14px;
    border-bottom-right-radius: 14px;
}

.table tbody tr{
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,.04);
    transition: .3s;
}

.table tbody tr:hover{
    transform: translateY(-2px);
}

.table tbody td{
    padding: 16px;
    vertical-align: middle;
    border: none;
    font-size: 14px;
    color: #334155;
}

.table tbody td:first-child{
    border-top-left-radius: 14px;
    border-bottom-left-radius: 14px;
}

.table tbody td:last-child{
    border-top-right-radius: 14px;
    border-bottom-right-radius: 14px;
}

/* ACTION BUTTON */
.action-btn{
    width: 38px;
    height: 38px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: .3s;
    text-decoration: none;
}

.action-btn:hover{
    transform: scale(1.08);
    color: white;
}

.btn-detail{
    background: #2563eb;
}

.btn-edit{
    background: #10b981;
}

.btn-delete{
    background: #ef4444;
}

/* PAGINATION */
.pagination .page-link{
    border: none;
    margin: 0 4px;
    border-radius: 10px;
    color: #2563eb;
    font-weight: 600;
}

.pagination .page-link:hover{
    background: #2563eb;
    color: white;
}

.page-item.active .page-link{
    background: #2563eb;
    color: white;
}

/* MOBILE */
@media(max-width:768px){

    #main-content{
        padding: 16px !important;
    }

    .page-title{
        font-size: 24px;
    }

    .main-card .card-body{
        padding: 20px !important;
    }

    .btn-add{
        width: 100%;
        justify-content: center;
    }

    .search-box{
        width: 100%;
    }

    .table{
        min-width: 800px;
    }

    .pagination{
        flex-wrap: wrap;
        gap: 6px;
    }
}

</style>
</head>

<body>

<div class="p-4" id="main-content">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

        <div>
            <div class="page-title">
                Data Pindah Penduduk
            </div>

            <div class="page-subtitle">
                Sistem Pengolahan Data Perpindahan Penduduk
            </div>
        </div>

    </div>

    <!-- INFO CARD -->
    <div class="card info-card mb-4">

        <div class="card-body d-flex align-items-center gap-3">

            <i class="bi bi-truck fs-3"></i>

            <div>
                <div class="fw-bold">
                    Informasi Data
                </div>

                <small>
                    Menampilkan seluruh data perpindahan penduduk yang tersedia pada sistem.
                </small>
            </div>

        </div>

    </div>

    <!-- MAIN CARD -->
    <div class="card main-card">

        <div class="card-body p-4">

            <!-- TOP ACTION -->
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

                <a href="tambah_pindah.php" class="btn-add">
                    <i class="bi bi-plus-circle-fill me-2"></i>
                    Tambah Data
                </a>

                <form action="" method="GET">

                    <div class="input-group search-box">

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Cari nama penduduk..."
                            name="cari"
                        >

                        <button type="submit">
                            <i class="bi bi-search"></i>
                        </button>

                    </div>

                </form>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Kota Tujuan</th>
                            <th class="text-center">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $batas = 5;
                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $dataCount = mysqli_query($kon,"SELECT * FROM pindah");
                    $total = mysqli_num_rows($dataCount);
                    $pages = ceil($total / $batas);

                    $no = $awal + 1;

                    if(isset($_GET['cari'])){

                        $cari = $_GET['cari'];

                        $data = mysqli_query($kon,
                            "SELECT * FROM pindah
                             WHERE nama LIKE '%$cari%'");

                    } else {

                        $data = mysqli_query($kon,
                            "SELECT * FROM pindah
                             LIMIT $awal,$batas");
                    }

                    while($d = mysqli_fetch_array($data)){
                    ?>

                    <tr>

                        <td><?= $no++ ?></td>

                        <td>
                            <div class="fw-semibold">
                                <?= $d['nama'] ?>
                            </div>
                        </td>

                        <td><?= $d['nik'] ?></td>

                        <td><?= $d['alamat'] ?></td>

                        <td><?= $d['tujuan'] ?></td>

                        <td class="text-center">

                            <div class="d-flex justify-content-center gap-2">

                                <a href="detail_pindah.php?id=<?= $d['id'] ?>"
                                   class="action-btn btn-detail">

                                    <i class="bi bi-eye-fill"></i>

                                </a>

                                <a href="form_edit_pindah.php?id=<?= $d['id'] ?>"
                                   class="action-btn btn-edit">

                                    <i class="bi bi-pencil-fill"></i>

                                </a>

                                <a href="delete_pindah.php?id=<?= $d['id'] ?>"
                                   class="action-btn btn-delete alert_notif">

                                    <i class="bi bi-trash-fill"></i>

                                </a>

                            </div>

                        </td>

                    </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

            <!-- PAGINATION -->
            <nav class="mt-4">

                <ul class="pagination justify-content-center flex-wrap">

                    <li class="page-item">

                        <a class="page-link"
                        <?php if($halaman > 1){ ?>
                            href="?halaman=<?= $previous ?>"
                        <?php } ?>>

                            Previous

                        </a>

                    </li>

                    <?php for($i=1; $i<=$pages; $i++){ ?>

                    <li class="page-item <?= ($i == $halaman ? 'active' : '') ?>">

                        <a class="page-link"
                           href="?halaman=<?= $i ?>">

                            <?= $i ?>

                        </a>

                    </li>

                    <?php } ?>

                    <li class="page-item">

                        <a class="page-link"
                        <?php if($halaman < $pages){ ?>
                            href="?halaman=<?= $next ?>"
                        <?php } ?>>

                            Next

                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </div>

</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- SUCCESS ALERT -->
<?php if(@$_SESSION['sukses']){ ?>

<script>

Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: 'Data berhasil disimpan',
    timer: 2500,
    showConfirmButton: false
});

</script>

<?php unset($_SESSION['sukses']); } ?>

<!-- DELETE ALERT -->
<?php if(@$_SESSION['suksesDel']){ ?>

<script>

Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: 'Data berhasil dihapus',
    timer: 2500,
    showConfirmButton: false
});

</script>

<?php unset($_SESSION['suksesDel']); } ?>

<!-- DELETE CONFIRM -->
<script>

$('.alert_notif').on('click', function(){

    var getLink = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data?',
        text: "Data yang dihapus tidak dapat dikembalikan.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#64748b',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {

        if(result.isConfirmed){
            window.location.href = getLink;
        }

    });

    return false;

});

</script>

</body>
</html>