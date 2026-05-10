<?php
// pastikan session sudah berjalan
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// proteksi login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// ambil username
$username = $_SESSION['username'];

// halaman aktif
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sidebar Modern</title>

  <!-- Bootstrap -->
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

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
      overflow-x: hidden;
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
      transition: .3s ease;
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
      word-break: break-word;
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
      min-width: 20px;
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
      transition: .3s;
    }

    /* ================= MOBILE BUTTON ================= */

    .mobile-toggle {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 2000;
      background: #2563eb;
      color: white;
      border: none;
      width: 45px;
      height: 45px;
      border-radius: 12px;
      font-size: 20px;
      box-shadow: 0 10px 20px rgba(37, 99, 235, .25);
      align-items: center;
      justify-content: center;
    }

    .overlay-mobile {
      display: none;
    }

    /* ================= RESPONSIVE ================= */

    @media (max-width: 992px) {

      .mobile-toggle {
        display: flex;
      }

      .sidebar {
        transform: translateX(-100%);
      }

      .sidebar.active-mobile {
        transform: translateX(0);
      }

      .overlay-mobile.active {
        display: block;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .45);
        z-index: 900;
      }

      #main-content {
        margin-left: 0 !important;
        width: 100%;
        padding: 80px 15px 20px !important;
      }

      .profile img {
        width: 75px;
        height: 75px;
      }
    }

    /* ================= SCROLLBAR ================= */

    .sidebar::-webkit-scrollbar {
      width: 5px;
    }

    .sidebar::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, .2);
      border-radius: 10px;
    }
  </style>

</head>

<body>

  <!-- Mobile Toggle -->
  <button class="mobile-toggle" id="mobileToggle">
    <i class="bi bi-list"></i>
  </button>

  <!-- Overlay -->
  <div class="overlay-mobile" id="mobileOverlay"></div>

  <!-- ================= SIDEBAR ================= -->

  <div class="sidebar" id="sidebar">

    <!-- Profile -->

    <div class="profile">

      <img src="img/profile.png" alt="Profile">

      <h5>
        <?= htmlspecialchars($username); ?>
      </h5>

      <p>Administrator Sistem</p>

    </div>

    <!-- Menu -->

    <div class="menu-title">
      MAIN MENU
    </div>

    <div class="menu">

      <a href="profile.php"
        class="<?= ($current_page == 'profile.php') ? 'active' : ''; ?>">

        <i class="bi bi-grid-1x2-fill"></i>
        <span>Dashboard</span>

      </a>

      <a href="penduduk.php"
        class="<?= ($current_page == 'penduduk.php') ? 'active' : ''; ?>">

        <i class="bi bi-people-fill"></i>
        <span>Data Penduduk</span>

      </a>

      <a href="keluarga.php"
        class="<?= ($current_page == 'keluarga.php') ? 'active' : ''; ?>">

        <i class="bi bi-house-heart-fill"></i>
        <span>Kartu Keluarga</span>

      </a>

      <a href="kelahiran.php"
        class="<?= ($current_page == 'kelahiran.php') ? 'active' : ''; ?>">

        <i class="bi bi-balloon-heart-fill"></i>
        <span>Data Kelahiran</span>

      </a>

      <a href="kematian.php"
        class="<?= ($current_page == 'kematian.php') ? 'active' : ''; ?>">

        <i class="bi bi-heartbreak-fill"></i>
        <span>Data Kematian</span>

      </a>

      <a href="pendatang.php"
        class="<?= ($current_page == 'pendatang.php') ? 'active' : ''; ?>">

        <i class="bi bi-person-plus-fill"></i>
        <span>Data Pendatang</span>

      </a>

      <a href="pindah.php"
        class="<?= ($current_page == 'pindah.php') ? 'active' : ''; ?>">

        <i class="bi bi-send-fill"></i>
        <span>Data Pindah</span>

      </a>

      <a href="logout.php" class="logout">

        <i class="bi bi-box-arrow-left"></i>
        <span>Log-Out</span>

      </a>

    </div>

  </div>

  <!-- Sidebar Script -->

  <script>
    const mobileToggle = document.getElementById('mobileToggle');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('mobileOverlay');

    mobileToggle.addEventListener('click', () => {
      sidebar.classList.toggle('active-mobile');
      overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active-mobile');
      overlay.classList.remove('active');
    });
  </script>

</body>

</html>