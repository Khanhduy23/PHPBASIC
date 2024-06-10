<?php
/*Cú pháp của hàm if
if(điều kiện) {
    khối lệch thực hiện khi điều kiện đúng
} else {
    khối lệnh thực hiện khi điều kiện sai
}
*/
// if(true){
//     echo 'Kết quả đúng';
// } else{
//     echo 'Kết quả sai';
// }
// echo "<br>";
// echo "<br>";
$dtb=5;
$kq='';
$xeploai='';
echo "<h1>Xét điểm trung bình của sinh viên</h1>";
echo "Điểm trung bình = $dtb";
echo "<br>";
if($dtb<5){
    $kq="Rớt";
    $xeploai="Yếu";
}elseif($dtb<6.5){
    $kq="Đậu";
    $xeploai="Trung Bình";
}elseif($dtb<8){
    $kb="Đậu";
    $xeploai="Giỏi";
}
echo "Kết quả là: ".$kq."<br>"."Xếp loại: ".$xeploai;
//Toán tử 3 ngôi
echo "<br>";
echo "<h1>Toán tử 3 ngôi</h1>";
$kq=($dtb>5) ? 'Đậu':'Rớt';
echo $kq
?>