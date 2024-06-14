<?php
    function hienThi(){
        //Tạo mảng đa chiều chứa các sản phẩm với tên, số lượng và đơn giá
        $gioHang = [  
            ['tensp'=>'Laptop 123', 'soluong'=> 5, 'dongia'=> 100] ,  
            ['tensp'=>'Iphone 15', 'soluong'=> 4, 'dongia'=> 200] ,  
            ['tensp'=>'Samsung S23', 'soluong'=> 2, 'dongia'=> 250] ,  
            ['tensp'=>'Oppo A5', 'soluong'=> 1, 'dongia'=> 300] ,  
        ]; 
        //Khỏi tạo biến tongCong
        $tongCong = 0;
        //Sủ dùng vòng lặp for để duyệt qua các sản phẩm trong giỏ hàng và hiển thị tùng dòng
        for($i = 0; $i < count($gioHang); $i++){
            $stt = $i +1;
            $tenSp = $gioHang[$i]['tensp'];
            $soLuong = $gioHang[$i]['soluong'];
            $donGia = $gioHang[$i]['dongia'];
            //Tính thành tiền cho từng sản phẩm và tổng cộng cho toàn bộ giỏ hàng
            $thanhTien = $soLuong * $donGia;
            $tongCong += $thanhTien;
            //echo trong vòng lặp hiện tại toàn bộ các giá trị hiện có, kết hợp với điều kiện count
            echo '
                <tr>
                    <td>'.$stt.'</td>
                    <td>'.$tenSp.'</td>
                    <td>'.$soLuong.'</td>
                    <td>'.$donGia.'</td>
                    <td>'.$thanhTien.'</td>
                </tr>
            ';
        }
        //echo ra tổng cộng và không nằm trong vòng lặp
        echo '
                <tr>
                    <td colspan="4">Tổng cộng</td>
                    <td>'.$tongCong.'</td>
                </tr>
        ';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hàng hóa</title>
    <style>
        body{
            text-align: center;
        }
        table{
            border: 1px solid black;
            margin: auto;
            border-collapse: collapse;
        }
        tr ,td ,th{
            border: 1px solid black;
            padding: 5px;
        }
        th{
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>Danh Sách Hàng Hóa</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
        <!-- In và thực thi các câu lệch trong php -->
        <?php hienthi();?>
    </table>
</body>
</html>