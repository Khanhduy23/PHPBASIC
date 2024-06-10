<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Phần menu -->
    <nav>
        <ul class="menu container">
            <li><a href="">Trang chủ<i class="fa-solid fa-house"></i></a></li>
            <li><a href="">Sản phẩm<i class="fa-solid fa-list"></i></a></i></li>
            <li><a href="">Dịch vụ<i class="fa-regular fa-clipboard"></i></a></li>
            <li><a href="">Tin tức<i class="fa-solid fa-newspaper"></i></a></li>
            <li><a href="">Liên hệ<i class="fa-solid fa-phone"></i></a></li>
        </ul>
    </nav>
    <!-- Phần sản phẩm -->
    <?php
            $sp = [
                ['id' => '001', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 1', 'gia' => '30.000.000'],
                ['id' => '002', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 2', 'gia' => '31.000.000'],
                ['id' => '003', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 3', 'gia' => '32.000.000'],
                ['id' => '004', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 4', 'gia' => '33.000.000'],
                ['id' => '005', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 5', 'gia' => '33.000.000'],
                ['id' => '006', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 6', 'gia' => '30.000.000'],
                ['id' => '007', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 7', 'gia' => '31.000.000'],
                ['id' => '008', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 8', 'gia' => '32.000.000'],
                ['id' => '009', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 9', 'gia' => '33.000.000'],
                ['id' => '010', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 10', 'gia' => '33.000.000'],
                ['id' => '011', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 11', 'gia' => '33.000.000'],
                ['id' => '012', 'hinh' => 'banhngot.jpg', 'tensp' => 'Bánh kem 12', 'gia' => '33.000.000'],
            ];
        $str='';
        foreach ($sp as $item) {
            $str.='
            <div class="sp">
                <img src="img/'.$item['hinh'].'" alt="">
                <h4>'.$item['tensp'].'</h4>
                <p>'.$item['gia'].'</p>
                <button>Mua ngay</button>
            </div>
            ';
        }
    ?>
    <main>
        <div class="container">
            <?=$str?>
    </main>
</body>
</html>