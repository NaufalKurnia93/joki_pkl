<?php
include_once "../koneksi.php";
include_once "admin.php";

$pdo = dataBase::connect();
$user = Access::getInstance($pdo);

// jika login di jalankan
if (isset($_POST['login'])) {
    // Mengambil dan membersihkan input dari form
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($user->login($username, $password)) {
        header("Location: index.php?page=dashboard&cek=passed");
        exit();
    } else {
        header("Location: index.php?access=login&cek=rawr3");
        exit();
    }

}
?>

<!doctype html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Account</title>
</head>

<body class="bg-primary">
    <div class="container mt-5">
        <section class="section">
            <?php if (isset($_GET['cek'])): ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        <?php
                        if ($_GET['cek'] == "rawr3") {
                            ?>
                            Swal.fire({
                                icon: 'error',
                                title: 'username atau Password salah',
                                showConfirmButton: false,
                                timer: 2500
                            });
                        <?php } elseif ($_GET['cek'] == "logout") { ?>
                            Swal.fire({
                                icon: 'success',
                                title: 'Logout Berhasil',
                                showConfirmButton: false,
                                timer: 2500
                            });

                            <?php
                          }
                        ?>
                    });
                </script>
            <?php endif; ?>
            <div class="row ">
                <div class="col-sm-5 offset-sm-4 ">

                    <div id="notifikasi">
                        <div class="alert alert-info text-dark ">
                            <small>Login Anda Gagal, Periksa Kembali Username dan Password</small>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-block">
                            <h4 class="card-title text-center">Sign in</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" class="form-control" placeholder="masukkan username"
                                        type="text" required="required" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" class="form-control" placeholder="******" type="password"
                                        required="required" autocomplete="off">
                                    <div class="float-right">
                                        <a href="index.php?access=forget" class="text-small">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="login" class="btn btn-primary btn-block"> Login
                                    </button>
                                </div>

                            </form>
                            <!-- <div class="pt-2 text-center text-muted ">
                                <p>Belum Memiliki Akun?. <a href="index.php?access=register">Buat Akun</a></p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>
                <div class="col-sm-4 ">
                </div>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>