<?php
session_start();
//Khởi tạo mảng nếu thông tin chưa tồn tại
function khoiTao(){
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }
}
khoiTao();
//Kiểm tra input và lấy thông tin từ form
function add_user(){
    if(isset($_POST['add']) && $_POST['add']){
        $mssv = $_POST['mssv'];
        $tensv = $_POST['tensv'];
        $lop = $_POST['lop'];
        $diachi = $_POST['diachi'];
        $sv = ['mssv' => $mssv, 'tensv' => $tensv, 'lop' => $lop, 'diachi' => $diachi];
        array_push($_SESSION['users'], $sv);
    }
}
add_user();
//Hàm xóa
function delete_user(){
    if(isset($_POST['delcard'])){
        $delcard = $_POST['delcard'];
        array_splice($_SESSION['users'], $delcard, 1);
    }
}
delete_user();
//Hiện thị thông tin sinh viên
function show_users(){
    $str = '';
    $i = 1;
    foreach($_SESSION['users'] as $item => $user){
        $str .= '
        <tr>
            <td>'.$i.'</td>
            <td>'.$user['mssv'].'</td>
            <td>'.$user['tensv'].'</td>
            <td>'.$user['lop'].'</td>
             <td>'.$user['diachi'].'</td>
            <td>
                <form action="" method="post" style="display:inline;">
                    <input type="hidden" name="delcard" value="'.$item.'">
                    <input type="submit" name="delete" value="Xóa">
                </form>
            </td>
        </tr>
        ';
        $i++;
    }
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
            width: 30%;
            padding: 20px;
            /* box-shadow: 0 0 5px gray; */
            margin: auto;
            margin-bottom: 50px;
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
        th{
            background-color: forestgreen;
            color: white;
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
            outline: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Nhập thông tin sinh viên</h1>
    <form action="" method="post">
        <label for="">MSSV:</label><br>
        <input type="text" name="mssv" id="mssv" required><br>
        <label for="">Tên Sinh Viên:</label><br>
        <input type="text" name="tensv" id="tensv" required><br>
        <label for="">Lớp:</label><br>
        <input type="text" name="lop" id="lop" required><br>
        <label for="">Địa chỉ:</label><br>
        <input type="text" name="diachi" id="diachi" required><br>
        <input type="submit" value="Thêm" name="add"><br>
    </form>
    <table>
        <tr>
            <th>STT</th>
            <th>MSSV</th>
            <th>Tên Sinh Viên</th>
            <th>Lớp</th>
            <th>Địa Chỉ</th>
            <th>Hành Động</th>
        </tr>
        <?=show_users()?>
    </table>
</body>
</html>