<?php

session_start();

$connection = mysqli_connect("localhost", "root", "", "UAS_Nazlah_123");

if (mysqli_connect_errno()) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}
