<?php 
session_start();
    function add_sp(){
        if(isset($_POST['add']) && $_POST['add']){
            $masp=$_POST['masp'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            // Trong hàm add_sp(), ba biến $masp, $tensp, và $giasp được sử dụng để nhận dữ liệu từ form và lưu trữ các thông tin sản phẩm.
            $sp=[$masp,$tensp,$giasp];
            // Dòng 2: Kiểm tra và Khởi tạo Session nếu chưa tồn tại
            // Giải thích:
            // !isset($_SESSION['list_sp']): Kiểm tra xem $_SESSION['list_sp'] có tồn tại không. Nếu không tồn tại, nghĩa là chưa có sản phẩm nào được thêm vào.
            // $_SESSION['list_sp'] = []: Khởi tạo $_SESSION['list_sp'] như một mảng trống nếu chưa tồn tại. Điều này đảm bảo rằng bạn có một mảng để chứa các sản phẩm.
            if(!isset($_SESSION['list_sp'])) $_SESSION['list_sp']=[];
            array_push($_SESSION['list_sp'],$sp);
            // echo var_dump($_SESSION['list_sp']);
            // Tổng Quan:
            // Dòng 1: Tạo một mảng chứa thông tin sản phẩm mới.
            // Dòng 2: Kiểm tra xem mảng chứa danh sách sản phẩm trong session có tồn tại không, nếu không thì khởi tạo.
            // Dòng 3: Thêm sản phẩm mới vào mảng chứa danh sách sản phẩm trong session.
        }
    }
    add_sp();
    function show_sp(){
        $i=1;
        $str='';
        foreach ($_SESSION['list_sp'] as $item) {
            $str.='
        <tr>
            <td>'.$i.'</td>
            <td>'.$item[0].'</td>
            <td>'.$item[1].'</td>
            <td>'.$item[2].'<span>đ</span></td>
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
        body{
            text-align: center;
        }
        form{
            border: 1px solid black;
            width: 100%;
            padding: 20px;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
            width: 80%;
        }
        td, th {
            border: 1px solid rgb(0, 0, 0);
            /* border-collapse: collapse; */
            padding: 10px;
        }

        input[type="text"]{
            width: 300px;
            padding: 10px;
            margin: 5px;
        }
        input[type="submit"]{
            padding: 5px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="add_sp.php" method="post">
        <input type="text" placeholder="Nhập mã SP: " name="masp"><br>
        <input type="text" placeholder="Nhập tên SP: " name="tensp"><br>
        <input type="text" placeholder="Nhập giá SP: " name="giasp"><br><br>
        <input type="submit" value="Thêm" name="add">
    </form>
</body>
<br>
<table>
    <tr>
        <th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Đơn giá</th>
    </tr>
<?=show_sp()?>
    <tr>
        <td colspan="3">Tổng số sản phẩm</td>
        <td>5</td>
    </tr>
    <tr>
        <td colspan="3">Tổng tiền</td>
        <td>5444</td>
    </tr>
</table>
</html>