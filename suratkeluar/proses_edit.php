<?php
include "../koneksi.php";

    // cek apakah tombol simpan sudah diklik atau belum
    if(isset($_POST["ubah"])){
        // ambil data dari formulir
        $id             = $_POST['id_suratkeluar'];
        $no_agenda     = $_POST["no_agenda"];
        $no_surat      = $_POST["no_surat"];
        $tanggal       = $_POST["tanggal"];
        $perihal       = $_POST["perihal"];
        $tujuan        = $_POST["tujuan"];

        $oldfile = $_POST['old'];
        $file = $_FILES['file']['name'];
        if($file!="") {
        move_uploaded_file($_FILES['file']['tmp_name'],'../assets/file/'.$file);
        } else {
        $file = $oldfile;
        } 

        // buat query update
        $sql = "UPDATE suratkeluar SET 
                       no_agenda    ='$no_agenda', 
                       no_surat     ='$no_surat',
                       tgl_surat    ='$tanggal', 
                       perihal      ='$perihal',
                       tujuan       ='$tujuan',
                       file         ='$file' 
                WHERE id_suratkeluar='$id'";
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if($query){
            echo "
                <script>
                    alert ('Data Berhasil Diubah!');
                    document.location.href = '../suratkeluar.php';
                </script>
                ";
        } else {
            // kalau gagal tampilkan pesan
            echo "
                <script>
                    alert ('Data Gagal Dihapus');
                    document.location.href = '../suratkeluar.php';
                </script>
                ";
        }
    } else {
        die("Akses dilarang...");
    }
?>