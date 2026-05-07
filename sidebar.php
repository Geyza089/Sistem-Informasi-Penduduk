<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sidebar Modern</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link href="img/logo2.png" rel="shortcut icon">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f7fc;
    }

    a {
      text-decoration: none;
    }

    /* ================= SIDEBAR ================= */

    .sidebar {
      width: 270px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background: linear-gradient(180deg, #0f172a, #1e293b);
      padding: 25px 18px;
      overflow-y: auto;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    /* ================= PROFILE ================= */

    .profile {
      text-align: center;
      margin-bottom: 35px;
    }

    .profile img {
      width: 95px;
      height: 95px;
      border-radius: 50%;
      padding: 5px;
      background: linear-gradient(135deg, #3b82f6, #60a5fa);
      box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
      margin-bottom: 15px;
    }

    .profile h5 {
      color: white;
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 4px;
    }

    .profile p {
      color: #94a3b8;
      font-size: 13px;
    }

    /* ================= MENU TITLE ================= */

    .menu-title {
      color: #64748b;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 1px;
      margin-bottom: 15px;
      padding-left: 10px;
    }

    /* ================= MENU ================= */

    .menu {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .menu a {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 14px 16px;
      border-radius: 16px;
      color: #cbd5e1;
      font-size: 15px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .menu a i {
      font-size: 18px;
    }

    /* Hover */

    .menu a:hover {
      background: rgba(255, 255, 255, 0.08);
      color: white;
      transform: translateX(5px);
    }

    /* Active */

    .menu a.active {
      background: linear-gradient(135deg, #2563eb, #3b82f6);
      color: white;
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.4);
    }

    /* Logout */

    .logout {
      margin-top: 15px;
      background: rgba(239, 68, 68, 0.12);
      color: #f87171 !important;
    }

    .logout:hover {
      background: #ef4444 !important;
      color: white !important;
    }

    /* ================= MAIN CONTENT ================= */

    #main-content {
      margin-left: 270px;
      padding: 30px;
      transition: 0.4s;
    }
  </style>

</head>

<body>

  <!-- ================= SIDEBAR ================= -->
  <?php
  $current_page = basename($_SERVER['PHP_SELF']);
  ?>
  <div class="sidebar" id="sidebar">

    <!-- Profile -->

    <div class="profile">

      <img src="img/profile.png" alt="Profile">

      <h5>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }

        echo $_SESSION['username'];
        ?>
      </h5>

      <p>Administrator Sistem</p>

    </div>

    <!-- Menu -->

    <div class="menu-title">
      MAIN MENU
    </div>

    <div class="menu">

      <a href="profile.php" class="<?= ($current_page == 'profile.php') ? 'active' : ''; ?>">

        <i class="bi bi-grid-1x2-fill"></i>
        <span>Dashboard</span>

      </a>

      <a href="penduduk.php" class="<?= ($current_page == 'penduduk.php') ? 'active' : ''; ?>">

        <i class="bi bi-people-fill"></i>
        <span>Data Penduduk</span>

      </a>

      <a href="keluarga.php" class="<?= ($current_page == 'keluarga.php') ? 'active' : ''; ?>">

        <i class="bi bi-house-heart-fill"></i>
        <span>Kartu Keluarga</span>

      </a>

      <a href="kelahiran.php" class="<?= ($current_page == 'kelahiran.php') ? 'active' : ''; ?>">

        <i class="bi bi-balloon-heart-fill"></i>
        <span>Data Kelahiran</span>

      </a>

      <a href="kematian.php" class="<?= ($current_page == 'kematian.php') ? 'active' : ''; ?>">

        <i class="bi bi-heartbreak-fill"></i>
        <span>Data Kematian</span>

      </a>

      <a href="pendatang.php" class="<?= ($current_page == 'pendatang.php') ? 'active' : ''; ?>">

        <i class="bi bi-person-plus-fill"></i>
        <span>Data Pendatang</span>

      </a>

      <a href="pindah.php" class="<?= ($current_page == 'pindah.php') ? 'active' : ''; ?>">

        <i class="bi bi-send-fill"></i>
        <span>Data Pindah</span>

      </a>
      <a href="Logout.php" class="logout">
        <i class="bi bi-box-arrow-left"></i>
        <span>Log-Out</span>
      </a>

    </div>

  </div>

</body>

</html>