<?php

require_once "../koneksi.php";

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);

$res = mysqli_query(
    $connection,
    "SELECT * FROM `tb_user` 
    WHERE `Username`='$username' AND `Pass`='$password'"
);

if (mysqli_num_rows($res) > 0) {
    $user = mysqli_fetch_assoc($res);
    $_SESSION["username"] = $username;
    $_SESSION["user_id"] = $user["ID_User"];

    header("location: ../");
} else {
    echo "<script>
      if(!alert('Login gagal!'))
        window.location.href = './';
    </script>";
}
