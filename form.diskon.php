<?php
require_once 'koneksi.php';
require_once 'paneladmin/page/diskon/diskon.php';

$pdo = dataBase::connect(); // Menghubungkan ke database
$diskon = Diskon::getInstance($pdo);

if (isset($_POST['save'])) {
    $nama_diskon = htmlspecialchars($_POST['nama_diskon']);
    $foto = $_FILES["foto"]["name"];
    $tmpname = $_FILES["foto"]["tmp_name"];
    $nomor = htmlspecialchars($_POST['nomor']);

    // Daftar format yang diperbolehkan
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
    $file_extension = strtolower(pathinfo($foto, PATHINFO_EXTENSION));

    // Cek apakah ekstensi ada dalam daftar yang diperbolehkan
    if (!in_array($file_extension, $allowed_types)) {
        echo "Format file tidak diperbolehkan. Hanya file dengan format: " . implode(", ", $allowed_types) . " yang diizinkan.";
    } else {
        // Pindahkan file ke folder uploads
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($foto);
        $uploadOk = 1;

        // Cek apakah file adalah gambar
        $check = getimagesize($tmpname);
        if ($check === false) {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // Cek ukuran file
        if ($_FILES["foto"]["size"] > 500000) {
            echo "Maaf, ukuran file terlalu besar.";
            $uploadOk = 0;
        }

        // Cek jika $uploadOk di set ke 0 oleh kesalahan
        if ($uploadOk == 0) {
            echo "Maaf, file tidak dapat diupload.";
        } else {
            if (move_uploaded_file($tmpname, $target_file)) {
                // Panggil metode untuk menyimpan data
                $result = $diskon->tambah($nama_diskon, $foto, $nomor);

                if ($result) {
                    echo "<script>window.location.href = 'index.html';</script>";
                } else {
                    echo "peringatan! data gagal di tambahkan.";
                }
            } else {
                echo "Maaf, terjadi kesalahan saat mengupload file.";
            }
        }
    }
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
          .parallax {
            background-image: url(aksesoris/bg-diskon.jfif);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
           min-height: 100vh;
           object-fit: cover;
           width: 100%;
           position: absolute;
           box-sizing: border-box;
        }

        .parallax-form {
            background-image: url(aksesoris/bg-form.jfif);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
           object-fit: cover;
           width: 100%;
    
           box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="section">
    <div class="parallax">
<div class="container ">
    <div class=" card parallax-form border shadow-lg mt-5">
      <div class="card-header mx-auto p-3 bg-success rounded text-white text-center mt-5">
        <h4>Form Ajuan diskon</h4>
      </div>
      <div class="card-body bg-dark my-4 mx-auto">
      <form method="POST" action="" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label text-success">Nama </label>
            <input type="text" name="nama_diskon" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label text-success">Foto sama Ceo </label>
            <input class="form-control" name="foto" type="file" id="foto" required>
          </div>

          <div class="mb-3">
            <label for="nomorWa" class="form-label text-success">Nomor WhatsApp</label>
            <input type="tel" class="form-control" name="nomor" id="nomorWa" placeholder="Masukkan nomor WhatsApp" required>
          </div>

          <div class="text-center">
            <button type="submit" name="save" class="btn btn-success">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
 </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>