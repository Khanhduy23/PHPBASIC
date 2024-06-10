<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập n</title>
</head>
<body>
    <form action="lap2b5.php" method="post">
        <label for="n" id="n">Nhập số n</label>
        <input type="number" id="n" name="n" step="any" required><br><br>
        <input type="submit" value="Tính">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $so = $_POST['n'];
            //Tổng các số từ 1 đến 10
    $tong = 0;
    for($i = 1;$i <= 10;$i++){
        $tong += $i;
    }
    $tong2 = 0;
    for($i = 1;$i <= 10;$i++){
        if($i % 2 == 0){
            $tong2 += $i;
        }
    }
    $tong3 = 0;
    for($i = 1;$i <= 10;$i++){
        if($i % 2 != 0){
            $tong3 += $i;
        }
    }
    $tong4 = 0;
    for($i = 1;$i <= 10;$i++){
        if($i % 3 == 0){
            $tong4 += $i;
        }
    }
    echo "Tổng các số từ 1 đến 10 là: ".$tong; echo"<br>";
    echo "Tổng các số chẵn từ 1 đến 10 là: ".$tong2; echo"<br>";
    echo "Tổng các số lẻ từ 1 đến 10 là: ".$tong3; echo"<br>";
    echo "Tổng các số chia hết cho 3 từ 1 đến 10 là: ".$tong4;
}
    ?>
</body>
</html>