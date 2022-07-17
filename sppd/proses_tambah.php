<?php
include "../koneksi.php";

if(isset($_POST["tambah"])){
    // ambil data dari formulir
    $no_agenda     = $_POST["no_agenda"];
    $tanggal       = $_POST["tanggal"];
    $no_surat      = $_POST["no_sppd"];
    $nama          = $_POST["nama"];
    $tujuan        = $_POST["tujuan"];
    $kegiatan      = $_POST["kegiatan"];
    $lama          = $_POST["lama"];

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

    


    $sql = "INSERT INTO sppd(no_agenda,tgl_surat,no_sppd,nama,tujuan,kegiatan,lama,file) 
    VALUE(
        '$no_agenda',
        '$tanggal',
        '$no_surat',
        '$nama',
        '$tujuan',
        '$kegiatan',
        '$lama',
        '$namaFileBaru'
        )";
$query = mysqli_query($db,$sql);
if($query){
    echo "
    <script>
         alert ('Data Berhasil Ditambahkan!');
         document.location.href = '../sppd.php';
     </script>
    ";
    
 } else {
     echo 
     "<script>
          alert ('Data Gagal Ditambahkan!');
         document.location.href = '../sppd.php';
      </script>
     ";
 }
} else {
 die("Akses dilarang...");


}

?>