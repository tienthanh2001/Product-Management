


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/button.css">
    <link rel="stylesheet" href="./style/style_form_input.css">
    <title>Document</title>
   

</head>
<body>
<?php

session_start();
if (! isset($_SESSION['mySession']) ) {
    header('location:index.php');
}
?>
<h1>SỬA SẢN PHẨM</h1>





<?php

include "connect.php";
// Với phương thức GET thì dữ liệu được thấy trên URL
$edit_product = $_GET['this_id_edit'];
// echo $edit_product;
$sql = "SELECT * FROM webbanat WHERE id =".$edit_product;


$query = mysqli_query($conn, $sql);



// Hàm mysqli_fetch_assoc() sẽ tìm và trả về một dòng kết quả 
// của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp.
$row = mysqli_fetch_assoc($query);




 // $ _POST được sử dụng để thu thập các giá trị từ một biểu mẫu có phương thức = "post"
 if(isset($_POST['btn_edit'])){ //bắt sự kiến ấn vào nút Thêm giữ liệu
    $name = $_POST['name'];
    $image = $_FILES['image']['name']; //Dòng này chỉ để lấy tên hình ảnh
    $image_tmp_name = $_FILES['image']['tmp_name']; //Dòng này để lấy đường dẫn đến ảnh, ở bất cứ đâu
    $price = $_POST['price'];
    $warranty = $_POST['warranty'];
    
    //câu truy vấn
    // $try = "UPDATE webbanat SET name = '$name', image = '$image', price = '$price', warranty = '$warranty' WHERE id =".$edit_product;
    // mysqli_query($conn, $try); //truy vấn cơ sở dữ liệu
    // Hàm move_uploaded_file() dùng để di chuyển tập tin được tải lên vào một nơi được chỉ định
//    move_uploaded_file( $image_tmp_name, 'img/product/'.$image );
//    header('location: product.php');
}

?>









<div class="btn_add">
   <a href="./product.php"><button class="btn6">Quay về mục sản phẩm</button></a>

</div>

<div class="add_mentor">
   <div class="menber">
    <form method="post" enctype="multipart/form-data">
       <input type="text" class="form" name="name" placeholder="Tên sản phẩm" value="<?php echo " ". $row['name']  ?>">

       <input type="file" class="form" name="image" placeholder="Hình ảnh"  >

       <input type="text" class="form" name="price" placeholder="Giá" value="<?php echo " ". $row['price']  ?>"> 
       <input type="text" class="form" name="warranty" placeholder="Công dụng chính" value="<?php echo " ". $row['warranty']  ?>">
         <input type="submit" id="button" name="btn_edit" 
         
<?php

include "connect.php";
// Với phương thức GET thì dữ liệu được thấy trên URL
$edit_product = $_GET['this_id_edit'];
// echo $edit_product;
$sql = "SELECT * FROM webbanat WHERE id =".$edit_product;


$query = mysqli_query($conn, $sql);



// Hàm mysqli_fetch_assoc() sẽ tìm và trả về một dòng kết quả 
// của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp.
$row = mysqli_fetch_assoc($query);
// echo $row['name'];



 // $ _POST được sử dụng để thu thập các giá trị từ một biểu mẫu có phương thức = "post"
 if(isset($_POST['btn_edit'])){ //bắt sự kiến ấn vào nút Thêm giữ liệu
    $name = $_POST['name'];
    $image = $_FILES['image']['name']; //Dòng này chỉ để lấy tên hình ảnh
    $image_tmp_name = $_FILES['image']['tmp_name']; //Dòng này để lấy đường dẫn đến ảnh, ở bất cứ đâu
    $price = $_POST['price'];
    $warranty = $_POST['warranty'];
    echo $name;
    //câu truy vấn
    $try = "UPDATE webbanat SET name = '$name', image = '$image', price = '$price', warranty = '$warranty' WHERE id =".$edit_product;
    mysqli_query($conn, $try); //truy vấn cơ sở dữ liệu
    // Hàm move_uploaded_file() dùng để di chuyển tập tin được tải lên vào một nơi được chỉ định
   move_uploaded_file( $image_tmp_name, 'img/product/'.$image );
   header('location: product.php');
}

?>
>
         </form>
   </div> 
</div>
</body>
</html>