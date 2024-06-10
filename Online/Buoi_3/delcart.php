<?php
    session_start();
    if(isset($_SESSION['cart'])){
        //Kiểm tra xem biến phiên cart đã được khởi tạo hay chưa. Nếu chưa, đoạn mã bên trong khối này sẽ không được thực thi.
        if(isset($_GET['del'])){
            //Kiểm tra xem có tham số del trong URL không. Nếu có, nghĩa là người dùng muốn xóa một sản phẩm cụ thể khỏi giỏ hàng.
            array_splice($_SESSION['cart'],$_GET['del'],1);
            //Xóa một phần tử từ mảng $_SESSION['cart'] bắt đầu từ vị trí được chỉ định bởi $_GET['del']. Hàm array_splice xóa phần tử từ mảng và thay đổi mảng gốc.
        } else{
            unset($_SESSION['cart']);
            //Nếu không có tham số del trong URL, khối mã này sẽ được thực thi, tức là người dùng muốn xóa toàn bộ giỏ hàng.
        }
        if(count($_SESSION['cart'])>0) header('location: viewcart.php');
        //Nếu giỏ hàng vẫn còn sản phẩm sau khi xóa (số phần tử trong mảng $_SESSION['cart'] lớn hơn 0), chuyển hướng người dùng đến trang viewcart.php để xem giỏ hàng.
        else header('location: sp.php');
        //Nếu giỏ hàng trống (không còn sản phẩm nào), chuyển hướng người dùng đến trang sp.php.
    }
?>