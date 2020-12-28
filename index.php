<?php
session_start();
if (!$_SESSION) {
    include "views/login.php";
} else {
    include "views/dashboard/dashboard.php";
}
