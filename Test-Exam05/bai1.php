<?php
session_start();

// Hàm khởi tạo mảng người dùng nếu chưa tồn tại
function khoiTao(){
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }
}
khoiTao();

// Hàm thêm người dùng
function add_user(){
    if(isset($_POST['add']) && $_POST['add']){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = ['id' => $id, 'name' => $name, 'email' => $email];
        array_push($_SESSION['users'], $user);
    }
}
add_user();

// Hàm xóa
function delete_user(){
    if(isset($_POST['delcard'])){
        $delcard = $_POST['delcard'];
        array_splice($_SESSION['users'], $delcard, 1);
        //1: Đây là số lượng phần tử bạn muốn loại bỏ từ mảng, bắt đầu từ vị trí $index. Trong trường hợp này, giá trị là 1, có nghĩa là bạn muốn loại bỏ một phần tử duy nhất tại vị trí $index.
    }
}
delete_user();

// Hàm hiển thị
function show_users(){
    $str = '';
    foreach($_SESSION['users'] as $index => $user){
        $str .= '
        <tr>
            <td>'.$user['id'].'</td>
            <td>'.$user['name'].'</td>
            <td>'.$user['email'].'</td>
            <td>
                <form action="" method="post" style="display:inline;">
                    <input type="hidden" name="delcard" value="'.$index.'">
                    <input type="submit" name="delete" value="Xóa">
                </form>
            </td>
        </tr>
        ';
    }
    return $str;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <style>
        body {
            text-align: center;
        }
        form {
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
            outline: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="id" required placeholder="Nhập ID"><br>
        <input type="text" name="name" required placeholder="Nhập tên"><br>
        <input type="text" name="email" required placeholder="Nhập email"><br>
        <input type="submit" value="Thêm người dùng" name="add">
    </form>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>
        <?=show_users()?>
    </table>
</body>
</html>
