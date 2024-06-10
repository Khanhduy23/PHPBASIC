<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            background-color: azure;
        }
        .container-form{
            position: relative;
            top: 100px;
            text-align: center;
            background-color: rgb(255, 255, 255);
            border: 1px solid gainsboro;
            margin: auto;
            width: 30%;
            min-width: 300px;
            border-radius: 5px;
        }
        input{
            padding: 10px;
            width: 80%;
            margin: 10px;
        }
        input[type='submit']{
            width: 20%;
        }
        label{
            float: left;
            padding-left: 35px;
        }
    </style>
</head>
<body>
    <?php
        $msg = ''; // Khởi tạo biến $msg
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $re_pass = $_POST['re_pass'];
            $email = $_POST['email'];

            if ($user == '') {
                $msg = 'Nhập tên đăng nhập';
            } elseif ($pass == '') {
                $msg = 'Nhập Password';
            } elseif ($re_pass == '') {
                $msg = 'Nhập lại mật khẩu';
            } elseif ($email == '') {
                $msg = 'Nhập Email';
            } elseif ($pass != $re_pass) {
                $msg = 'Mật khẩu nhập lại không khớp';
            } else {
                $msg = 'Đăng ký thành công';
                // Thực hiện các hành động tiếp theo ở đây, ví dụ: lưu thông tin vào cơ sở dữ liệu
            }
        }
    ?>
    <div class="container-form">
        <h2>Đăng ký thành viên</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="">Tên đăng nhập</label><br>
            <input type="text" name="user" id=""><br>
            <label for="">Mật khẩu</label><br>
            <input type="password" name="pass" id=""><br>
            <label for="">Nhập lại mật khẩu</label><br>
            <input type="password" name="re_pass" id=""><br>
            <label for="">Email</label><br>
            <input type="email" name="email" id=""><br>
            <input type="submit" value="Đăng ký" name="dangky"><br>
            <p><?php echo $msg; ?></p>
        </form>
    </div>
</body>
</html>
