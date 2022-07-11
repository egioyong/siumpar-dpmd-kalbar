<?php
include "../koneksi.php";

if(isset($_POST["daftar"])){
    // ambil data dari formulir
    $username = $_POST["username"];
    $password = $_POST["password"];
    $bidang   = $_POST["bidang"];
    $level    = $_POST["level"];

    $sql = "INSERT INTO user(username, password, bidang, level) 
                    VALUE(
                        '$username',
                        '$password',
                        '$bidang',
                        '$level'
                        )";
    $query = mysqli_query($db,$sql);
    if($query){
       echo "
       <script>
            alert ('Data Berhasil Ditambahkan!');
            document.location.href = '../operator.php';
        </script>
       ";
       
    } else {
        echo 
        "<script>
             alert ('Data Gagal Ditambahkan!');
            document.location.href = '../operator.php';
         </script>
        ";
    }
} else {
    die("Akses dilarang...");
}

?>