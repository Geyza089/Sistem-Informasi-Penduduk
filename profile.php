<?php
session_start();
include 'sidebar.php';
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:#f1f5f9;
        }

        /* ================= MAIN CONTENT ================= */

        #main-content{
            margin-left:270px;
            padding:30px;
            transition:0.3s;
        }

        /* ================= TOPBAR ================= */

        .topbar{
            background:white;
            border-radius:20px;
            padding:20px 25px;
            box-shadow:0 4px 20px rgba(0,0,0,0.05);
            margin-bottom:25px;
        }

        .topbar h3{
            font-weight:700;
            color:#0f172a;
            margin-bottom:5px;
        }

        .topbar p{
            color:#64748b;
            margin:0;
        }

        /* ================= WELCOME ================= */

        .welcome-box{
            background:linear-gradient(135deg,#2563eb,#3b82f6);
            border-radius:20px;
            padding:25px;
            color:white;
            margin-bottom:30px;
            box-shadow:0 10px 25px rgba(37,99,235,0.25);
        }

        .welcome-box h5{
            font-weight:600;
            margin-bottom:8px;
        }

        /* ================= CARD ================= */

        .dashboard-card{
            border:none;
            border-radius:20px;
            overflow:hidden;
            transition:0.3s;
            box-shadow:0 4px 15px rgba(0,0,0,0.05);
        }

        .dashboard-card:hover{
            transform:translateY(-5px);
        }

        .card-body-custom{
            padding:25px;
            color:white;
        }

        .card-title-small{
            font-size:14px;
            opacity:0.9;
            margin-bottom:5px;
        }

        .card-title-big{
            font-size:18px;
            font-weight:600;
        }

        .card-number{
            font-size:40px;
            font-weight:700;
            text-align:right;
        }

        /* ================= CHART ================= */

        .chart-card{
            border:none;
            border-radius:20px;
            box-shadow:0 4px 20px rgba(0,0,0,0.05);
        }

        .chart-card .card-body{
            padding:25px;
        }

        .chart-title{
            font-size:18px;
            font-weight:600;
            color:#0f172a;
            margin-bottom:20px;
            text-align:center;
        }

    </style>

</head>

<body>

<div id="main-content">

    <!-- TOPBAR -->

    <div class="topbar">

        <h3>Dashboard</h3>

        <p>
            Sistem Informasi Pengolahan Data Penduduk Berbasis Web
        </p>

    </div>

    <!-- WELCOME -->

    <div class="welcome-box">

        <h5>
            Selamat Datang,
            <?php echo $_SESSION['username']; ?>
        </h5>

        <p>
            Kelola data penduduk dengan mudah, cepat, dan efisien.
        </p>

    </div>

    <!-- ================= STATISTIK ================= -->

    <div class="row g-4">

        <!-- Penduduk -->

        <div class="col-md-4">

            <div class="card dashboard-card">

                <div class="card-body-custom"
                    style="background:linear-gradient(135deg,#ef4444,#f97316)">

                    <div class="row align-items-center">

                        <div class="col-7">

                            <div class="card-title-small">
                                Jumlah
                            </div>

                            <div class="card-title-big">
                                Data Penduduk
                            </div>

                        </div>

                        <div class="col-5">

                            <?php
                            $query = mysqli_query($kon, "SELECT * FROM penduduk");
                            $jumlah = mysqli_num_rows($query);
                            ?>

                            <div class="card-number">
                                <?php echo $jumlah ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- KK -->

        <div class="col-md-4">

            <div class="card dashboard-card">

                <div class="card-body-custom"
                    style="background:linear-gradient(135deg,#8b5cf6,#6366f1)">

                    <div class="row align-items-center">

                        <div class="col-7">

                            <div class="card-title-small">
                                Jumlah
                            </div>

                            <div class="card-title-big">
                                Kartu Keluarga
                            </div>

                        </div>

                        <div class="col-5">

                            <?php
                            $query2 = mysqli_query($kon, "SELECT * FROM keluarga");
                            $jumlah2 = mysqli_num_rows($query2);
                            ?>

                            <div class="card-number">
                                <?php echo $jumlah2 ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Kelahiran -->

        <div class="col-md-4">

            <div class="card dashboard-card">

                <div class="card-body-custom"
                    style="background:linear-gradient(135deg,#06b6d4,#0ea5e9)">

                    <div class="row align-items-center">

                        <div class="col-7">

                            <div class="card-title-small">
                                Jumlah
                            </div>

                            <div class="card-title-big">
                                Data Kelahiran
                            </div>

                        </div>

                        <div class="col-5">

                            <?php
                            $query3 = mysqli_query($kon, "SELECT * FROM kelahiran");
                            $jumlah3 = mysqli_num_rows($query3);
                            ?>

                            <div class="card-number">
                                <?php echo $jumlah3 ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ROW 2 -->

    <div class="row g-4 mt-1">

        <!-- Kematian -->

        <div class="col-md-4">

            <div class="card dashboard-card">

                <div class="card-body-custom"
                    style="background:linear-gradient(135deg,#0ea5e9,#2563eb)">

                    <div class="row align-items-center">

                        <div class="col-7">

                            <div class="card-title-small">
                                Jumlah
                            </div>

                            <div class="card-title-big">
                                Data Kematian
                            </div>

                        </div>

                        <div class="col-5">

                            <?php
                            $query4 = mysqli_query($kon, "SELECT * FROM kematian");
                            $jumlah4 = mysqli_num_rows($query4);
                            ?>

                            <div class="card-number">
                                <?php echo $jumlah4 ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Pendatang -->

        <div class="col-md-4">

            <div class="card dashboard-card">

                <div class="card-body-custom"
                    style="background:linear-gradient(135deg,#14b8a6,#10b981)">

                    <div class="row align-items-center">

                        <div class="col-7">

                            <div class="card-title-small">
                                Jumlah
                            </div>

                            <div class="card-title-big">
                                Data Pendatang
                            </div>

                        </div>

                        <div class="col-5">

                            <?php
                            $query5 = mysqli_query($kon, "SELECT * FROM pendatang");
                            $jumlah5 = mysqli_num_rows($query5);
                            ?>

                            <div class="card-number">
                                <?php echo $jumlah5 ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Pindah -->

        <div class="col-md-4">

            <div class="card dashboard-card">

                <div class="card-body-custom"
                    style="background:linear-gradient(135deg,#f43f5e,#e11d48)">

                    <div class="row align-items-center">

                        <div class="col-7">

                            <div class="card-title-small">
                                Jumlah
                            </div>

                            <div class="card-title-big">
                                Data Pindah
                            </div>

                        </div>

                        <div class="col-5">

                            <?php
                            $query6 = mysqli_query($kon, "SELECT * FROM pindah");
                            $jumlah6 = mysqli_num_rows($query6);
                            ?>

                            <div class="card-number">
                                <?php echo $jumlah6 ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ================= CHART ================= -->

    <div class="row mt-4">

        <div class="col-md-6 mb-4">

            <div class="card chart-card">

                <div class="card-body">

                    <div class="chart-title">
                        Grafik Laki-laki dan Perempuan
                    </div>

                    <canvas id="myChart"></canvas>

                </div>

            </div>

        </div>

        <div class="col-md-6 mb-4">

            <div class="card chart-card">

                <div class="card-body">

                    <div class="chart-title">
                        Grafik Kelahiran dan Kematian
                    </div>

                    <canvas id="yourChart"></canvas>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ================= CHART JS ================= -->

<script>

var ctx = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(ctx, {

    type: 'bar',

    data: {

        labels: ["Laki-laki", "Perempuan"],

        datasets: [{

            label: 'Jumlah',

            data: [

                <?php
                $query = mysqli_query($kon,
                "SELECT * FROM penduduk WHERE jenis_kelamin='Laki-laki'");
                echo mysqli_num_rows($query);
                ?>,

                <?php
                $que = mysqli_query($kon,
                "SELECT * FROM penduduk WHERE jenis_kelamin='Perempuan'");
                echo mysqli_num_rows($que);
                ?>

            ],

            backgroundColor: [

                'rgba(59,130,246,0.5)',
                'rgba(236,72,153,0.5)'

            ],

            borderColor: [

                'rgba(59,130,246,1)',
                'rgba(236,72,153,1)'

            ],

            borderWidth: 2

        }]

    }

});

</script>

<script>

var ctx = document.getElementById("yourChart").getContext('2d');

var myChart = new Chart(ctx, {

    type: 'bar',

    data: {

        labels: ["Kelahiran", "Kematian"],

        datasets: [{

            label: 'Jumlah',

            data: [

                <?php
                $query = mysqli_query($kon, "SELECT * FROM kelahiran");
                echo mysqli_num_rows($query);
                ?>,

                <?php
                $que = mysqli_query($kon, "SELECT * FROM kematian");
                echo mysqli_num_rows($que);
                ?>

            ],

            backgroundColor: [

                'rgba(16,185,129,0.5)',
                'rgba(239,68,68,0.5)'

            ],

            borderColor: [

                'rgba(16,185,129,1)',
                'rgba(239,68,68,1)'

            ],

            borderWidth: 2

        }]

    }

});

</script>

</body>
</html>