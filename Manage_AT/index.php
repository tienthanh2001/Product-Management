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
    session_start();


    if(isset($_POST['btn_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM thanhvien WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);
        // Hàm mysqli_num_rows() sẽ trả về số hàng trong tập hợp kết quả truyền vào.      
        if(mysqli_num_rows($result) == 1){
            if($username == 'admin' && $password == 123456){
                header("location:product.php");
                $_SESSION['mySession'] = $username; //Nếu tồn tại tài khoản thì lưu 1 session
            } else {
                header("location:product_user.php");
                $_SESSION['mySession'] = $username; //Nếu tồn tại tài khoản thì lưu 1 session
            }
        } else {
           
?>
    <script>
        alert("Tên đăng nhập hoặc mật khẩu sai, vui lòng nhập lại!");
    </script>



        <?php } ?>

    <?php } ?>









<h1>ĐĂNG NHẬP</h1>


<div class="add_mentor">
   <div class="menber">
    <form method="post" enctype="multipart/form-data">
       <input type="text" class="form" name="username" placeholder="Tên đăng nhập" value="">
       <input type="password" class="form" name="password" placeholder="Mật Khẩu" value="">
       <div class="log">
       <input type="submit" id="button" name="btn_login" value="Đăng nhập">
       <input type="submit" id="button" name="btn_signup" value="Đăng kí"></a>
       </div>
         
         </form>
   </div> 
</div>

<?php
    if(isset($_POST['btn_signup'])){
        header("location: signup.php");
        }
    
?>


</body>
</html>