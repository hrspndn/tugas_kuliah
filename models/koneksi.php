<?php
$server = "localhost";
$database = "tugas_kuliah";
$password = "";
$user = "root";
$koneksi = mysqli_connect($server, $user, $password, $database);

if (!$koneksi) {
    echo "Koneksi Database Gagal" . mysqli_connect_error();
}
