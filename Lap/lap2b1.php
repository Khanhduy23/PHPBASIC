<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải chương trình bật 1</title>
</head>
<body>
    <form action="lap2b1.php" method="post">
        <label for="a">Nhập a:</label>
        <input type="number" id="a" name="a" step="any" required><br><br>
        <label for="b">Nhập b:</label>
        <input type="number" name="b" id="b" step="any" required><br><br>
        <input type="submit" value="Giải phương trình">
    </form>
    <?php
    //Hàm giải phương trình bật 1
    function giaPhuongTrinhBat1($a, $b){
        if($a == 0){
            if($b == 0){
                //Nếu b cũng bằng 0 thì phương trình có vô số nghiệm
                return "Phương trình có vô số nghiệm";
            }
            else{
                //Nếu b khác 0 thì phương trình vô nghiệm
                return "Phương trình vô nghiệm";
            }
        }
        else{
            //Nếu a khác 0 thì phương trình có một nghiệm phân biệt
            $x = -$b / $a;
            return "Phương trình có 1 nghiệm duy nhất: ".$x;
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Lấy giá trị của a và b từ form
        $a = $_POST['a'];
        $b = $_POST['b'];
        //Gọi hàm giải phương trình
        $ketQua = giaPhuongTrinhBat1($a, $b);
        echo $a.'x'.'+'.$b.'='.'0';
        echo "<br>";
        echo $ketQua;
    }
    ?>
</body>
</html>