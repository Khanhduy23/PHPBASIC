<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        .container{
            display: flex;
            justify-content: space-around;
        }
        .bang{
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php inToanBoBangCuuChuong(); ?>
    </div>
    
    <?php
    function inBangCuuChuong($so){
        echo "<div class='bang'>";
        
            echo "<h3> Bảng Cửu Chương $so:</h3>";

                echo "<table>";
                for($i=1 ;$i<=10;$i++){
                    $ketqua = $so *$i;
                    echo "
                    <tr> <td>$so x $i</td> <td=$ketqua</td> <tr>";
                }
                echo "</table>";

        echo "</div>";
    }
    function inToanBoBangCuuChuong(){
        for($so=2;$so<=9;$so++){
            inBangCuuChuong($so);
        }
    }
?>

</body>
</html>
