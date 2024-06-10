<?php
    $chuoi = "Bệnh án, kết quả khám, chữa bệnh của ủy, viên Bộ Chính trị, Ban Bí thư là tối mật";
    
    // Tách chuỗi thành mảng các từ (sử dụng khoảng trắng làm dấu phân cách)
    $mang = explode(" ", $chuoi);
    
    // In ra mảng đã tạo
    var_dump($mang);
    
    // Tìm xem 1 từ có trong chuỗi không
    $str = "Hello, world";
    echo"<br>";
    // Sử dụng str_contains nếu đang chạy PHP 8.0 trở lên
    // Sử dụng version_compare để kiểm tra phiên bản của PHP. Nếu phiên bản PHP đang chạy là 8.0.0 hoặc cao hơn, biểu thức sẽ trả về true.
    if (version_compare(PHP_VERSION, '8.0.0') >= 0) {
        if (str_contains($str, "world")) {
            echo "Chuỗi chứa từ 'world'.";
        } else {
            echo "Chuỗi không chứa từ 'world'.";
        }
    } else {
        // Sử dụng strpos cho các phiên bản PHP dưới 8.0
        if (strpos($str, "world") !== false) {
            echo "Chuỗi chứa từ 'world'.";
        } else {
            echo "Chuỗi không chứa từ 'world'.";
        }
    }
?>
