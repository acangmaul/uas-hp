<?php

require_once "../koneksi.php";

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);

$res = mysqli_query(
    $connection,
    "SELECT * FROM `tb_user` 
    WHERE `Username`='$username'"
);

if (mysqli_num_rows($res) > 0) {
    echo "<script>
      if(!alert('Akun sudah terdaftar!'))
        window.location.href = '../login';
    </script>";
} else {
    mysqli_query(
        $connection,
        "INSERT INTO `tb_user`
        (Username, Pass)
        VALUES ('$username', '$password')"
    );

    if (mysqli_error($connection)) {
        echo "<script>
          if(!alert('Gagal membuat akun'))
            window.location.href = './';
        </script>";
    }

    header("location: ../login");
}
