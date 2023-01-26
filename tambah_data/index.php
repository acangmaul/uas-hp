<?php
require_once "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <title>Tambah Data HP</title>
</head>

<body>
  <div class="container">
    <h3 class="fw-bold text-center">Tambah Data HP</h3>
    <form action="handler.php" method="post">
      <div class="mb-3">
        <label for="merk" class="form-label">Merk</label>
        <input type="text" name="merk" id="merk" class="form-control" maxlength="20" required>
      </div>

      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" name="harga" id="harga" class="form-control" maxlength="11" required>
      </div>

      <div class="mb-3">
        <label for="spesifikasi" class="form-label">Spesifikasi</label>
        <textarea name="spesifikasi" id="spesifikasi" class="form-control" cols="30" rows="3" required></textarea>
      </div>

      <div class="mb-3">
        <label for="gambar" class="form-label">Gambar (URL)</label>
        <input type="text" name="gambar" id="gambar" class="form-control" maxlength="1000" required>
      </div>

      <a class="btn btn-danger" href="../">Cancel</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
