<?php
include "sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kematian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body{
            background: linear-gradient(135deg, #eef4ff, #f8fbff);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        #main-content{
            transition: .3s;
        }

        .topbar{
            background: white;
            padding: 18px 25px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }

        .page-title{
            font-size: 28px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .subtitle{
            color: #64748b;
            font-size: 14px;
        }

        .main-card{
            background: white;
            border: none;
            border-radius: 22px;
            padding: 25px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.06);
        }

        .table{
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        .table thead tr th{
            background: #2563eb;
            color: white;
            border: none;
            padding: 16px;
            font-size: 14px;
            text-align: center;
            vertical-align: middle;
        }

        .table thead tr th:first-child{
            border-radius: 12px 0 0 12px;
        }

        .table thead tr th:last-child{
            border-radius: 0 12px 12px 0;
        }

        .table tbody tr{
            background: #ffffff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        }

        .table tbody td{
            padding: 16px;
            vertical-align: middle;
            border-top: none;
            border-bottom: none;
        }

        .table tbody tr td:first-child{
            border-radius: 12px 0 0 12px;
        }

        .table tbody tr td:last-child{
            border-radius: 0 12px 12px 0;
        }

        .btn-add{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            color: white;
            border-radius: 12px;
            padding: 12px 18px;
            font-weight: 600;
        }

        .btn-add:hover{
            color: white;
            transform: translateY(-2px);
            transition: .3s;
        }

        .search-box{
            position: relative;
        }

        .search-box input{
            border-radius: 12px;
            padding-left: 42px;
            height: 48px;
            border: 1px solid #dbeafe;
            box-shadow: none;
        }

        .search-box i{
            position: absolute;
            top: 13px;
            left: 15px;
            color: #94a3b8;
        }

        .action-btn{
            width: 38px;
            height: 38px;
            border-radius: 10px;
            border: none;
            color: white;
        }

        .btn-detail{
            background: #3b82f6;
        }

        .btn-edit{
            background: #10b981;
        }

        .btn-delete{
            background: #ef4444;
        }

        .pagination .page-link{
            border: none;
            margin: 0 4px;
            border-radius: 10px !important;
            color: #2563eb;
            font-weight: 600;
        }

        .pagination .page-link:hover{
            background: #2563eb;
            color: white;
        }

        .info-box{
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            border-radius: 18px;
            padding: 18px 22px;
            margin-bottom: 25px;
        }

        .info-box i{
            font-size: 24px;
        }

        @media(max-width:768px){
            .page-title{
                font-size: 22px;
            }

            .table{
                font-size: 13px;
            }

            .btn-add{
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>

<div class="p-4" id="main-content">

    <div class="topbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">

            <div>
                <h3 class="page-title">Data Kematian</h3>
                <div class="subtitle">
                    Sistem Pengolahan Data Kematian Penduduk
                </div>
            </div>
        </div>
    </div>

    <div class="info-box d-flex align-items-center gap-3">
        <i class="bi bi-heartbreak-fill"></i>
        <div>
            <strong>Informasi Data</strong><br>
            Menampilkan seluruh data kematian yang telah tersimpan di sistem.
        </div>
    </div>

    <div class="main-card">

        <div class="row align-items-center mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
                <a href="tambah_kematian.php" class="btn btn-add">
                    <i class="bi bi-plus-circle-fill me-2"></i>
                    Tambah Data
                </a>
            </div>

            <div class="col-md-6">
                <form action="" method="GET">
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text"
                               class="form-control"
                               placeholder="Cari nama penduduk..."
                               name="cari">
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NIK</th>
                        <th>TANGGAL MENINGGAL</th>
                        <th>SEBAB</th>
                        <th colspan="3">AKSI</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                include 'connection.php';

                $batas = 5;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;

                $baris = mysqli_query($kon, "SELECT * FROM kematian");
                $jumlah_data = mysqli_num_rows($baris);
                $total_halaman = ceil($jumlah_data / $batas);

                $no = $halaman_awal + 1;

                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysqli_query($kon,
                        "SELECT * FROM kematian
                         WHERE nama LIKE '%".$cari."%'");
                }else{
                    $data = mysqli_query($kon,
                        "SELECT * FROM kematian
                         LIMIT $halaman_awal, $batas");
                }

                while($d = mysqli_fetch_array($data)){
                ?>

                    <tr>
                        <td class="text-center fw-bold">
                            <?php echo $no++; ?>
                        </td>

                        <td>
                            <strong><?php echo $d['nama']; ?></strong>
                        </td>

                        <td>
                            <?php echo $d['nik']; ?>
                        </td>

                        <td>
                            <?php echo $d['wafat']; ?>
                        </td>

                        <td>
                            <?php echo $d['sebab']; ?>
                        </td>

                        <td class="text-center">
                            <a href="detail_kematian.php?id=<?php echo $d['id']; ?>"
                               class="btn action-btn btn-detail">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </td>

                        <td class="text-center">
                            <a href="form_edit_kematian.php?id=<?php echo $d['id']; ?>"
                               class="btn action-btn btn-edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>

                        <td class="text-center">
                            <a href="delete_kematian.php?id=<?php echo $d['id']; ?>"
                               class="btn action-btn btn-delete alert_notif">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>

        <nav class="mt-4">
            <ul class="pagination justify-content-center">

                <li class="page-item">
                    <a class="page-link"
                    <?php if($halaman > 1){ ?>
                        href="?halaman=<?php echo $previous; ?>"
                    <?php } ?>>
                        Previous
                    </a>
                </li>

                <?php for($x=1; $x<=$total_halaman; $x++){ ?>

                    <li class="page-item">
                        <a class="page-link"
                           href="?halaman=<?php echo $x; ?>">
                           <?php echo $x; ?>
                        </a>
                    </li>

                <?php } ?>

                <li class="page-item">
                    <a class="page-link"
                    <?php if($halaman < $total_halaman){ ?>
                        href="?halaman=<?php echo $next; ?>"
                    <?php } ?>>
                        Next
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(@$_SESSION['sukses']){ ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: 'Data berhasil ditambahkan',
    timer: 2500,
    showConfirmButton: false
})
</script>
<?php unset($_SESSION['sukses']); } ?>

<?php if(@$_SESSION['suksesDel']){ ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: 'Data berhasil dihapus',
    timer: 2500,
    showConfirmButton: false
})
</script>
<?php unset($_SESSION['suksesDel']); } ?>

<script>
$('.alert_notif').on('click', function(){
    var getLink = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data?',
        text: 'Data yang dihapus tidak dapat dikembalikan.',
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
    })

    return false;
});

</body>
</html>