<?php
include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelahiran</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
        }

        #main-content{
            transition: .3s;
        }

        .topbar{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .page-title h3{
            margin: 0;
            font-weight: 700;
            color: #0f172a;
        }

        .page-title p{
            margin: 0;
            color: #64748b;
            font-size: 14px;
        }

        .main-card{
            border: none;
            border-radius: 28px;
            background: rgba(255,255,255,.96);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 40px rgba(0,0,0,.08);
            overflow: hidden;
        }

        .card-header-custom{
            padding: 28px 32px;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
        }

        .card-header-custom h5{
            margin: 0;
            font-weight: 600;
        }

        .card-header-custom p{
            margin: 5px 0 0;
            opacity: .9;
            font-size: 14px;
        }

        .content-area{
            padding: 30px;
        }

        .btn-add{
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            border: none;
            color: white;
            padding: 12px 22px;
            border-radius: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-add:hover{
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 8px 20px rgba(37,99,235,.25);
        }

        .search-box{
            position: relative;
        }

        .search-box .form-control{
            height: 52px;
            border-radius: 14px;
            border: 1px solid #dbe3ef;
            padding-left: 45px;
            box-shadow: none !important;
        }

        .search-box .form-control:focus{
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37,99,235,.12) !important;
        }

        .search-box i{
            position: absolute;
            left: 15px;
            top: 16px;
            color: #94a3b8;
        }

        .table{
            margin-top: 25px;
            vertical-align: middle;
        }

        .table thead{
            background: #f1f5f9;
        }

        .table thead th{
            border: none;
            padding: 18px 15px;
            font-size: 14px;
            font-weight: 700;
            color: #334155;
        }

        .table tbody td{
            padding: 18px 15px;
            border-color: #eef2f7;
            color: #475569;
        }

        .table tbody tr{
            transition: .3s;
        }

        .table tbody tr:hover{
            background: #f8fbff;
        }

        .badge-gender{
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
        }

        .male{
            background: rgba(59,130,246,.12);
            color: #2563eb;
        }

        .female{
            background: rgba(236,72,153,.12);
            color: #db2777;
        }

        .action-btn{
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: .3s;
            color: white;
        }

        .action-btn:hover{
            transform: translateY(-2px);
            color: white;
        }

        .btn-view{
            background: #2563eb;
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
            border-radius: 10px;
            color: #2563eb;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0,0,0,.05);
        }

        .pagination .page-link:hover{
            background: #2563eb;
            color: white;
        }

        @media(max-width:768px){

            .content-area{
                padding: 20px;
            }

        }

    </style>

</head>

<body>

<div class="p-4" id="main-content">

        <!-- Topbar -->
        <div class="topbar">

            <div class="d-flex align-items-center gap-3">

                <div class="page-title">
                    <h3>Data Kelahiran</h3>
                    <p>Manajemen data kelahiran penduduk</p>
                </div>

            </div>

        </div>

        <!-- Main Card -->
        <div class="card main-card">

            <!-- Header -->
            <div class="card-header-custom">

                <h5>
                    <i class="bi bi-person-heart me-2"></i>
                    Pengolahan Data Kelahiran
                </h5>

                <p>
                    Menampilkan seluruh data kelahiran yang tersedia
                </p>

            </div>

            <!-- Content -->
            <div class="content-area">

                <div class="row align-items-center g-3">

                    <div class="col-md-6">

                        <a href="tambah_kelahiran.php" class="btn-add">
                            <i class="bi bi-plus-circle"></i>
                            Tambah Data
                        </a>

                    </div>

                    <div class="col-md-6">

                        <form action="" method="GET">

                            <div class="search-box">

                                <i class="bi bi-search"></i>

                                <input type="text"
                                       class="form-control"
                                       name="cari"
                                       placeholder="Cari nama penduduk...">

                            </div>

                        </form>

                    </div>

                </div>

                <!-- Table -->
                <div class="table-responsive">

                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th class="text-center">Aksi</th>
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

                        $baris = mysqli_query($kon,"SELECT * FROM kelahiran");
                        $jumlah_data = mysqli_num_rows($baris);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $no = $halaman_awal + 1;

                        if(isset($_GET['cari'])){

                            $cari = $_GET['cari'];

                            $data = mysqli_query($kon,
                            "SELECT * FROM kelahiran 
                             WHERE nama LIKE '%".$cari."%'");

                        }else{

                            $data = mysqli_query($kon,
                            "SELECT * FROM kelahiran 
                             LIMIT $halaman_awal, $batas");
                        }

                        while($d = mysqli_fetch_array($data)){

                        ?>

                            <tr>

                                <td><?php echo $no++; ?></td>

                                <td>
                                    <strong>
                                        <?php echo $d['nama']; ?>
                                    </strong>
                                </td>

                                <td>
                                    <?php echo date('d F Y', strtotime($d['tanggal'])); ?>
                                </td>

                                <td>

                                    <?php
                                    if($d['kelamin'] == "Laki-laki"){
                                        echo '<span class="badge-gender male">Laki-laki</span>';
                                    }else{
                                        echo '<span class="badge-gender female">Perempuan</span>';
                                    }
                                    ?>

                                </td>

                                <td class="text-center">

                                    <a href="detail_kelahiran.php?id=<?php echo $d['id']; ?>"
                                       class="action-btn btn-view">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                    <a href="form_edit_kelahiran.php?id=<?php echo $d['id']; ?>"
                                       class="action-btn btn-edit">

                                        <i class="bi bi-pencil-square"></i>

                                    </a>

                                    <a href="delete_kelahiran.php?id=<?php echo $d['id']; ?>"
                                       class="action-btn btn-delete alert_notif">

                                        <i class="bi bi-trash"></i>

                                    </a>

                                </td>

                            </tr>

                        <?php } ?>

                        </tbody>

                    </table>

                </div>

                <!-- Pagination -->
                <nav class="mt-4">

                    <ul class="pagination justify-content-center">

                        <li class="page-item">

                            <a class="page-link"
                            <?php if($halaman > 1){ ?>
                                href="?halaman=<?php echo $previous ?>"
                            <?php } ?>>

                                Previous

                            </a>

                        </li>

                        <?php
                        for($x = 1; $x <= $total_halaman; $x++){
                        ?>

                        <li class="page-item">

                            <a class="page-link"
                               href="?halaman=<?php echo $x ?>">

                               <?php echo $x ?>

                            </a>

                        </li>

                        <?php } ?>

                        <li class="page-item">

                            <a class="page-link"
                            <?php if($halaman < $total_halaman){ ?>
                                href="?halaman=<?php echo $next ?>"
                            <?php } ?>>

                                Next

                            </a>

                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>

<!-- SweetAlert -->
<?php if(@$_SESSION['sukses']){ ?>

<script>

Swal.fire({

    icon: 'success',
    title: 'Berhasil',
    text: 'Data berhasil ditambahkan',
    timer: 2500,
    showConfirmButton: false

});

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

});

</script>

<?php unset($_SESSION['suksesDel']); } ?>

<!-- Delete Confirm -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

$('.alert_notif').on('click', function(){

    var getLink = $(this).attr('href');

    Swal.fire({

        title: 'Yakin hapus data?',
        text: 'Data yang dihapus tidak dapat dikembalikan',
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