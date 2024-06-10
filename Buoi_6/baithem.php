<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        
    }
    th,td {
        border: 1px solid black;
        padding: 10px;
    }
</style>
<body>
    <table>
        <tr>
            <th>STT</th>
            <th>Họ và tên</th>
            <th>MSSV</th>
            <th>Lớp</th>
            <th>SĐT</th>
        </tr>
<?php
$sv = [
    ['Lân',123,'wd2021','0935484823'],
    ['Linh',123,'wd2021','0935484823'],
    ['Nguyên',123,'wd2021','0935484823'],
    ['Hào',123,'wd2021','0935484823'],

];
    $str = '';
    for($i=0;$i<sizeof($sv);$i++) {
        $str.= '
        <tr>
            <td>'.($i+1).'</td>
            <td>'.$sv[$i][0].'</td>
            <td>'.$sv[$i][1].'</td>
            <td>'.$sv[$i][2].'</td>
            <td>'.$sv[$i][3].'</td>
        </tr>
        ';
    }
    echo $str;
?>
        
    </table>
</body>
</html>