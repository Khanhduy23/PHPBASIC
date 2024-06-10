<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 300px;
            height: 300px;
            border: 1px solid black;
            margin: auto;
            text-align: center;
            margin-top: 10px;
            border-radius: 5px;
        }
        form{
            padding: 25px;
        }
        input{
            padding: 5px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <form action="maytinh.php" method="post">
        <input type="text" placeholder="Nhập số thứ 1" name="num1"><br>
        <input type="text" placeholder="Nhập số thứ 2" name="num2"><br>
        <select name="pheptinh" id="">
            <option value="">Chọn phép tính</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" name="tinh">
    </form>
    <?php
    if(isset($_POST['tinh'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $pheptinh=$_POST['pheptinh'];
        $kq=0;
        switch ($pheptinh) {
            case '+':
                $kq=$num1+$num2;
                break;
            case '-':
                $kq=$num1-$num2;
                break;
            case '*':
                $kq=$num1*$num2;
                break;
            case '/':
                $kq=$num1/$num2;
                break;
            default:
                echo "Số bạn nhập không hợp lệ";
                break;
        }
        if($pheptinh=='+'){
            echo "<h1>Tổng của $num1 + $num2 = $kq</h1>";
        }elseif($pheptinh=='-'){
            echo "<h1>Hiệu của $num1 - $num2 = $kq</h1>";
        }elseif($pheptinh=='*'){
            echo "<h1>Tích của $num1 * $num2 = $kq</h1>";
        }elseif($pheptinh=='/'){
            echo "<h1>Thương của $num1 / $num2= $kq</h1>";
        }
    }
    ?>
</body>
</html>