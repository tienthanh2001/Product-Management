<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style_product.css">
    <link rel="stylesheet" href="./fonts/css/all.css">
    <link rel="stylesheet" href="./style/style_edit.css">
    <link rel="stylesheet" href="./style/button.css">
   
    <style>

input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  /* border-radius: 4px;  */
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  box-sizing: border-box;
}




button {
 color: white;
 padding: 10px 10px;
 font-size: 18px;
 border-top-right-radius: 4px;
 border-bottom-right-radius: 4px;
 background: #458f46;
 border: none;


}

button:hover {
   background-color: #61b163;
}

    </style>
</head>
<body style="margin-bottom: 80px;">
<?php

    session_start();
    if (! isset($_SESSION['mySession']) ) {
        header('location:index.php');
    }
?>





<h1>QUẢN LÍ SẢN PHẨM</h1>

<div class="total_impact">


   <form action="" method="get">
      <div class="icon_search"  style="display: flex; justify-content: center;align-items: center; margin: 10px;">
      <input type="text" class="shearch" name="search_content" placeholder="Nội dung tìm kiếm">
      <button type="submit" name="timkiem" ><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>

   </form>

 



   
</div> 







<div class="table-users">

   
   <table cellspacing="0">


   <tr>
         <th style="border:none; font-weight:600; color: #fff;">ID</th>
         <th style="border:none; font-weight:600; color: #fff;">Tên sản phẩm</th>
         <th style="border:none; font-weight:600; color: #fff;">Hình ảnh</th>
         <th style="border:none; font-weight:600; color: #fff;">Giá</th>
         <th width="230" style="border:none; font-weight:600; color: #fff;">Công dụng chính</th>
      </tr>


   <?php  

    include "connect.php";
    if(isset($_GET['search_content']) && $_GET['search_content'] != ''){
        $sql = 'SELECT * FROM 	webbanat WHERE name LIKE "%'.$_GET['search_content'].'%"';
    }else{

        $sql = "SELECT * FROM webbanat"; 
    }
 
    
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)) {
    ?>

        <tr>
            <td style="border: 1px solid #ddd;"><?php echo $row['id'] ?></td >
            <td style="border: 1px solid #ddd;"><?php echo $row['name'] ?></td>
            <td style="border: 1px solid #ddd;"><img src="./img/product/<?php echo $row['image'] ?>" alt=""></td>
            <td style="border: 1px solid #ddd;"><?php echo $row['price'] ?></td>
            <td style="border: 1px solid #ddd;"><?php echo $row['warranty'] ?></td>
           
        </tr>
   <?php } ?>
   
   </table>

   

</div>
<div class="button_last">
    <a  href="./logout.php"><input type="submit" id="button" name="btn_login" value="Đăng xuất" style="  width:108px ;"></a>

</div>







</body>
</html>