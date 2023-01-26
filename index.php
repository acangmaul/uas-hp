<?php
require_once "./koneksi.php";

if (!isset($_SESSION["username"])) {
  echo "<script>
    if (!alert('Anda belum login!'))
      window.location.href = 'login';
  </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <title>Data Handphone</title>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-between">
      <h1 class="fw-bold">DAFTAR HANDPHONE</h1>
      <div class="d-flex gap-2">
        <span>Halo <?php echo $_SESSION["username"]; ?></span>
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <h5>Menampilkan berbagai merk hp seperti Samsung, Oppo, dan Apple</h5>
    <a class="btn btn-outline-primary" href="tambah_data">Tambah Data HP</a>

    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Merk Handphone</th>
          <th scope="col">Harga</th>
          <th scope="col">Spesifikasi</th>
          <th scope="col">Gambar</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $daftar_hp = mysqli_query($connection, "SELECT * FROM `tb_handphone`");
        while ($hp = mysqli_fetch_assoc($daftar_hp)) { ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $hp["Merk_HP"]; ?></td>
            <td><?php echo $hp["Harga"]; ?></td>
            <td><?php echo $hp["Spesifikasi"]; ?></td>
            <td>
              <img width="100px" src="<?php echo $hp["Gambar"]; ?>" alt="<?php echo $hp["Merk_HP"]; ?>">
            </td>
            <td>
              <div class="d-flex gap-2">
                <a class="btn btn-warning" href="edit?id=<?php echo $hp["ID_HP"]; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus?id=<?php echo $hp["ID_HP"]; ?>">Hapus</a>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>