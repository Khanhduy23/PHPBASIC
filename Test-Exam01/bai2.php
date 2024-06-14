<?php
session_start();
function thongTin5SP(){
    if(!isset($_SESSION['sanPham'])){
       $_SESSION['sanPham'] = [
        ['masp' => 'SP001', 'tensp' => 'Sản phẩm 1', 'giasp' => 150000],
        ['masp' => 'SP002', 'tensp' => 'Sản phẩm 2', 'giasp' => 300000],
        ['masp' => 'SP003', 'tensp' => 'Sản phẩm 3', 'giasp' => 450000],
        ['masp' => 'SP004', 'tensp' => 'Sản phẩm 4', 'giasp' => 600000],
        ['masp' => 'SP005', 'tensp' => 'Sản phẩm 5', 'giasp' => 750000],
       ];
    }
}
thongTin5SP();
//Tạo form thêm sản phẩm theo các thông tin trên
function addSP(){
    if(isset($_POST['add']) && $_POST['add']){
        //Lấy thông tin từ form nhập gán vào biến
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $sp = ['masp' => $masp , 'tensp' => $tensp , 'giasp' => $giasp];
        array_push($_SESSION['sanPham'],$sp);
        // unset ($_SESSION['sanPham']);
    }
}
addSP();
//Hiện thị thông tin 5 sản phẩm có sẵn
function showSP(){
    $i = 1;
    $str = '';
    $tongSL = 0;
    $tongGia = 0;
    $tongSLSPGiaTren400K = 0;
    foreach($_SESSION['sanPham'] as $item){
        $str .= '
        <tr>
            <td>'.$i.'</td>
            <td>'.$item['masp'].'</td>
            <td>'.$item['tensp'].'</td>
            <td>'.$item['giasp'].'</td>
        </tr>
        ';
        $tongSL ++;
        $tongGia += $item['giasp'];
        if($item['giasp'] > 400000){
            $tongSLSPGiaTren400K ++;
        }
        $i++;
    }
    $str .='
    <tr>
        <td colspan="3">Tổng số sản phẩm</td>
        <td>'.$tongSL.'</td>
    </tr>
    <tr>
        <td colspan="3">Số lượng sản phẩm có giá trên 400,000</td>
        <td>'.$tongSLSPGiaTren400K.'</td>
    </tr>
    <tr>
        <td colspan="3">Tổng tiền</td>
        <td>'.$tongGia.'</td>
    </tr>
    ';
    return $str;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        form {
            border: 1px solid black;
            width: 100%;
            padding: 20px;
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
            width: 80%;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
        }
        input[type="text"] {
            width: 300px;
            padding: 10px;
            margin: 5px;
        }
        input[type="submit"] {
            padding: 5px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="masp" id="masp" required placeholder="Mã Sản Phẩm: "><br>
        <input type="text" name="tensp" id="tensp" required placeholder="Tên Sản Phẩm: "><br>
        <input type="text" name="giasp" id="giasp" required placeholder="Gía Sản Phẩm: "><br>
        <input type="submit" value="Thêm Sản Phẩm" name="add"><br>
    </form>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Gía Sản Phẩm</th>
            </tr>
        </thead>
        <?=showSP()?>
    </table>
</body>
</html>