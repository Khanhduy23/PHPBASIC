<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css1/style1.css">
    <title>Trang chủ</title>
</head>
<body>
<!-- phần menu -->
    <nav>
        <ul class="menu container">
            <li><a href="">Trang chủ<i class="fa-solid fa-house"></i></a></li>
            <li><a href="">Sản phẩm<i class="fa-solid fa-list"></i></a></li>
            <li><a href="">Dịch vụ<i class="fa-regular fa-clipboard"></a></i></li>
            <li><a href="">Tin tức<i class="fa-regular fa-newspaper"></i></a></li>
            <li><a href="">Liên hệ<i class="fa-solid fa-address-book"></a></i>  </li>
        </ul>
    </nav>

<!-- Phần sản phẩm -->
<?php
    $sp = [
        ['id'=>'001','hinh'=>'h1.jpeg','tensp'=>'IPhone 15 Promax black','gia'=>'30000000'],
        ['id'=>'002','hinh'=>'h2.jpeg','tensp'=>'IPhone 15 Promax blue','gia'=>'31000000'],
        ['id'=>'003','hinh'=>'h3.jpeg','tensp'=>'IPhone 15 Promax pink','gia'=>'32000000'],
        ['id'=>'004','hinh'=>'h4.jpeg','tensp'=>'IPhone 15 Promax green','gia'=>'33000000'],
        ['id'=>'005','hinh'=>'h5.jpeg','tensp'=>'IPhone 15 Promax red','gia'=>'34000000'],
        ['id'=>'003','hinh'=>'h3.jpeg','tensp'=>'IPhone 15 Promax pink','gia'=>'32000000'],
        ['id'=>'004','hinh'=>'h4.jpeg','tensp'=>'IPhone 15 Promax green','gia'=>'33000000'],
        ['id'=>'005','hinh'=>'h5.jpeg','tensp'=>'IPhone 15 Promax red','gia'=>'34000000'],
    ];

    $str = '';
    foreach ($sp as $item) {
        $str.= '
            <div class="sp">
                    <form action="addcart.php" method="post">
                    <img src="img/'.$item['hinh'].'" alt="">
                    <h4>'.$item['tensp'].'</h4>
                    <p>'.$item['gia'].'</p>
                    <input type="submit" value="Mua ngay" name="addcart">
                    <input  type="hidden" name="id" value="'.$item['id'].'">
                    <input  type="hidden" name="hinh" value="'.$item['hinh'].'">
                    <input  type="hidden" name="tensp" value="'.$item['tensp'].'">
                    <input  type="hidden" name="gia" value="'.$item['gia'].'">
                    </form>
            </div>
        ';
    }

?>
    <main>
        <div class="container">
            <?=$str?>
        </div>
    </main>
    <footer>
        <h4><i class="fa-solid fa-user-graduate"></i>Bán điện thoại xịn<i class="fa-solid fa-user-graduate"></i></h4>
    </footer>
</body>
</html>