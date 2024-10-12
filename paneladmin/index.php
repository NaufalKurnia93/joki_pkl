<?php

include_once('../koneksi.php');
include_once('access/admin.php');

$pdo = dataBase::connect();
$user = Access::getInstance($pdo);
$userInfo = $user->cari_pengguna();
//cek login
if ($user->cekLogin() == false) { //belum login
    $login = isset($_GET['access']) ? $_GET['access'] : 'access';
    switch ($login) {
        case 'login':
            include 'access/login.php';
            break;
        case 'register':
            include 'access/register.php';
            break;
        case 'lupaPasword':
            include 'access/lupaPaswd.php';
            break;
            case 'logout':
                include 'access/aksesLogout.php';
                break;
        default:
            include('access/login.php');
            break;
    }  
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ADMIND JOKLAP</title>
</head>

<body>
    
        <?php
        include 'layout/header.php';
        ?>

        <div class="main-content" style="min-height: 76vh;">
            <section class=" section">
                <?php
                $halaman_get = isset($_GET['page']) ? $_GET['page'] : "";
                switch ($halaman_get) {
                    case 'dashboard':
                        include('page/dashboard.php');
                        break;
                    case 'diskon':
                        include('page/diskon/default.php');
                        break;
               
                    default:
                        include('page/dashboard.php');
                        break;
                }
                ?>
            </section>
        </div>
 
            <!-- Script untuk menginisialisasi DataTables -->
            <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable(); // Menginisialisasi DataTables untuk semua tabel di halaman
            });
        </script>

<?php
        include 'layout/footer.php';
        ?>

        

</body>

</html>