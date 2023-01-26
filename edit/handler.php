<?php

require_once "../koneksi.php";

$id = mysqli_real_escape_string($connection, $_POST["id"]);
$merk = mysqli_real_escape_string($connection, $_POST["merk"]);
$harga = mysqli_real_escape_string($connection, $_POST["harga"]);
$spesifikasi = mysqli_real_escape_string($connection, $_POST["spesifikasi"]);
$gambar = mysqli_real_escape_string($connection, $_POST["gambar"]);

$check = mysqli_query(
    $connection,
    "UPDATE `tb_handphone` 
    SET 
        `Merk_HP`='$merk',
        `Harga`='$harga',
        `Spesifikasi`='$spesifikasi',
        `Gambar`='$gambar'
    WHERE `ID_HP`='$id'"
);

if (mysqli_error($connection)) {
    echo "<script>alert('Gagal mengupdate data!');</script>";
}

header("location: ../");
