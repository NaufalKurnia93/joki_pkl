<?php

if (empty($_GET['id_diskon'])) {
    header("Location: index.php");
    exit; // Menambahkan exit untuk menghentikan eksekusi lebih lanjut
}

$id_diskon = $_GET['id_diskon'];

$pdo = dataBase::connect();
$diskon = Diskon::getInstance($pdo);

// Panggil fungsi hapus yang sudah dimodifikasi
$result = $diskon->hapus($id_diskon);
dataBase::disconnect();

if ($result) {
    echo "<script>window.location.href = 'index.php?page=diskon&cek=del';</script>";
} else {
    echo "<script>window.location.href = 'index.php?page=diskon&cek=failed';</script>";
}

?>
