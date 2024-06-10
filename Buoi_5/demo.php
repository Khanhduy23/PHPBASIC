<?php
//Khởi tạo hàm
function hello(){
    echo '<h1>Hello world</h1>';
}
hello();
function tinhtong(){
    $a = 5;
    $b = 10;
    $tong = $a + $b;
    echo $tong;
}
tinhtong();
echo '<br>';
//Hàm có tham số truyền vào
function sum($a, $b){
    $tong1 = $a + $b;
    return $tong1;
}
echo sum(15,20);
//Hàm có giá trị trả về: tront thân hàm có sử dụng từ khóa return

?>