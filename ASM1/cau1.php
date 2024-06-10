<?php
$arr = [];
$i = 0;
while ($i < 20){
    $random = rand( 1 , 20 );
    array_push($arr,$random);
    $i++;
}

//In ra mảng số từ 1 - 20 random

echo "Mảng số: ";
for( $i = 0 ; $i < 20 ; $i++){
    echo $arr[$i] . " ";
}
echo "<br>";

// In ra mảng số chẳn

echo " Mảng số chẳn: ";
for ( $i = 0 ; $i < 20 ;$i++){
    if( $arr[$i] % 2 == 0 ){
        echo $arr[$i] . " ";
    }
}


echo "<br>";
// In ra mảng số lẻ

echo " Mảng số lẻ: ";
for ( $i = 0 ; $i < 20 ;$i++){
    if( $arr[$i] % 2 != 0){
        echo $arr[$i] . " ";
    }
}

?>