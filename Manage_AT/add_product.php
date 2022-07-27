<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style_form_input.css">
    <link rel="stylesheet" href="./style/button.css">
 
</head>
<body>
<?php

session_start();
if (! isset($_SESSION['mySession']) ) {
    header('location:index.php');
}
?>
<h1>THÊM SẢN PHẨM</h1>

<?php 
// Lệnh require, require_once, include và include_once dùng để 
// import một file PHP A vào một file PHP B với mục đích giúp file
//  PHP B có thể sử dụng được các thư viện trong file PHP A.
    include "connect.php";
    // $ _POST được sử dụng để thu thập các giá trị từ một biểu mẫu có phương thức = "post"
    if(isset($_POST['btn_add'])){ //bắt sự kiến ấn vào nút Thêm giữ liệu
        $name = $_POST['name'];
        $image = $_FILES['image']['name']; //Dòng này chỉ để lấy tên hình ảnh
        $image_tmp_name = $_FILES['image']['tmp_name']; //Dòng này để lấy đường dẫn đến ảnh, ở bất cứ đâu
        $price = $_POST['price'];
        $warranty = $_POST['warranty'];
        //câu truy vấn
        $sql = "INSERT INTO webbanat(name, image, price, warranty)  
        VALUE('$name', '$image', '$price', '$warranty') ";
        mysqli_query($conn, $sql); //truy vấn cơ sở dữ liệu
        // Hàm move_uploaded_file() dùng để di chuyển tập tin được tải lên vào một nơi được chỉ định
       move_uploaded_file( $image_tmp_name, 'img/product/'.$image );
    //    header('location: product.php');
    }

?>


<div class="btn_add">
   <a href="./product.php"><button class="btn6">Quay về mục sản phẩm</button></a>

</div>

<div class="add_mentor">
   <div class="menber">
    <form action="add_product.php" method="post" enctype="multipart/form-data">
       <input type="text" class="form" name="name" placeholder="Tên sản phẩm">
          
       <input type="file" class="form" name="image" placeholder="Hình ảnh">
       
       <input type="text" class="form" name="price" placeholder="Giá"> 
       <input type="text" class="form" name="warranty" placeholder="Công dụng chính">
         <input type="submit" id="button" name="btn_add" value="Thêm giữ liệu">
         </form>
   </div> 
</div>
</body>
</html>