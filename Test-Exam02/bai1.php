<?php
    //Kiểm tra xem biểu mẫu có được gửi hay không, khi người dùng nhấn nút gửi thì giá trị sẽ tồn tại và thực thi dòng lệnh bên trong
    if(isset($_POST['submit'])){
        //Lấy giá trị nhập vào từ trường biểu mẫu và lưu vào biến
        $scores = $_POST['scores'];
        $scoreRating = '';
        $result = '';
        //Kiểm tra xem giá trị nhập vào có là số không, nếu không thì in ra cú pháp lỗi
        if(!is_numeric($scores)){
            $result = 'Vui lòng nhập số thực';
            $scoreRating = 'Không hợp lệ';
            $scores = 'Không hợp lệ';
        }else{
            $scores = floatval($scores); //Chuyển giá trị điểm về dạng số thực để đảm bảo các phép toán số học và so sách hoạt động chính xác
        //Kiểm tra xem điểm có nằm trong khoảng hợp lệ từ 0 - 10 , nếu không hợp lệ thì sẽ rán kết quả thông báo lỗi
        if($scores < 0 || $scores > 10){
            $result = 'Điểm không hợp lệ, vui lòng nhập điểm từ 0 - 10';
            $scoreRating = 'Không hơp lệ';
        } elseif($scores < 5 ){
            $scoreRating = 'Yếu';
            $result = 'Rớt';
        } elseif($scores >= 5 && $scores < 6.5){
            $scoreRating = 'Trung bình';
            $result = 'Đậu';
        } elseif($scores >= 6.5 && $scores < 8){
            $scoreRating = 'Khá';
            $result = 'Đậu';
        } elseif($scores >= 8){
            $scoreRating = 'Giỏi';
            $result = 'Đậu';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xếp loại điểm trung bình</title>
</head>
<body>
    <form action="bai1.php" method="post">
        <label for="">Nhập điểm trung bình:</label>
        <input type="text" name="scores" id="scores" required>
        <input type="submit" value="Xem kết quả" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        echo "<h2>Kết quả</h2>";
        echo "Điểm: $scores <br>";
        echo "Xếp loại: $scoreRating <br>";
        echo "Kết quả: $result <br>";
    }
    ?>
</body>
</html>