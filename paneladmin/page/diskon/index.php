<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diskon MAster</title>
</head>

<body>

  <div class="container mt-4 py-4">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-12">
        <div class="card bg-gradient-dark my-4">
          <div class="card-header p-2 text-center bg-gradient-primary">
            <h6>table data</h6>
          </div>

          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">

              <table class="table  table-hover text-center align-items-center mb-0" id="dataTables-example">

                <thead>
                  <tr>
                    <th class="text-uppercase text-light text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-light text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-light text-xxs font-weight-bolder opacity-7">foto</th>
                    <th class="text-uppercase text-light text-xxs font-weight-bolder opacity-7 ps-2">Nomor W,a</th>

                  </tr>
                </thead>

                <tbody class="text-light">
                  <?php
                  require_once '../koneksi.php';
                  require_once 'diskon.php';

                  $pdo = dataBase::connect();
                  $diskon = Diskon::getInstance($pdo);
                  $datadiskon = $diskon->getAll();
                  $no = 1;

                  foreach ($datadiskon as $row) {
                  
                    ?>
                    <tr>
                      <td class="text-center">
                        <?php echo $no++ ?>
                      </td>
                      <td>
                        <?php echo htmlspecialchars($row['nama_diskon']); ?>
                      </td>
                      <td>
                                <?php
                                $gambarPath = '../uploads/' . htmlspecialchars($row['foto']);
                                if (file_exists($gambarPath)) {
                                    echo '<img src="' . $gambarPath . '" width="180">';
                                } else {
                                    echo 'Gambar tidak ditemukan';
                                }
                                ?>
                            </td>

                      <td>
                        <?php echo htmlspecialchars($row['nomor']); ?>
                      </td>
                      <td class="text-center">

                        <a href="index.php?page=diskon&act=hapus&id_diskon=<?php echo $row['id_diskon'] ?>"
                          class="btn btn-danger btn-sm">Hapus</a>



                      </td>
                    </tr>
                    <?php
                  }
                  dataBase::disconnect();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>