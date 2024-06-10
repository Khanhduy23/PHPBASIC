<?php
    //Bất đầu một phiên làm việc mới hoặc tiếp tục phiên làm việc hiện tại
    session_start();
    if(isset($_SESSION['cart'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        table {
            border: 2px solid blue;
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th,td {
            border: 1px solid blue;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }
        .bold {
            font-weight: bold;
            color: red;
            font-size: 18px;
        }
        table img {
            width: 50%;
            height: auto;
        }
    </style>
</head>
<body>
<nav>
        <ul class="menu container">
            <li><a href="">Trang chủ<i class="fa-solid fa-house"></i></a></li>
            <li><a href="">Sản phẩm<i class="fa-solid fa-list"></i></a></li>
            <li><a href="">Dịch vụ<i class="fa-regular fa-clipboard"></a></i></li>
            <li><a href="">Tin tức<i class="fa-regular fa-newspaper"></i></a></li>
            <li><a href="">Liên hệ<i class="fa-solid fa-address-book"></a></i>  </li>
        </ul>
    </nav>
    <h2>GIỎ HÀNG CỦA BẠN</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Hình sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th>Xoá</th>
        </tr>
        <?php
            $tong = 0;
            $i = 0;
            foreach ($_SESSION ['cart'] as $item) {
                $tt = $item[3] * $item[4];
                $tong+=$tt;
                echo '
                    <tr>
                        <td>'.($i+1).'</td>
                        <td>'.$item[0].'</td>
                        <td><img src ="img/'.$item[1].'"></td>
                        <td>'.$item[2].'</td>
                        <td>'.$item[3].'</td>
                        <td>'.$tt.'</td>
                        <td><button> <a href = delcart.php?del='. $i .'>Xoa</a></button></td> 
                    </tr>
                     ';
                     $i++;
            }
        ?>
        <tr class="bold">
            <td colspan="4">Tổng tiền</td>
            <td><?=$tong?></td>
        </tr>
    </table>
    <p><a href="sp.php">Tiếp tục đặt hàng</a></p>
    <p><a href="delcart.php">Xoá giỏ hàng</a></p>
</body>
</html>
<?php
    }
    else{
        echo '<br> Giỏ hàng rỗng . Bạn muốn <a href="sp.php">Đặt hàng</a> không ?';
    }
?>