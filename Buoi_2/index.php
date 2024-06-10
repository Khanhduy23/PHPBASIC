<!DOCTYPE html>
<html>
<body>

<pre>

<?php
//kiểm tra loại
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
echo "<br>";
//Nối chuỗi
$a="Hello";
echo ".$a PHP";
echo "<br>";
$name="Nguyễn Khánh Duy";
echo 'Tên của bạn là '.$name;
echo "<br>";
echo "Tên của bạn là $name";
echo "<br>";
$ho="Nguyễn";
$tendem="Khánh";
$ten="Duy";
echo $ho." ".$tendem." ".$ten;
//Toán tử
$c=10;
$d=5;
$tong=$c+$d;
$hieu=$c-$d;
$nhan=$c*$d;
$chia=$c/$d;
$luythua=$c**2;
$chialaydu=$c%$d;
echo "<h1>Tổng là $tong</h1>";
echo "<h1>Hiệu là $hieu</h1>";
echo "<h1>Nhân là $nhan</h1>";
echo "<h1>Chia là $chia</h1>";
echo "<h1>Lũy thừa là $luythua</h1>";
echo "<h1>Chia lấy dư là $chialaydu</h1>";

$x=1;
$x++;
echo $x;
echo "<br>";
$i=2;
$p='2';
if($i===$p){
    echo "Hai số bằng nhau";
}else{
    echo "Hai số không bằng nhau";
}


?>

</pre>

</body>
</html>
