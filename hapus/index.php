<?php

require_once "../koneksi.php";

$id = mysqli_real_escape_string($connection, $_GET["id"]);
$check = mysqli_query($connection, "DELETE FROM `tb_handphone` WHERE `ID_HP`='$id'");

if (mysqli_error($connection)) {
    echo "<script>alert('Gagal menghapus data!');</script>";
}

header("location: ../");
