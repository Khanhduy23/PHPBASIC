<?php
//Tính tổng các số từ 1 đến n
$n = 20;
$tong = 0;
for($i = 1;$i <= $n;$i++){
    $tong += $i;
}
echo "Tổng các số từ 1 đến $n là: ".$tong.'<br>';

$tong1 = 0;
for($i = 1;$i<=40;$i++){
    //Bỏ qua các số từ 10 đến 15
    if($i >= 10 && $i<=15){
        continue;
    }
    $tong1 += $i;
}
echo "Tổng các số từ 1 đến $n bỏ qua các số từ 10 đến 15 là: ".$tong1.'<br>';

//Tính tổng các số chẳn từ 1 đến n
$tong2 = 0;
for($i = 1;$i <= $n;$i++){
    //Điều kiện tính tổng số lẻ
    if($i % 2==0){
        $tong2 += $i;
    }
}
echo "Tổng các số chẳn từ 1 đến $n là: ".$tong2.'<br>';
//Tính tích các số lẻ từ 1 đến n
$tich = 1;
for($i = 1;$i <= $n;$i++){
    //Điều kiện tính tích số lẻ
    if($i % 2 !=0){
        $tich *= $i;
    }
}
echo "Tích các số lẻ từ 1 đến $n là: ".$tich.'<br>';

//Tổng các số từ 1 đến n chia hết cho 3
$tong3 = 0;
for($i = 1;$i <= $n;$i++){
    //Điều kiện tổng chia hết cho 3
    if($i % 3 == 0){
        $tong3 += $i;
    }
}
echo "Tổng các số chia hết cho 3 từ 1 đến $n là: ".$tong3.'<br>';

?>