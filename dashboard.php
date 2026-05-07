<?php
include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #eaf4ff, #f7fbff);
            min-height: 100vh;
            overflow-x: hidden;
        }

        li {
            list-style: none;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
        }

        .sidebar {
            width: 270px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            transition: .4s;
        }

        #main-content {
            transition: .4s;
            padding: 25px;
            margin-left: 270px;
        }

        /* Hero Card */

        .dashboard-card {
            margin-top: 35px;
            border: none;
            border-radius: 30px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.08);
            min-height: 500px;
        }

        .dashboard-content {
            padding: 60px;
        }

        .welcome-badge {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 50px;
            background: rgba(59, 130, 246, .1);
            color: #2563eb;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .main-title {
            font-size: 52px;
            line-height: 1.2;
            font-weight: 700;
            color: #0f172a;
        }

        .main-title span {
            color: #2563eb;
        }

        .description {
            color: #64748b;
            font-size: 16px;
            line-height: 1.8;
            margin-top: 25px;
            max-width: 550px;
        }

        .username {
            color: #2563eb;
            font-weight: 700;
        }

        .dashboard-btn {
            margin-top: 35px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 28px;
            border-radius: 16px;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            font-weight: 600;
            border: none;
            transition: .3s;
            box-shadow: 0 10px 25px rgba(37, 99, 235, .25);
        }

        .dashboard-btn:hover {
            transform: translateY(-3px);
            color: white;
        }

        /* Image */

        .image-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            position: relative;
        }

        .image-wrapper::before {
            content: '';
            position: absolute;
            width: 320px;
            height: 320px;
            background: linear-gradient(135deg, #bfdbfe, #dbeafe);
            border-radius: 50%;
            z-index: 1;
        }

        .dashboard-image {
            width: 260px;
            position: relative;
            z-index: 2;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Responsive */

        @media(max-width: 992px) {

            .dashboard-content {
                padding: 40px 30px;
                text-align: center;
            }

            .main-title {
                font-size: 38px;
            }

            .description {
                margin-left: auto;
                margin-right: auto;
            }

            .image-wrapper {
                padding-bottom: 50px;
            }
        }

        @media(max-width: 576px) {

            .main-title {
                font-size: 30px;
            }

            .dashboard-content {
                padding: 35px 20px;
            }

            .dashboard-image {
                width: 200px;
            }

            .image-wrapper::before {
                width: 240px;
                height: 240px;
            }
        }
    </style>
</head>

<body>

    <div id="main-content">

        <!-- Dashboard Card -->
        <div class="card dashboard-card">

            <div class="container-fluid">

                <div class="row align-items-center">

                    <!-- Left -->
                    <div class="col-lg-7">

                        <div class="dashboard-content">

                            <div class="welcome-badge">
                                <i class="bi bi-stars me-2"></i>
                                Sistem Informasi Penduduk
                            </div>

                            <h1 class="main-title">
                                Selamat Datang,
                                <br>
                                <span><?php echo $_SESSION['username']; ?></span>
                            </h1>

                            <p class="description">
                                Kelola data penduduk dengan lebih cepat, modern,
                                dan efisien melalui sistem berbasis web yang dirancang
                                dengan tampilan profesional, responsif, dan mudah digunakan.
                            </p>

                            <a href="penduduk.php" class="dashboard-btn">
                                <i class="bi bi-people-fill"></i>
                                Kelola Data Penduduk
                            </a>

                        </div>

                    </div>

                    <!-- Right -->
                    <div class="col-lg-5">

                        <div class="image-wrapper">

                            <img src="img/logo2.png" class="dashboard-image" alt="Dashboard Image">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>