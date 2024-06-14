<?php
      session_start();
      ob_start();
      if(isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            // unset($_SESSION['user']): Xóa session variable 'user' khỏi phiên làm việc hiện tại. Điều này có nghĩa là người dùng đã đăng xuất khỏi hệ thống.
            header('location: login.php');
      }
?>