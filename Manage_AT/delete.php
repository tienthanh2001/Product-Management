<?php 

include 'connect.php';


$delete_produce = $_GET['this_id'];
$sql = " DELETE FROM webbanat WHERE id='$delete_produce'";
mysqli_query($conn, $sql);

header('location: product.php');




?>