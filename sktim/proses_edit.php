<?php
include "../koneksi.php";

    // cek apakah tombol simpan sudah diklik atau belum
    if(isset($_POST["ubah"])){
        // ambil data dari formulir
        $id            = $_POST['id_sktim'];
        $no_agenda     = $_POST["no_agenda"];
        $no_sk         = $_POST["no_sk"];
        $tanggal       = $_POST["tanggal"];
        $tentang       = $_POST["tentang"];
        $tujuan        = $_POST["tujuan"];

        $oldfile = $_POST['old'];
        $file = $_FILES['file']['name'];
        if($file!="") {
        move_uploaded_file($_FILES['file']['tmp_name'],'../assets/file/'.$file);
        } else {
        $file = $oldfile;
        } 

        // buat query update
        $sql = "UPDATE sktim SET 
                       no_agenda    ='$no_agenda', 
                       no_sk        ='$no_sk',
                       tgl_surat    ='$tanggal', 
                       tentang      ='$tentang',
                       tujuan       ='$tujuan',
                       file         ='$file' 
                WHERE id_sktim='$id'";
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if($query){
            echo "
                <script>
                    alert ('Data Berhasil Diubah!');
                    document.location.href = '../sktim.php';
                </script>
                ";
        } else {
            // kalau gagal tampilkan pesan
            echo "
                <script>
                    alert ('Data Gagal Dihapus');
                    document.location.href = '../sktim.php';
                </script>
                ";
        }
    } else {
        die("Akses dilarang...");
    }
?>