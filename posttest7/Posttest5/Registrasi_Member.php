<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if ($password == $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $cek_username = "SELECT username FROM users WHERE username = '$username'";
        $temp = mysqli_query($conn, $cek_username);
        $row = mysqli_fetch_assoc($temp);

        if ($row) {
            echo "<script>
                alert('Username ini telah digunakan!');
                document.location.href = 'Registrasi_Member.php';
            </script>";
        } else {
            $insert_sql = "INSERT INTO users VALUES ('', '$username', '$password')";
            mysqli_query($conn, $insert_sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script>
                        alert('Data berhasil diregistrasi!');
                        document.location.href = 'userlogin.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Data gagal diregistrasi!');
                        document.location.href = 'Registrasi_Member.php';
                    </script>";
            }
        }
    } else {
        echo "<script>
                    alert('Konfirmasi Password tidak sesuai!');
                    document.location.href = 'Registrasi_Member.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Store - Your Best Marketplace</title>

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
                        <a href="/index.html" class="nav-link">Home</a>
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

    <div class="page-content page-auth" id="register">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center justify-content-center row-login">
                    <div class="col-lg-4">
                        <h2>
                            Registrasi Member <br />
                            Weesia
                        </h2>
                        <form action="" method="post" class="mt-3">
                            <div class="form-group">
                                <label>username</label>
                                <input type="text" name="username" id="username" class="form-control " />
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" name="password" id="password" class="form-control " />
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="cpassword" id="cpasswordd" class="form-control " />
                            </div>
                            <button type="submit" name="register" class="btn btn-success btn-block mt-4">Sign Up Now</button>

                            <a href="userlogin.php" class="btn btn-signup btn-block mt-4">Back to Sign In</a>
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