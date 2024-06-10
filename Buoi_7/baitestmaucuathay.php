<?php
//Mảng giỏ hàng
$giohang=[
    ['tensp'=>'Laptop123','soluong'=>5,'dongia'=>100],
    ['tensp'=>'Iphone 15','soluong'=>2,'dongia'=>200],
    ['tensp'=>'Samsung S23','soluong'=>2,'dongia'=>250],
    ['tensp'=>'Oppo A5','soluong'=>1,'dongia'=>300],
];

$row='';
$i=1;
$tong=0;

foreach ($giohang as $item ) {
    $tongcong=$item['soluong']*$item['dongia'];
    $row.='
    <tr>
        <td>'.$i.'</td>
        <td>'.$item['tensp'].'</td>
        <td>'.$item['soluong'].'</td>
        <td>'.$item['dongia'].'</td>
        <td>'.$tongcong.'</td>
    </tr>
    ';
   $i++;
   $tong +=$tongcong;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
            width: 50%;
        }
        th,td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
        }
        th {
            background-color: blanchedalmond;
        }
        body{
            text-align: center;
        }

    </style>
</head>
<body>
    <h2>Giỏ hàng</h2>
    <table>

        <tr>
            <th>STT</th>
            <th>tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>

        <?=$row?>

        <tr style="font-weight: bold;">
            <td colspan="4">Tổng cộng</td>
            <td> <?=$tong?> </td>
        </tr>
        
    </table>
</body>
</html>