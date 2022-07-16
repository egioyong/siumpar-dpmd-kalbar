<?php
include "../koneksi.php";

    // cek apakah tombol simpan sudah diklik atau belum
    if(isset($_POST["ubah"])){
        // ambil data dari formulir
        $id       = $_POST["id_kepaladinas"];
        $nama     = $_POST["nama"];
        $jabatan  = $_POST["jabatan"];
        $nip      = $_POST["nip"];
    // var_dump($id);die();


        // buat query update
        $sql = "UPDATE kepaladinas SET nama='$nama', jabatan='$jabatan', nip='$nip' WHERE id_kepaladinas='$id'";
                
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if($query){
            echo "
                <script>
                    alert ('Data Berhasil Diubah!');
                    document.location.href = '../operator.php';
                </script>
                ";
        } else {
            // kalau gagal tampilkan pesan
            echo "
                <script>
                    alert ('Data Gagal Diubah');
                    document.location.href = '../operator.php';
                </script>
                ";
        }
    } else {
        die("Akses dilarang...");
    }
?>