<?php
session_start();

// Tạo mảng liên kết mặc định với thông tin khách hàng
function khoiTao(){
    if (!isset($_SESSION['khachhang'])) {
        $_SESSION['khachhang'] = [
            ['ten' => 'Nguyễn Văn A', 'sanpham' => 'Sản phẩm 1', 'soluong' => 2],
            ['ten' => 'Trần Thị B', 'sanpham' => 'Sản phẩm 2', 'soluong' => 5],
            ['ten' => 'Lê Văn C', 'sanpham' => 'Sản phẩm 3', 'soluong' => 1],
            ['ten' => 'Phạm Thị D', 'sanpham' => 'Sản phẩm 4', 'soluong' => 3]
        ];
    }
}
khoiTao();

// Hàm hiển thị danh sách khách hàng
function show_khachhang() {
    $str = '';
    $tongSoluong = 0;
    foreach ($_SESSION['khachhang'] as $khachhang) {
        $str .= '
        <tr>
            <td>' . $khachhang['ten'] . '</td>
            <td>' . $khachhang['sanpham'] . '</td>
            <td>' . $khachhang['soluong'] . '</td>
        </tr>
        ';
        $tongSoluong += $khachhang['soluong'];
    }
    $str .= '
    <tr>
        <td colspan="2"><strong>Tổng số lượng sản phẩm</strong></td>
        <td><strong>' . $tongSoluong . '</strong></td>
    </tr>
    ';
    return $str;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bán hàng</title>
    <style>
        body {
            text-align: center;
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
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Danh sách bán hàng</h2>
    <table>
        <tr>
            <th>Tên khách hàng</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
        </tr>
        <?= show_khachhang() ?>
    </table>
</body>
</html>
