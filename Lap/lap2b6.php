<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập n</title>
</head>
<body>
    <form action="lap2b6.php" method="post">
        <label for="n" id="n">Nhập số n</label>
        <input type="number" id="n" name="n" step="any" required><br><br>
        <input type="submit" value="Tính">
    </form>
    <?php
    echo"<table border='1'>";
    echo"<tr>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $n = $_POST['n'];
        //in ra các bảng cửa chưa từ 2 đến n
        for($i = 2;$i <= $n;$i++){
            echo"<td>";
            //Đóng thẻ <td> sau khi hoàn thành vòng lặp trong để kết thúc một ô.
            for($j = 1;$j <=10;$j++){
                echo $i .'x'.$j .'='. ($i * $j).'<br>';
            }
        }
    }
        echo"</td>";

    echo"</tr>";
    echo"</table>";

    ?>
</body>
</html>
