<?php
// Tổng các số từ 1 đến 100
    $tong=0;
    for($i=0;$i<=100;$i++){
        $tong+=$i;
    }
    echo 'Tổng các số từ 0 -> 100: '.$tong.'<br>';
// Tổng các số chẳn từ 1 đến 100
    $tong1=0;
    for($i=0;$i<=100;$i++){
        if($i%2==0){
            $tong1+=$i;
        }
    }
    echo 'Tổng các số chẳn từ 0 -> 100: '.$tong1.'<br>';
// Tổng các số lẻ từ 1 đến 100
    $tong2=0;
    for($i=0;$i<=100;$i++){
        if($i%2==0) continue;{
            $tong2+=$i;
        }
    }
    echo 'Tổng các số lẻ từ 0 -> 100: '.$tong2.'<br>';
?>