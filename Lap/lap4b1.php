<?php
//Tạo mảng rỗng
echo "<h1> Tạo mảng rỗng </h1>";
$arrso = array();
$arrso1 = [];
//Thêm phần từ vào mảng
$arrso[] = 1;
$arrso[] = 2;

$arrso1[] = "a";
$arrso1[] = "b";

//In mảng
print_r($arrso);
echo "<br>";
print_r($arrso1);

echo "<h1> Tạo mảng có giá trị </h1>";
$arrso = array (3,7,9);
$arrso1 = [6,2,5];

//Đếm phần từ của mảng
echo "Số phần tử của mảng: " , count($arrso); echo "<br>";
print_r($arrso);
echo "<br>";
//Liệt kê thứ từ và phần từ của mảng
for ($i = 0;$i <count($arrso);$i++){
    echo " Phần từ thứ $i là : $arrso[$i] <br> ";   
}

//Thêm giá trị vào cuối mảng
echo " <h1> Thêm giá trị vào mảng </h1>";
$arrso[] = 33;
for ( $i = 0;$i < count($arrso);$i++){
    echo " Phần từ thứ $i là: $arrso[$i] <br>";
}
echo " <h1>Mảng sau khi thêm:</h1> ";
array_push($arrso,44,55,66);
for ($i = 0;$i <count($arrso);$i++){
    echo " Phần từ thứ $i là: $arrso[$i] <br>";
}
echo "<h1> Xóa phần tử cuối mảng </h1>";
array_pop($arrso);
echo "Mảng sau khi xóa: <br>";
for ($i = 0 ; $i < count($arrso);$i++){
    echo "Phần tử thứ $i còn lại là: $arrso[$i] <br>";
}
echo "<h1>In giá trị của mảng</h1>";
$arrch = ['car','oto'];
print_r($arrch);
foreach ($arrso as $value){
    echo $value , '<br>';
}
echo "<br>";
$arr = ['BN'=>'Bánh Ngọt','K'=>'Kẹo','NN'=>'Nước Ngọt'];
echo $arr['BN']; echo "<br>";
echo $arr['NN']; echo "<br>";
foreach ($arr as $mahh => $tenhh){
    echo "Mã hàng hóa : $mahh; Tên hàng hóa: $tenhh <br> ";
}

echo "<h1> Xóa item thứ 2. Dùng hàm splice hoặc unset</h1>";
echo "<h2>Dùng hàm splice</h2>";
$car = array ("Volvo", "BMW","Toyota");
array_splice($car, 1, 1);
print_r($car);

echo "<h2>Dùng hàm unset</h2>";
$car = array ("Volvo", "BMW","Toyota");
unset($car[1]);
print_r($car);

echo "<h2>Xóa 2 item</h2>";

$car = array ("Volvo", "BMW","Toyota");
array_splice($car, 1, 2);
print_r($car);
echo "<br>";
$car = array ("Volvo", "BMW","Toyota");
unset($car[0],$car[1]);
print_r($car);
?>