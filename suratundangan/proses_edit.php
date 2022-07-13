<?php
include "../koneksi.php";

    // cek apakah tombol simpan sudah diklik atau belum
    if(isset($_POST["ubah"])){
        // ambil data dari formulir
        $id             = $_POST['id_suratundangan'];
        $no_agenda      = $_POST["no_agenda"];
        $asal_surat     = $_POST["asal_surat"];
        $perihal        = $_POST["perihal"];
        $no_tgl_surat   = $_POST["no_tgl_surat"];
        $tgl_terima     = $_POST["tgl_terima"];
        $tgl_naik       = $_POST["tgl_naik"];
        $tgl_turun      = $_POST["tgl_turun"];
        $bidang         = $_POST["bidang"];

        $oldfile = $_POST['old'];
        $file = $_FILES['file']['name'];
        if($file!="") {
        move_uploaded_file($_FILES['file']['tmp_name'],'../assets/file/'.$file);
        } else {
        $file = $oldfile;
        }
      

        // buat query update
        $sql = "UPDATE suratundangan SET 
                       no_agenda    ='$no_agenda', 
                       asal_surat   ='$asal_surat', 
                       perihal      ='$perihal',
                       no_tgl_surat ='$no_tgl_surat',
                       tgl_terima   ='$tgl_terima',
                       tgl_naik     ='$tgl_naik',
                       tgl_turun    ='$tgl_turun',
                       bidang       ='$bidang',
                       file         ='$file' 
                WHERE id_suratundangan='$id'";
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if($query){
            echo "
                <script>
                    alert ('Data Berhasil Diubah!');
                    document.location.href = '../suratundangan.php';
                </script>
                ";
        } else {
            // kalau gagal tampilkan pesan
            echo "
                <script>
                    alert ('Data Gagal Dihapus');
                    document.location.href = '../suratundangan.php';
                </script>
                ";
        }
    } else {
        die("Akses dilarang...");
    }
?>