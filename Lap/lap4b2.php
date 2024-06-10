<?php
function hienthi(){
    $arrdshh = [
        ['MAHH'=>'BA','TENHH'=>'BÁNH NGỌT','SL'=>5,'DG'=>10000,'HINH'=>'img/banhngot.jpg'],
        ['MAHH'=>'KE','TENHH'=>'KẸO','SL'=>100,'DG'=>100000,'HINH'=>'img/banhngot.jpg'],
        ['MAHH'=>'NN','TENHH'=>'NƯỚC NGỌT','SL'=>51,'DG'=>220000,'HINH'=>'img/banhngot.jpg']
    ];
    for($i = 0;$i < count($arrdshh);$i++){
        $stt = $i+1;
        $ma = $arrdshh[$i]['MAHH'];
        $ten = $arrdshh[$i]['TENHH'];
        $sl = $arrdshh[$i]['SL'];
        $gia = $arrdshh[$i]['DG'];
        $hinh = $arrdshh[$i]['HINH'];
        $tt = $sl * $gia;
        echo '
        <tr>
            <td>'.$stt.'</td>
            <td>'.$ma.'</td>
            <td>'.$ten.'</td>
            <td>'.$sl.'</td>
            <td>'.$gia.'</td>
            <td>'.$tt.'</td>
            <td><img src="'.$hinh.'" alt"" </td> 
        </tr>
        ';
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
        img{
            width: 200px;
            height: 100px;
        }
        table{
            border-collapse:  collapse;
        }
    </style>
</head>
<body>
    <h1>Danh Sách Hàng Hóa</h1>
    <table border="1">
        <tr>
            <td>STT</td>
            <td>Mã HH</td>
            <td>Tên HH</td>
            <td>Số Lượng</td>
            <td>Đơn Gía</td>
            <td>Thành Tiền</td>
            <td>Hình</td>
        </tr>
    <?=hienthi()?>
    </table>
</body>
</html>