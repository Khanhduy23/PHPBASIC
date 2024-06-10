<?php
        //Là một hàm để bắt đầu một phiên bản làm việc hoặc tiếp tục một phiên làm việc hiện tại 
        //Cho phép lưu trữ và truy xuất dữ liệu qua các trang khác nhau
      session_start();
        //Khỏi tạo bộ nhớ đệm đầu ra, Điều này có nghĩa là bất kỳ đầu ra nào được tạo ra bởi script (echo, print, v.v.) sẽ được lưu trữ trong bộ nhớ đệm trước khi được gửi tới trình duyệt.
        //Nó thường được sử dụng để kiểm soát hoặc điều chỉnh dữ liệu đầu ra, làm sạch đầu ra, quản lý lỗi, và tối ưu hiệu suất.
      ob_start();
        //Điều kiện này xem nút submit có được nhấn hay không && nút submit có giá trị hay không 
        //Nếu điều kiện đúng thì đoạn mã sẽ được thực thi
      if(isset($_POST['submit']) && $_POST['submit']) {
        //Lấy dữ liệu từ biểu mẫu
        //Người dùng nhập tên và mật khẩu -> nhấn submit -> các giá trị sẽ được gửi đến server và lưu vào hai biến này ( user and pass)
            $user = $_POST['user'];
            $pass = $_POST['pass'];
        //Biến user được tạo ra đê chứa 2 phần tử
            $user = [$user, $pass];
        //Sau đó mảng này được lưu trữ trong biến phiên, điều này cho phép thông tin người dùng được lưu trữ và truy cập trong suốt phiên làm việc
            $_SESSION['user'] = $user;
        //Và cuối cùng chuyển hướng người dùng index hiển thị thông tin đăng nhập thành công
            header('location: index.php');
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styledn.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="logo-section">
        <a href="index.html"><img src="assets/img/Logo2024.png" alt=""></a>
    </div>
    <div class="wrapper">
        <form action="" method="post">
            <h1>ĐĂNG NHẬP</h1>
            <div class="input-box">
                <label for="">Tài khoản</label>
                <input type="text" name="user" id="user" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <label for="">Mật khẩu</label>
                <input type="password" name="pass" id="pass" required>
                <i class="fa-solid fa-eye" id="togglePassword"></i>
            </div>
            <div class="remember-forgot">
                <label for=""><input type="checkbox" name="" id="">Nhớ mật khẩu</label>
                <a href="">Quên mật khẩu?</a>
            </div>
            <input type="submit" name="submit" value="Đăng nhập" class="btn">
            <div class="register-link">
                <p>Không có tài khoản? <a href="dangky.html">Đăng ký</a></p>
            </div>
        </form>
        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#pass');
            togglePassword.addEventListener('click', function () {
                // Chuyển đổi thuộc tính type
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // Chuyển đổi biểu tượng mắt
                this.classList.toggle('fa-eye-slash');
            });
        </script>
    </div>
    <footer>
        <div class="content-ft">
            <ul class="thong-tin">
                <li><a href="">Điều kiện sử dụng</a></li>
            </ul>
            <ul class="thong-tin">
                <li><a href="">Thông báo quyền riêng tư</a></li>
            </ul>
            <ul class="thong-tin">
                <li><a href="">Trợ giúp</a></li>
            </ul>
            <p class="end">© 1996-2024, FZONE.COM xin chào khách hàng   </p>
        </div>
    </footer>
</body>
</html>