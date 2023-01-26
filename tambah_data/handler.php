<?php

require_once "../koneksi.php";

$merk = mysqli_real_escape_string($connection, $_POST["merk"]);
$harga = mysqli_real_escape_string($connection, $_POST["harga"]);
$spesifikasi = mysqli_real_escape_string($connection, $_POST["spesifikasi"]);
$gambar = mysqli_real_escape_string($connection, $_POST["gambar"]);

$check = mysqli_query(
    $connection,
    "INSERT INTO `tb_handphone` 
    (Merk_HP, Harga, Spesifikasi, Gambar) 
    VALUES ('$merk', '$harga', '$spesifikasi', '$gambar')"
);

if (mysqli_error($connection)) {
    echo "<script>alert('Gagal menambahkan data!');</script>";
}

echo "<script>window.location.href = '../'</script>";
