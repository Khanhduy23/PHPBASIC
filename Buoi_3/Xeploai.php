<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            border: 1px solid black;
            border-radius: 5px;
            width: 300px;
            margin: auto;
            margin-top: 10px;
        }
        form{
            width: 200px;
            margin: auto;
            box-shadow: 0 0 5px gray;
            padding: 15px;
        }
        input{
            margin-bottom: 10px;
        }
        h1, h2{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Xét điểm trung bình</h1>
    <form action="xeploai.php" method="post">
        <input type="text" name="ten" placeholder="Nhập tên"><br>
        <input type="text" name="toan" placeholder="Điểm toán"><br>
        <input type="text" name="ly" placeholder="Điểm lý"><br>
        <input type="text" name="hoa" placeholder="Điểm hóa"><br>
        <input type="submit" value="Xếp loại" name="xeploai">
    </form>
    <?php
    /*isset kiểm tra sự tồn tại của post/nút sumit*/
        if(isset($_POST['xeploai'])){
            $ten=$_POST['ten'];
            $toan=$_POST['toan'];
            $ly=$_POST['ly'];
            $hoa=$_POST['hoa'];
            $dtb=($toan+$ly+$hoa)/3;
            $xeploai='';
            if($dtb<5){
                $xeploai='Yếu';
            }elseif($dtb<6.5){
                $xeploai='Trung Bình';
            }elseif($dtb<8){
                $xeploai='Khá';
            }else{
                $xeploai="Giỏi";
            }
            echo "<h2>$ten</h2>";
            echo "<h2>Điểm trung bình: $dtb</h2>";
            echo "<h2>Xếp loại: $xeploai</h2>";
        }
    ?>
</body>
</html>