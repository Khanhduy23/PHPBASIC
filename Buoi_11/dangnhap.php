<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-form{
            text-align: center;
            border: 1px solid #666;
        }
        input{
            width: 30%;
            height: 10%;
            padding: 20px 0;
            margin: 10px; 
        }
    </style>
</head>
<body>
    <div class="container-form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="user" placeholder="Tên đăng nhập"><br>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="submit" value="Đăng nhập" name="login">
    </form>
    <?php
    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        // echo "Tài khoản của bạn là: ".$user.'<br>';
        // echo " Mật khẩu của bạn là: ".$pass;
        if(($user == 'admin') && ($pass == '123')){
            echo "<h3>Đăng nhập thành công</h3>";
        }else{
            echo "<h3>Đăng nhập thất bại</h3>";
        }
    }
    ?>
    </div>
</body>
</html>