<?php 
// session_start();
// session_unset();
// session_destroy();
include_once "../koneksi.php";
include_once "admin.php";
    if ($user->loGout()) {
        echo "<script>window.location.href='index.php?access=logout&cek=logout'</script>";
    }
?>



