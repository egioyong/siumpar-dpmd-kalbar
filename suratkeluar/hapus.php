<?php 
include "../koneksi.php";

if(isset($_GET['id'])){

$id = $_GET['id'];

$sql   = "DELETE FROM suratkeluar WHERE id_suratkeluar = $id";
$query = mysqli_query($db,$sql);

    if($query){
        echo"
        <script>
            alert ('Data Berhasil Dihapus!');
            document.location.href = '../suratkeluar.php';
        </script>
       ";
    }


}

?>