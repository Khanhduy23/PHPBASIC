<?php
session_start();
function add_ds(){
    if(isset($_POST['add']) && $_POST['add']){ //Kiểm tra nếu bến "add" có tồn tại và có giá trị
        $tensv =$_POST['tensv'];
        $masv =$_POST['masv'];
        $lopsv =$_POST['lopsv'];
        $sv = [$tensv,$masv,$lopsv]; //Tạo mảng sinh viên từ các giá trị biểu mẫu 
        if(!isset($_SESSION['list_ds'])) $_SESSION['list_ds'] = [];
        array_push($_SESSION['list_ds'],$sv);
    } 
}
add_ds();
function show_ds(){
    $i = 1;
    $str='';
    foreach ($_SESSION['list_ds'] as $item){
        $str.='
        <tr>
            <td>'.$i.'</td>
            <td>'.$item[0].'</td>
            <td>'.$item[1].'</td>
            <td>'.$item[2].'</td>
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
    <title>Danh sánh sinh viên</title>
    <style>
        body{
            text-align: center;
        }
        form{
            width: 100%;
            border: 1px solid black;
        }
        input[type="text"]{
            width: 300px;
            padding: 15px;
            margin: 10px;
        }
        label{
            font-size: 20px;
        }
        table, th ,td{
            border:  1px solid black;
            border-collapse: collapse;
            margin: auto;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="t2.php" method="post">
        <label for="thong tin">Nhập Thông Tin Sinh Viên</label><br>
        <input type="text" placeholder="Nhập tên sinh viên" name="tensv"><br>
        <input type="text" placeholder="Nhập mã sinh viên" name="masv"><br>
        <input type="text" placeholder="Nhập mã lớp" name="lopsv"><br>
        <input type="submit" name="add">
    </form>
    <h2>Danh sách sinh viên</h2>
    <table>
        <tr>
            <td>STT</td>
            <td>Tên Sinh Viên</td>
            <td>Mã Sinh Viên</td>
            <td>Mã Lớp</td>
        </tr>
        <?=show_ds()?>
    </table>
</body>
</html>