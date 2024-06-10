<?php
      // cung cấp bắt đầu một phiên làm việc 
      session_start();
      // bắt đầu bộ nhớ đệm đầu ra -kiểm soát,làm sạch,quản lý lỗi , tối ưu hiệu xuất  (ob_start()),
      ob_start();
      // ob_start() có thể được thực hiện để kiểm soát dữ liệu đầu ra hoặc để sử dụng các tính năng liên quan đến xử lý dữ liệu đầu ra trong mã PHP của bạn.
      if(isset($_POST['submit']) && $_POST['submit']) {
            // Nếu nút submit được nhấn và có giá trị, điều kiện này sẽ trả về true. Điều này giúp xác định rằng biểu mẫu đã được gửi và nút submit đã được nhấn.
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $user = [$user, $pass];
            $_SESSION['user'] = $user;
            // $_SESSION['user'] = $user; là một dòng mã PHP được sử dụng để lưu trữ thông tin của người dùng vào biến phiên (session variable) có tên là 'user'.
            header('location: logined.php');
            // . Cuối cùng, nó chuyển hướng người dùng đến trang logined.php bằng cách sử dụng hàm header().
      }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Đăng nhập</title>
      <style>
            body{
                  width: 100%;
            }
            form{
                  width: 30%;
                  margin: auto;
                  background-color: rgb(238, 209, 209);
                  text-align: center;
            }
            input[type="text"],input[type="password"]{
                  padding: 5px;
                  width: 200px;
                  margin: 10px;
            }
            input[type="submit"]{
                  padding: 5px;
            }
      </style>
</head>
<body>
      <form action="login.php" method="post">
            <h1>Đăng nhập</h1>
            <label for="">User</label>
            <input type="text" name="user"><br>
            <label for="">Pass</label>
            <input type="password" name="pass"><br>
            <input type="submit" name="submit" value="Đăng nhập">
      </form>
</body>
</html>