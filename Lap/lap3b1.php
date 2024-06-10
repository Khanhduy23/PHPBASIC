<?php
//Hàm hiển thị
function hienthi(){
    echo "Hello";
    echo "World";
}
function hienthiten($ten){
    echo "Hello, $ten";
}
function hienthihoten($ho, $ten){
    echo "Họ sv: $ho <br>";
    echo "Tên sv: $ten";

}
//Echo các giá trị trên ( sử dụng các hàm hiển thị)
hienthi();

echo "<br>";
hienthiten("Nguyễn Khánh Duy");

echo "<br>";

hienthihoten("Nguyễn", "Văn C");

?>