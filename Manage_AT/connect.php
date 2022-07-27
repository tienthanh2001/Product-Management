<?php

$sever = 'localhost';
$user = 'root';
$pass = '';
$database = 'webat';


$conn = new mysqli($sever, $user, $pass, $database);
mysqli_set_charset($conn, 'UTF8');

//  if($conn){
//         mysqli_query($conn, "SET NAMES 'utf8' " );
//         echo 'Kết nối thành công';
//     } else {
//         echo 'Kết nối thất bại';
//     }

?>
