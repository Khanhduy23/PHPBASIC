<?php
    //Bất đầu một phiên làm việc mới hoặc tiếp tục phiên làm việc hiện tại
    //Điều này cho phép truy cập và sử dụng các phiên làm việc $SESSION
    session_start();
    ob_start();
    //Bắt đầu lưu trữ đầu ra . Dữ liệu được in ra sẽ được lưu trữ trong bộ nhớ đệm đầu ra thay vì đucợ gửi trực tiếp đến trình duyệt
    //Điều này hữa ích khi bạn muốn điều khiển chính xác khi nào dữ liệu được gửi đến trình duyệt
    //ĐẶT BIỆT là khi sử dụng các lệnh như header để chuyển hướng 
    if(isset($_POST['addcart']) && $_POST['addcart']){
        //Kiểm tra xem có tồn tại dữ liệu POST với khóa addcart và giá trị của nó không rỗng hoặc không là giá trị false
        //Điều này xác nhận rằng người dụng đã gửi một yêu cầu để thêm sản phẩm vào giỏ hàng
        $id = $_POST['id'];
        $hinh = $_POST['hinh'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        //Láy các giá trị của inpunt từ dữ liệu POST và gán vào các biến
        $sl = 1;
        //Đặt số lượng sản phầm ban đầu là 1 
        $sp=[$id,$hinh,$tensp,$gia,$sl];
        //Tạo một mảng chứa thông tin sản phẩm
        if(!isset($_SESSION['cart'])) $_SESSION['cart'] =[];
        //Kiểm tra xem biến phiên cart đã được khởi tạo hay chưa , nếu chưa khởi tạo nó dưới một mãng rỗng
        array_push($_SESSION['cart'],$sp);
        //Thêm mảng sản phẩm $sp vào mảng giỏ hàng $_SESSION['cart'].
        header('location: viewcart.php');
        //Chuyển hướng người dùng đến trang viewcart 
        print_r($_SESSION['cart']);
        //In ra nội dung của biến phiên cart để kiểm tra và gỡ lỗi. Tuy nhiên, lệnh này sẽ không được thực thi vì lệnh header đã chuyển hướng trang trước đó.
        // unset($_SESSION['cart']);
        //Lệnh này đã bị ghi chú (comment) lại. Nếu được bỏ ghi chú, nó sẽ xóa toàn bộ giỏ hàng khỏi phiên.
    }
?>