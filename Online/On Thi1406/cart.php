<?php
session_start();
//Xóa sản phẩm trong giỏ hàng
    if(isset($_GET['id']) && ($_GET['id'])>=0){
        array_splice($_SESSION['giohang'],$_GET['id'],1);
        if (count($_SESSION['giohang']) > 0) {
            header('Location: cart.php');
        } else {
            header('Location: add_product.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
        table{
            width: 80%;
            margin: auto;
            border: 1px solid black;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
        }

    </style>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên SP</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa</th>
        </tr>
        <tbody>
            <?php
            if(isset($_SESSION['giohang']) && count($_SESSION['giohang'])>0){
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    $tt = $item[2] * $item[3];
                    echo'
                    <tr>
                        <td>'.$item[0].'</td>
                        <td>'.$item[1].'</td>
                        <td>'.$item[2].'</td>
                        <td>'.$item[3].'</td>
                        <td>'.$tt.'</td>
                        <td><a href="cart.php?id='.$i.'">Xóa</td>
                    </tr>
                    ';
                    $i++;
                }
            }else{
                echo'
                <tr>
                    <td colspan = "6">Giỏ hàng trống</td>
                </tr>
                ';
            }
            ?>
        </tbody>
    </table>
    <a href="add_product.php">Thêm sản phẩm</a>
</body>
</html>