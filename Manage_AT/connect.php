<?php

$sever = 'localhost';
$user = 'root';
$pass = '';
$database = 'webat';


$conn = new mysqli($sever, $user, $pass, $database);
mysqli_set_charset($conn, 'UTF8');



?>
