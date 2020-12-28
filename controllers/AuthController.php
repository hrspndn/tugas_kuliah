<?php
include "../models/koneksi.php";
session_start();

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = md5(htmlspecialchars($_POST['password']));

    if (!$username || !$password) {
        echo "<script>alert('Silahkan Isi Username dan Password')</script>";
        echo "<script> location='../index.php'; </script>";
    }


    $query = mysqli_query($koneksi, "SELECT * FROM users JOIN roles ON users.id_role=roles.id_role WHERE username='$username'");
    $check = mysqli_fetch_row($query);


    if ($check) {
        if ($check[2] === $password) {
            $_SESSION['role_name'] = $check[5];
            $_SESSION['id_role'] = $check[4];

            echo "<script> alert('Selamat, Anda Berhasil Login')</script>";
            echo "<script> location ='../index.php';</script>";
        } else {
            echo "<script>alert('Username atau Password Salah!')</script>";
            echo "<script> location='../index.php'; </script>";
        }
    } else {
        echo "<script>alert('Username atau Password Salah!')</script>";
        echo "<script> location='../index.php'; </script>";
    }
}
