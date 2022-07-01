<?php
include "../koneksi.php";

    // cek apakah tombol simpan sudah diklik atau belum
    if(isset($_POST["daftar"])){
        // ambil data dari formulir
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $bidang = $_POST["bidang"];
        $level = $_POST["level"];
        //die($_POST["level"]);
      

        // buat query update
        $sql = "UPDATE user SET username='$username', password='$password', bidang='$bidang',level='$level'  WHERE id='$id'";
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if($query){
            header("Location: ../operator.php");
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }
    } else {
        die("Akses dilarang...");
    }
?>