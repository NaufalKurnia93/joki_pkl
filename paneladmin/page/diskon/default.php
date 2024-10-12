<?php
include_once "page/diskon/diskon.php";
include_once "../koneksi.php";

// var_dump($_GET); // cek debugging

$act = isset($_GET['act']) ? $_GET['act'] : '';
// echo "Action: " . $act . "<br>"; // Debugging variable act

switch ($act) {
    case 'tambah':
        include('register.php');
        break;

    case 'hapus':
        include('hapus.php');
        break;


    default:
        include('index.php');
        break;
}

