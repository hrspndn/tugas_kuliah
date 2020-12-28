<?php
session_start();

if ($_SESSION) {
    session_destroy();
    echo "<script> alert('Anda Berhasil Logout')</script>";
    echo "<script> location ='../index.php';</script>";
} else {
    echo "<script> alert('Anda Berhasil Logout')</script>";
    echo "<script> location ='../index.php';</script>";
}
