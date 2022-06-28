<?php

$localhost = "localhost";
$database = "siumpar";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$db = mysqli_connect($localhost, $username, $password, $database);
// mengecek koneksi
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
    mysqli_close($db);
}

?>
