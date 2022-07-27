<?php 
// Lệnh require, require_once, include và include_once dùng để 
// import một file PHP A vào một file PHP B với mục đích giúp file
//  PHP B có thể sử dụng được các thư viện trong file PHP A.
include 'connect.php';

// Với phương thức GET thì dữ liệu được thấy trên URL
$delete_produce = $_GET['this_id'];
$sql = " DELETE FROM webbanat WHERE id='$delete_produce'";
mysqli_query($conn, $sql);
// Bạn có thể sử dụng thẻ header để điều hướng, chuyển hướng trang
header('location: product.php');




?>