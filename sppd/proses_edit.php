<?php
include "../koneksi.php";

    // cek apakah tombol simpan sudah diklik atau belum
    if(isset($_POST["ubah"])){
        // ambil data dari formulir
        $id            = $_POST['id_sppd'];
        $no_agenda     = $_POST["no_agenda"];
        $tanggal       = $_POST["tanggal"];
        $no_surat      = $_POST["no_sppd"];
        $nama          = $_POST["nama"];
        $tujuan        = $_POST["tujuan"];
        $kegiatan      = $_POST["kegiatan"];
        $lama          = $_POST["lama"];

        $oldfile = $_POST['old'];
        $file = $_FILES['file']['name'];
        if($file!="") {
        move_uploaded_file($_FILES['file']['tmp_name'],'../assets/file/'.$file);
        } else {
        $file = $oldfile;
        } 

        // buat query update
        $sql = "UPDATE sppd SET 
                       no_agenda    ='$no_agenda', 
                       tgl_surat    ='$tanggal',
                       no_sppd      ='$no_surat', 
                       nama         ='$nama',
                       tujuan       ='$tujuan',
                       kegiatan     ='$kegiatan',
                       lama         ='$lama',
                       file         ='$file' 
                WHERE id_sppd='$id'";
        $query = mysqli_query($db, $sql);

        // apakah query update berhasil?
        if($query){
            echo "
                <script>
                    alert ('Data Berhasil Diubah!');
                    document.location.href = '../sppd.php';
                </script>
                ";
        } else {
            // kalau gagal tampilkan pesan
            echo "
                <script>
                    alert ('Data Gagal Diubah');
                    document.location.href = '../sppd.php';
                </script>
                ";
        }
    } else {
        die("Akses dilarang...");
    }
?>