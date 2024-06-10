<?php
session_start();
// Session Start: Dòng này bắt đầu một phiên làm việc của PHP. Session được sử dụng để lưu trữ thông tin trạng thái của người dùng trên nhiều trang.

//Màng sản phẩm
$sp = [
    ['id' => '001', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 1', 'gia' => '30000000'],
    ['id' => '002', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 2', 'gia' => '31000000'],
    ['id' => '003', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 3', 'gia' => '32000000'],
    ['id' => '004', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 4', 'gia' => '33000000'],
    ['id' => '005', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 5', 'gia' => '33000000'],
    ['id' => '006', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 6', 'gia' => '30000000'],
    ['id' => '007', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 7', 'gia' => '31000000'],
    ['id' => '008', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 8', 'gia' => '32000000'],
    ['id' => '009', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 9', 'gia' => '33000000'],
    ['id' => '010', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 10', 'gia' => '33000000'],
    ['id' => '011', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 11', 'gia' => '33000000'],
    ['id' => '012', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 12', 'gia' => '33000000'],
];

$str = '';  // để lưu trữ chuỗi HTML được tạo ra từ vòng lặp.

foreach ($sp as $item) {
    $str .= '
    <div class="sp">
        <img src="img/'.$item['hinh'].'" alt="">
        <h4>'.$item['tensp'].'</h4>
        <p>'.number_format($item['gia'], 0, ',', '.').' VND</p> 
        <form method="post">
            <input type="hidden" name="product_id" value="'.$item['id'].'">   
            <button type="submit" name="add_to_cart">Mua ngay</button>
        </form>
    </div>
    ';
}
// <!-- Một thẻ <p> để hiển thị giá sản phẩm, sử dụng hàm number_format() để định dạng giá theo định dạng tiền tệ. -->
//Đoạn này dùng để định dạng dấu phân cách hàng nghìn và hàng đơn vị//
// 0: Số lượng chữ số sau dấu thập phân. Trong trường hợp này, không có chữ số sau dấu thập phân.
// ',': Dấu phân cách hàng nghìn, được sử dụng ở đây là dấu phẩy.
// '.': Dấu phân cách hàng đơn vị, được sử dụng ở đây là dấu chấm.

// Xử lý thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {  //Kiểm tra nếu phương thức yêu cầu POST và biến add_to_cart tồn tại . Đảm bảo đoạn mã thực thi khi người dùng nhấn nút mua
    $productId = $_POST['product_id'];
    $product = array_filter($sp, function ($item) use ($productId) {   //Sử dụng hàm lọc để lọc mảng sp , nếu sản phầm được tìm thấy thì nó sẽ gán vào biến product
        return $item['id'] === $productId;
    });
    //Kiểm tra sản phẩm có tồn tại trong mảng sản phẩm không 
    if (!empty($product)) {
        $product = array_values($product)[0];

        // Thêm vào giỏ hàng. Khởi tạo giỏ hàng nếu chưa tồn tại 
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng chưa
        $found = false;
        foreach ($_SESSION['cart'] as &$cartItem) {
            if ($cartItem['id'] === $productId) {
                $cartItem['quantity'] += 1;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $product['quantity'] = 1;
            $_SESSION['cart'][] = $product;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul class="menu container">
            <li><a href="">Trang chủ<i class="fa-solid fa-house"></i></a></li>
            <li><a href="">Sản phẩm<i class="fa-solid fa-list"></i></a></li>
            <li><a href="">Dịch vụ<i class="fa-regular fa-clipboard"></i></a></li>
            <li><a href="">Tin tức<i class="fa-solid fa-newspaper"></i></a></li>
            <li><a href="">Liên hệ<i class="fa-solid fa-phone"></i></a></li>
            <li><a href="cart.php">Giỏ hàng</a></li>
        </ul>
    </nav>

    <main>
         <div class="container">
            <?= $str ?>
        </div>
    </main>
</body>
</html>
