<?php 
include "../koneksi.php";

if(isset($_GET['id'])){

$id = $_GET['id'];

$sql   = "DELETE FROM spt WHERE id_spt = $id";
$query = mysqli_query($db,$sql);

    if($query){
        echo"
        <script>
            alert ('Data Berhasil Dihapus!');
            document.location.href = '../spt.php';
        </script>
       ";
    }


}

?>