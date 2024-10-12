<!-- <?php
include_once "../koneksi.php";
include_once "admin.php";

$pdo = dataBase::connect();
$user = Access::getInstance($pdo);


// if ($user->cekLogin()) {
// 	header("Location: ../index.php");
// }
// if (isset($_POST["buat"])) {
// 	$nama = htmlspecialchars($_POST["nama"]);
// 	$username = htmlspecialchars($_POST["username"]);
// 	$email = htmlspecialchars($_POST["email"]);
// 	$no_telp = htmlspecialchars($_POST["no_telp"]);
// 	$password = htmlspecialchars($_POST["password"]);


// 	if ($user->new_user($nama, $username, $email, $no_telp, $password)) {
// 		// Redirect ke halaman lain jika registrasi berhasil
// 		header("Location: index.php?&access=login&cek=apply"); // Ganti 'success' dengan halaman tujuan Anda
// 		exit();
// 	} else {
// 		header("Location: index.php?access=register&cek=rawr2");
// 		exit();
// 	}
// }
?>


<!DOCTYPE HTML>
<html>

<head>
	<title>akun baru</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		document.addEventListener("DOMContentLoaded", function () {
			<?php
			// if (isset($_GET['akses'])) {
			// 	switch ($_GET['cek']) {
			// 		case 'apply':
			// 			echo "Swal.fire({
            //                 icon: 'success',
            //                 title: 'Daftar Akun Berhasil',
            //                 text: 'Anda telah berhasil terdaftar. Silakan login.'
            //                 }).then((result) => {
            //                 if (result.isConfirmed) {
            //                     window.location.href = 'index.php?access=login';
            //                 }
            //                 });";
			// 			break;

			// 		case 'err4':
			// 			echo "Swal.fire({
            //                 icon: 'error',
            //                 title: 'Terjadi kesalahan!',
            //                 text: 'Silakan coba lagi nanti.',
            //                 showConfirmButton: false,
            //                 timer: 3000
            //             });";
			// 			break;
			// 	}
			// }
			?>
		});
	</script>

</head>

<body style="background:#586df5;">
	<div class="container">

		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-lg-6">
				<br />
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Buat Akun</h4>
					</div>
					<div class="card-body">
						<form action="" method="POST">

							<div class="form-group row justify-content-center">
								<label for="inputNama" class="col-sm-3 col-form-label">Nama :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputNama" name="nama" required>
								</div>
							</div>

							<div class="form-group row justify-content-center">
								<label for="inputEmail" class="col-sm-3 col-form-label">Email :</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="inputEmail" name="email" required>
								</div>
							</div>

							<div class="form-group row justify-content-center">
								<label for="inputNoTelp" class="col-sm-3 col-form-label">Telepon :</label>
								<div class="col-sm-8">
									<input type="number" class="form-control" id="inputNoTelp" name="no_telp" required>
								</div>
							</div>

							<div class="form-group row justify-content-center">
								<label for="inputUsername" class="col-sm-3 col-form-label">Username :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="inputUsername" name="username" required>
								</div>
							</div>

							<div class="form-group row justify-content-center">
								<label for="inputPassword" class="col-sm-3 col-form-label">Password :</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="inputPassword" name="password"
										required>
								</div>
							</div>


							<div class="form-group">
								<div class="d-flex justify-content-between pt-3 mx-3">
									<button type="submit" class="btn btn-primary" name="buat"><i class="fa fa-plus"></i>
										Buat akun</button>
									
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html> -->