<?php
include "../koneksi.php";

if(isset($_POST["tambah"])){
    // ambil data dari formulir
    $no_agenda     = $_POST["no_agenda"];
    $asal_surat    = $_POST["asal_surat"];
    $perihal       = $_POST["perihal"];
    $no_tgl_surat  = $_POST["no_tgl_surat"];
    $tgl_terima    = $_POST["tgl_terima"];
    $tgl_naik      = $_POST["tgl_naik"];
    $tgl_turun     = $_POST["tgl_turun"];
    $bidang        = $_POST["bidang"];
    
    $namaFile      = $_FILES['file']['name'];
    $ukuranFile    = $_FILES['file']['size'];
    $error         = $_FILES['file']['error'];
    $tmpName       = $_FILES['file']['tmp_name'];

    //cek file upload
    $ekstensiFileValid = ['pdf','jpeg','jpg','png'];
    $ekstensiFile      = explode('.', $namaFile);
    $ekstensiFile      = strtolower(end($ekstensiFile));
    
            if(!in_array($ekstensiFile,$ekstensiFileValid)){
                echo "<script>
                        alert('File tidak tersedia!');
                    </script>";
                return false;
            }
            if(!$ukuranFile > 2000000){
                echo "<script>
                        alert('Ukuran File terlalu besar!');
                    </script>";
                return false;
            }

    //upload to file
    //generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;


    move_uploaded_file($tmpName, '../assets/file/' .$namaFileBaru);

    


    $sql = "INSERT INTO suratundangan(no_agenda, asal_surat, perihal,no_tgl_surat,tgl_terima,tgl_naik,tgl_turun,bidang,file) 
    VALUE(
        '$no_agenda',
        '$asal_surat',
        '$perihal',
        '$no_tgl_surat',
        '$tgl_terima',
        '$tgl_naik',
        '$tgl_turun',
        '$bidang',
        '$namaFileBaru'
        )";
$query = mysqli_query($db,$sql);
if($query){
    echo "
    <script>
         alert ('Data Berhasil Ditambahkan!');
         document.location.href = '../suratundangan.php';
     </script>
    ";
    
 } else {
     echo 
     "<script>
          alert ('Data Gagal Ditambahkan!');
         document.location.href = '../suratundangan.php';
      </script>
     ";
 }
} else {
 die("Akses dilarang...");


}

?>