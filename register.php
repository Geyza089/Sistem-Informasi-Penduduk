<?php 
include 'connection.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {

        // cek email sudah ada atau belum
        $cek = mysqli_query($kon, "SELECT * FROM users WHERE email='$email'");

        if (mysqli_num_rows($cek) == 0) {

            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";

            $result = mysqli_query($kon, $sql);

            if ($result) {
                echo "<script>alert('Registrasi berhasil!'); window.location='index.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan!')</script>";
            }

        } else {
            echo "<script>alert('Email sudah terdaftar!')</script>";
        }

    } else {
        echo "<script>alert('Password tidak cocok!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #141e30, #243b55);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-register {
    width: 100%;
    max-width: 450px;
    background: #fff;
    border-radius: 18px;
    padding: 35px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.25);
}

.title {
    text-align: center;
    font-weight: 700;
    margin-bottom: 20px;
    color: #2c3e50;
}

.form-control {
    border-radius: 10px;
    padding: 12px;
}

.btn-register {
    background: #243b55;
    color: white;
    border-radius: 10px;
    padding: 10px;
    font-weight: 600;
}

.btn-register:hover {
    background: #1b2a3a;
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

<div class="card-register">

    <div class="text-center mb-3">
        <img src="img/profile.png" width="80">
    </div>

    <h4 class="title">Create Account</h4>

    <form method="POST">

        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <div class="input-group">
                <input type="password" id="pass" name="password" class="form-control" required>
                <button type="button" class="toggle-pass" onclick="togglePass()">👁</button>
            </div>
        </div>

        <div class="mb-3">
            <label>Ulangi Password</label>
            <input type="password" name="cpassword" class="form-control" required>
        </div>

        <button type="submit" name="submit" class="btn btn-register w-100">
            Sign Up
        </button>

        <p class="text-center mt-3 mb-0" style="font-size:14px;">
            Sudah punya akun? <a href="index.php">Login</a>
        </p>

    </form>
</div>

<script>
function togglePass() {
    const pass = document.getElementById("pass");

    if (pass.type === "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}
</script>

</body>
</html>