<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số nguyên tố</title>
</head>
<body>
    <h1>Kiểm tra số nguyên tố</h1>
    <form action="" method="post">
        <label for="so">Nhập một số:</label>
        <input type="number" id="so" name="so" required>
        <input type="submit" value="Kiểm tra">
    </form>

    <?php
    function kiemTraSoNguyenTo($so){
        if($so<=1){
            return false;
        }
        for($i=2;$i<=sqrt($so);$i++){
            if($so%$i==0){
                return false;
            }
        }
        return true;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $soCanKiemTra=$_POST['so'];
        if(kiemTraSoNguyenTo($soCanKiemTra)){
            echo "<p>$soCanKiemTra là số nguyên tố.</p>";
        }
        else{
            echo "<p>$soCanKiemTra không phải là số nguyên tố</p>";
        }
    }
    ?>
    
</body>
</html>