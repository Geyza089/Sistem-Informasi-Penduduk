<?php
include "sidebar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Pendatang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

/* HEADER */
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
.card-modern{
    border: none;
    border-radius: 22px;
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}

/* TABLE */
.table thead{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    color: #fff;
}

.table thead th{
    font-weight: 600;
    font-size: 14px;
}

.table tbody tr{
    transition: .2s;
}

.table tbody tr:hover{
    background: #f1f7ff;
}

/* BUTTON */
.btn-primary{
    background: linear-gradient(135deg, #2563eb, #3b82f6);
    border: none;
    border-radius: 14px;
    font-weight: 600;
}

.btn-primary:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(37,99,235,.25);
}

.btn-sm{
    border-radius: 10px;
}

/* INPUT */
.search-box{
    border-radius: 14px;
    padding: 10px;
}

/* PAGINATION */
.page-item.active .page-link{
    background: #2563eb;
    border-color: #2563eb;
}
.page-link{
    border-radius: 10px !important;
    margin: 0 3px;
}
</style>
</head>

<body>

<div class="p-4" id="main-content">

<!-- HEADER -->
<div class="d-flex align-items-center justify-content-between mb-4">

    <div class="text-center flex-grow-1">
        <div class="page-title">Data Pendatang</div>
        <div class="subtitle">Manajemen data pendatang sistem kependudukan</div>
    </div>

</div>

<!-- INFO -->
<div class="card card-modern mb-3">
    <div class="card-body d-flex align-items-center">
        <i class="bi bi-info-circle-fill text-primary fs-5"></i>
        <span class="ms-2">Menampilkan data pendatang yang terdaftar di sistem</span>
    </div>
</div>

<!-- ACTION -->
<div class="card card-modern mb-3">
<div class="card-body">
    <div class="row align-items-center">

        <div class="col-md-6 mb-2">
            <a href="tambah_pendatang.php" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i> Tambah Data
            </a>
        </div>

        <div class="col-md-6">
            <form method="GET">
                <div class="input-group">
                    <input type="text" name="cari" class="form-control search-box" placeholder="Cari nama pendatang...">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>

<!-- TABLE -->
<div class="card card-modern">
<div class="card-body table-responsive">

<table class="table table-hover align-middle text-center">
<thead>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>Kota Asal</th>
    <th>Alamat</th>
    <th>Keterangan</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php
$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$dataCount = mysqli_query($kon, "SELECT * FROM pendatang");
$total = mysqli_num_rows($dataCount);
$pages = ceil($total / $batas);

$no = $awal + 1;

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($kon,"SELECT * FROM pendatang WHERE nama LIKE '%$cari%'");
} else {
    $data = mysqli_query($kon,"SELECT * FROM pendatang LIMIT $awal,$batas");
}

while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['nik'] ?></td>
    <td><?= $d['asal'] ?></td>
    <td><?= $d['alamat'] ?></td>
    <td><?= $d['status'] ?></td>
    <td class="d-flex justify-content-center gap-1">

        <a href="detail_pendatang.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-info text-white">
            <i class="bi bi-eye"></i>
        </a>

        <a href="form_edit_pendatang.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-success">
            <i class="bi bi-pencil"></i>
        </a>

        <a href="delete_pendatang.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-danger alert_notif">
            <i class="bi bi-trash"></i>
        </a>

    </td>
</tr>
<?php } ?>
</tbody>
</table>

</div>
</div>

<!-- PAGINATION -->
<div class="mt-4 d-flex justify-content-center">
<ul class="pagination">

<li class="page-item">
<a class="page-link" href="?halaman=<?= max(1,$halaman-1) ?>">Prev</a>
</li>

<?php for($i=1;$i<=$pages;$i++){ ?>
<li class="page-item <?= ($i==$halaman?'active':'') ?>">
<a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a>
</li>
<?php } ?>

<li class="page-item">
<a class="page-link" href="?halaman=<?= min($pages,$halaman+1) ?>">Next</a>
</li>

</ul>
</div>

</div>

</body>
</html>