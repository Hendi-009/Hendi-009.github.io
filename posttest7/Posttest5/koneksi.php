<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "dataabsen";
$conn = mysqli_connect($server, $user, $pass, $db_name);

if (!$conn) {
    die("Koneksi dengan database gagal: " . mysqli_connect_error());
}
