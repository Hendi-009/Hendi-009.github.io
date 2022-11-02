<?php
session_start();
require 'koneksi.php';

if (isset($_SESSION['login'])) {
  header('Location: index.php');
  exit;
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $cek_username = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $cek_username);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
      $_SESSION['login'] = true;

      echo "<script>
                alert('Login berhasil!');
                document.location.href = 'index.php';
            </script>";
    }
  }

  $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Weesia - Member</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="style/main.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="/index.html" class="navbar-brand">
        <img src="images/logo.svg" alt="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="/index.html class=" nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Rewards</a>
          </li>
          <li class="nav-item">
            <a href="/register.html" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="/login.html" class="btn btn-success nav-link px-4 text-white">Sign in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img src="/images/login-placeholder.png" alt="" class="w-50 mb-4 mb-lg-none" />
          </div>
          <div class="col-lg-5">
            <h2>
              Tingkatkan Pemasukan Anda , <br />
              dengan Bergabung di Weesia
            </h2>
            <form action="" class="mt-3" method="post">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control w-75" name="username" id="username" />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control w-75" name="password" />
              </div>
              <button class="btn btn-success btn-block w-75 mt-4" type="submit" name="login">Sign In to My Account</button>
              <a href="Registrasi_Member.php" class="btn btn-signup btn-block w-75 mt-4">Sign Up</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="pt-4 pb-2">2022 Copyright Weesia. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/script/navbar-scroll.js"></script>
</body>

</html>