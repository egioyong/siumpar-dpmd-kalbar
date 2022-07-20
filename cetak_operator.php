<?php

require_once __DIR__ . '/vendor/autoload.php';

include "koneksi.php";
$result = mysqli_query($db, "SELECT * FROM user");

$mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Operator</title>
</head>
<body>
<center>
   <h1>Data Operator</h1>
   <table border="1" cellpadding="10" cellspacing="0">
       <tr>
           <th>No</th>
           <th>Username</th>
           <th>Password</th>
           <th>Bidang</th>
           <th>Level</th> 
       </tr>';
       $i =1;
       foreach($result as $list){
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td>'. $list["username"].'</td>
            <td>'. $list["password"].'</td>
            <td>'. $list["bidang"].'</td>
            <td>'. $list["level"].'</td>
        </tr>';
       }
$html .=  '</table>
</center>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('Data-Operator.pdf',\Mpdf\Output\Destination::INLINE);
?>
