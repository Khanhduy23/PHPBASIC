<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Khai báo mảng chỉ mục gồm có 10 phần từ số nguyên
    $array=[1, 2, 3, 9, 15, 19, 6, 5, 4, 11];

    //Sử dụng for để hiển thị danh sách các phần từ trong mảng
    for($i = 0; $i < count($array); $i++){
        if($i == 0 || $i == 2 || $i == 3 || $i == 4 || $i == 5){
            echo $array[$i] . " ";
        }
    }
    echo "<br>";
    //Thực hiện tính tổng các phần tử trong mảng chia hết cho 3
    $tongChiaHetCho3 = 0;
    foreach($array as $value){
        if($value % 3 == 0){
            $tongChiaHetCho3 += $value;
        }
    }
    echo "Tổng các phần từ trong mảng chia hết cho 3 là: ". $tongChiaHetCho3;
    ?>
</body>
</html>