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
                ['id' => '001', 'hinh' => '1.jpg', 'tensp' => 'Iphone 15 Promax read', 'gia' => '30.000.000'],
                ['id' => '002', 'hinh' => '2.jpg', 'tensp' => 'Iphone 15 Promax back', 'gia' => '31.000.000'],
                ['id' => '003', 'hinh' => '3.jpg', 'tensp' => 'Iphone 15 Promax pink', 'gia' => '32.000.000'],
                ['id' => '004', 'hinh' => '4.jpg', 'tensp' => 'Iphone 15 Promax green', 'gia' => '33.000.000'],
                ['id' => '005', 'hinh' => '5.jpg', 'tensp' => 'Iphone 15 Promax yellow', 'gia' => '33.000.000'],
                ['id' => '006', 'hinh' => '1.jpg', 'tensp' => 'Iphone 15 Promax read', 'gia' => '30.000.000'],
                ['id' => '007', 'hinh' => '2.jpg', 'tensp' => 'Iphone 15 Promax back', 'gia' => '31.000.000'],
                ['id' => '008', 'hinh' => '3.jpg', 'tensp' => 'Iphone 15 Promax pink', 'gia' => '32.000.000'],
                ['id' => '009', 'hinh' => '4.jpg', 'tensp' => 'Iphone 15 Promax green', 'gia' => '33.000.000'],
                ['id' => '010', 'hinh' => '5.jpg', 'tensp' => 'Iphone 15 Promax yellow', 'gia' => '33.000.000'],
                ['id' => '011', 'hinh' => '4.jpg', 'tensp' => 'Iphone 15 Promax green', 'gia' => '33.000.000'],
                ['id' => '012', 'hinh' => '5.jpg', 'tensp' => 'Iphone 15 Promax yellow', 'gia' => '33.000.000'],
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