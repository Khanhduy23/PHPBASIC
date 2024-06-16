<?php
//Nội dung 1:
// Yêu cầu 1: cho 1 mảng số gồm 20 phần tử là các số nguyên tùy ý.
// SV duyệt mảng và in các phần từ của mảng
// Yêu cầu 2: in các số lẻ
// Yêu cầu 3: in các số chẳn
// Yêu cầu 4: tính tổng các phần từ của mảng

// Cách 1 : tạo mảng số từ 0 đến 19
    // $mang_so = [];
    // $i = 0;
    // while($i < 20){
    //     array_push($mang_so,$i);
    //     $i++;
    // }
    // print_r($mang_so);
// Cách 2: tạo mảng số ngẫu nhiên
    $mang_so = [];
    $i = 0;
    while($i < 20){
        $random = rand(20,100);
        if(!in_array($random,$mang_so))
            array_push($mang_so,$random);
        $i++;
    }
    // print_r($mang_so);

    //in các phần từ của mảng số
    $tong = 0;
    echo '<h1>Các số trong mảng gồm có: </h1>';
    foreach ($mang_so as $number) {
        echo $number .' ';
        $tong +=$number;
    }
// Tính tổng các số trong mảng
    echo '<h3>Tổng các số trong mảng là: </h3>'.$tong;

// In ra các số chẵn
echo '<h1>Số chẳn </h1>';
foreach ($mang_so as $number) {
    if($number % 2 == 0){
        echo $number .' ';
    }
}
// In ra các số lẻ
echo '<h1>Số lẻ </h1>';
foreach ($mang_so as $number) {
    if($number % 2 !== 0){
        echo $number .' ';
    }
}

// Nội dung 2: cho form nhập dữ liệu -> lưu dữ liệu vào mảng -> lưu mảng lên session
// Nội dung 3: hiện thị mảng trên session theo dạng talble , xóa phần từ của mảng trên session
?>