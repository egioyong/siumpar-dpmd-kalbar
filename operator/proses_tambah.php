<?php
include "../koneksi.php";

if(isset($_POST["daftar"])){
    // ambil data dari formulir
    $username = $_POST["username"];
    $password = $_POST["password"];
    $bidang = $_POST["bidang"];
    $level = $_POST["level"];

    $sql = "INSERT INTO user(username, password, bidang, level) VALUE ('$username','$password','$bidang','$level')";
    $query = mysqli_query($db,$sql);
    if($query){
        // kalau berhasil alihkan ke halaman operator.php dengan status = sukses
        header("Location: ../operator.php?status=sukses");
    } else {
        // kalau gagal alihkan ke halaman operator.php dengan status = gagal
        header("Location: ../operator.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}

?>