<?php
$ch = "Hello";
$$ch = "world";
echo "<br> $ch";
echo "<br> ${$ch}";
echo "<br> $$ch";
echo "<br>";
$a=5;
$b=2;
echo "<br> Giá trị biến a= $a <br>";
echo "<br> Giá trị biến b= $b <br>";
echo "<h1> Toán tử </h1>";
// Cộng, Trừ, Nhân, Chia, Lũy thừa, Chia lấy dư
$c = $a + $b;
$c1 = $a - $b;
$c2 = $a * $b;
$c3 = $a / $b;
$c4 = $a ** $b;
$c5 = $a % $b;
    echo "Gía trị biến a + b = $c <br>";
    echo "Gía trị biến a - b = $c1 <br>";
    echo "Gía trị biến a * b = $c2 <br>";
    echo "Gía trị biến a / b = $c3 <br>";
    echo "Gía trị biến a ** b = $c4 <br>";
    echo "Gía trị biến a % b = $c5 <br>";
$a++;
echo "<br> Tăng a lên 1: $a";
$b--;
echo "<br> Giảm b xuống 1: $b";
$a +=5;
echo "<br> Tăng a lên 5: $a";
$a +=$b;
echo "<br> a=$a b=$b";
$x=5;
$x==5;
$x===5;
$y=++$x;
echo "<br> x= $x y=$y"; 
echo "<br>";
//Khai báo 2 biến điểm 
//Kết quả: Đậu điểm >=5 , và ngược lại 
echo "<h2> Điểm của tôi là 7 điểm, có đậu hay không?";
echo "<br>";
$diem = 7;
if($diem>=5){
    echo "Bạn đã đậu";
} else{
    echo "Bạn đã rớt";
}
?>