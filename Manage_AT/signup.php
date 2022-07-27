<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style_edit.css">
    <title>Document</title>
    <style>
        .log{
        display: flex;
        justify-content: center;

    }
    #button{
        margin: 25px;
    }
    </style>
</head>
<body>
<?php
    include "connect.php";

    if(isset($_POST['btn_signup'])){
        $id = '';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = 2;

        $sql = "INSERT INTO thanhvien(id, username, password, level)
        VALUES ('$id', '$username', '$password', '$level');";
        mysqli_query($conn, $sql);
        header('location:index.php');
    }

?>

<h1>ĐĂNG KÍ</h1>


<div class="add_mentor">
   <div class="menber">
    <form method="post" enctype="multipart/form-data">
       <input type="text" class="form" name="username" placeholder="Tên đăng nhập" value="">
       <input type="password" class="form" name="password" placeholder="Mật Khẩu" value="">
      
       
       <input type="submit" id="button" name="btn_signup" value="Đăng kí"></a>
    
         
         </form>
   </div> 
</div>



</body>
</html>