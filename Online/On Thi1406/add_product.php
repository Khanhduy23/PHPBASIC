<?php
session_start();
// Kiểm tra xem trong $_post có nút submit tên là add không và có được nhấn không
if(isset($_POST['add']) && $_POST['add']){
    //Lấy dữ liệu từ form
    $id = $_POST['id'];
    $tensp = $_POST['ten'];
    $giasp = $_POST['gia'];
    $sl = $_POST['sl'];

    // Lưu vào một mảng
    $sp = [$id,$tensp,$giasp,$sl];

    //Lưu mảng lên session
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = []; // Khởi tạo biến tên là giỏ hàng trên session
    array_push($_SESSION['giohang'],$sp); // Cách 1: chèn sp vào cuối mảng
    // $_SESSION['giohang'][] = $sp;      //Cách 2: chèn sp vào cuối mảng

}
// print_r($_SESSION['giohang']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>
    <p>Mã SP</p>
    <form action="add_product.php" method="post">
        <input type="text" name="id" id="id">
        <p>Tên sản phẩm</p>
        <input type="text" name="ten" id="ten">
        <p>Gía sản phẩm</p>
        <input type="number" name="gia" id="gia">
        <p>Số lượng</p>
        <input type="number" name="sl" id="sl">
        <br><br>
        <input type="submit" value="Thêm SP" name="add">
    </form>

    <a href="cart.php">Xem danh sách sản phẩm</a>
</body>
</html>