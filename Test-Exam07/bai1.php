<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương</title>
    <style>
        body {
            text-align: center;
        }
        form {
            margin: 10px auto;
            padding: 5px;
            border: 1px solid black;
            width: fit-content;
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 5px auto;
            width: 5%;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="number">Nhập bảng cửu chương số: </label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Hiển thị">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];
        echo "<h2>Bảng cửu chương $number</h2>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            $class = ($i == 10) ? 'bold' : '';
            echo "<tr>";
            echo "<td class='$class'>$number x $i = </td>";
            echo "<td class='$class'>$result</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
