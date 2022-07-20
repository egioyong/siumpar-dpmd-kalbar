<?php
include "../koneksi.php";

if(isset($_POST["tambah"])){
    // ambil data dari formulir
    
    $asal_surat    = $_POST["asal_surat"];
    $no_surat      = $_POST["no_surat"];

    $tgl_terima    = $_POST["tgl_surat"];
    $tgl_naik      = $_POST["tgl_diterima"];
    $no_agenda     = $_POST["no_agenda"];
    $sifat         = implode(",", $_POST['sifat']);
    $diteruskan    = implode(",", $_POST['diteruskan']);
    $hormat        = implode(",", $_POST['hormat']);
    $catatan       = $_POST["catatan"];

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

    


    $sql = "INSERT INTO disposisi(asal_surat,no_surat,tgl_surat,tgl_diterima ,no_agenda,sifat,diteruskan,hormat,catatan,file)
    VALUE('$asal_surat','$no_surat','$tgl_terima','$tgl_naik','$no_agenda','$sifat','$diteruskan','$hormat','$catatan','$namaFileBaru')";
$query = mysqli_query($db,$sql);
// var_dump($sql);die();
if($query){
    echo "
    <script>
         alert ('Data Berhasil Ditambahkan!');
         document.location.href = '../disposisi.php';
     </script>
    ";
    
 } else {
     echo 
    "<script>
        alert ('Data Gagal Ditambahkan!');
         document.location.href = '../disposisi.php';
      </script>
     ";
 }
} else {
 die("Akses dilarang...");


}

?>