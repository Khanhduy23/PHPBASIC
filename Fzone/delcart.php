<?php
session_start();
//Kiểm tra xem cart có tồn tại hay không, nếu có đoạn mã sẽ được thực khi, nếu không thì người dùng sẽ được chuyển hướng đến index
if (isset($_SESSION['cart'])) {
    if (isset($_GET['delcart'])) {
        //intval chuyển đổi chuỗi giá trị này thành số nguyên và lưu vào biến delIndex, điều này đảm bảo chỉ số mãng cart là một số nguyên hợp lệ . tránh các lỗi hoặc hành vi không mong muốn tới mảng
        //Trong code khai báo $i=0 -> intval kiểm tra 0 và true -> số nguyên  -> hàm tiếp tục thực thi đoạn mã bên trong
        $delIndex = intval($_GET['delid']);
        if (isset($_SESSION['cart'][$delIndex])) {
            //1: Số lượng phần tử cần xóa bắt đầu từ vị trí $delIndex. Giá trị 1 chỉ định rằng bạn chỉ muốn xóa một phần tử tại vị trí đó.
            array_splice($_SESSION['cart'], $delIndex, 1);
        }
    }
    if (count($_SESSION['cart']) > 0) {
        header('Location: cart.php');
    } else {
        header('Location: index.php');
    }
} 
//Nếu biến $_SESSION['cart'] không tồn tại (giỏ hàng chưa được khởi tạo hoặc không có sản phẩm nào được thêm vào), điều hướng người dùng đến trang index.php
else {
    header('Location: index.php');
}
?>
