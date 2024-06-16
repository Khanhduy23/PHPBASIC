<?php
$mang_so = [];
$i = 0;
while($i < 10){
    $random = rand(1,100);
    if(!in_array($random,$mang_so));
    array_push($mang_so,$random);
    $i++;
}
// print_r($mang_so);
// In các phần từ của mảng
echo '<h1>Các số trong mảng gồm có: </h1>';
foreach($mang_so as $number){
    echo $number . " ";
}
echo '<h1>Hiển thị các phần tử trong mảng là số chẳn: </h1>';
foreach($mang_so as $number){
    if($number % 2 == 0){
        echo $number . " ";
    }
}
$tongLe = 0;
foreach($mang_so as $number){
    if($number % 2 != 0){
        $tongLe += $number;
    }
}
echo '<h3>Tổng các số lẻ trong mảng là: </h3>'.$tongLe;
?>