<?php 
include 'connection.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($kon, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Email atau password salah!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #1f4037, #99f2c8);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-card {
    width: 100%;
    max-width: 420px;
    background: #fff;
    border-radius: 18px;
    padding: 35px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.login-title {
    font-weight: 700;
    text-align: center;
    margin-bottom: 25px;
    color: #2c3e50;
}

.form-control {
    border-radius: 10px;
    padding: 12px;
}

.btn-login {
    background: #1f4037;
    color: white;
    border-radius: 10px;
    padding: 10px;
    font-weight: 600;
}

.btn-login:hover {
    background: #16332b;
}

.toggle-pass {
    cursor: pointer;
    background: #f1f1f1;
    border: none;
    padding: 0 12px;
    border-radius: 0 10px 10px 0;
}
</style>
</head>

<body>

<div class="login-card">
    
    <div class="text-center mb-3">
        <img src="img/profile.png" width="80">
    </div>

    <h4 class="login-title">Login Petugas</h4>

    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>

            <div class="input-group">
                <input type="password" id="pass" name="password" class="form-control" placeholder="Masukkan password" required>
                <button type="button" class="toggle-pass" onclick="togglePassword()" id="toggleBtn">
                    👁
                </button>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-login w-100">
            Login
        </button>

        <p class="text-center mt-3 mb-0" style="font-size:14px;">
            Belum punya akun? <a href="register.php">Register</a>
        </p>

    </form>
</div>

<script>
function togglePassword() {
    const pass = document.getElementById("pass");
    const btn = document.getElementById("toggleBtn");

    if (pass.type === "password") {
        pass.type = "text";
        btn.innerHTML = "🙈";
    } else {
        pass.type = "password";
        btn.innerHTML = "👁";
    }
}
</script>

</body>
</html>