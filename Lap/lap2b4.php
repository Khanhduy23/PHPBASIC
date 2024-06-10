<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích và chu vi hình chữ nhật</title>
</head>
<body>
    <form action="lap2b4.php" method="post">
        <label for="chieu_dai">Nhập chiều dài:</label>
        <input type="number" id="chieu_dai" name="chieu_dai" step="any" required><br><br>
        <label for="chieu_rong">Nhập chiều rộng:</label>
        <input type="number" id="chieu_rong" name="chieu_rong" step="any" required><br><br>
        <input type="submit" value="Tính">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $chieuDai = $_POST['chieu_dai'];
        $chieuRong = $_POST['chieu_rong'];

        //Tính diện tích
        $dienTich = $chieuDai * $chieuRong;

        //Tính chu vi
        $chuVi = 2 * ($chieuDai + $chieuRong);

        echo "Chiều dài : $chieuDai <br>";
        echo " Chiều rộng: $chieuRong <br>";
        echo "Diện tích hình chữ nhật: $dienTich <br>";
        echo "Chu vi hình chữ nhật: $chuVi <br>";
    }
    ?>
</body>
</html>