<?php
//This is header
    include('header.php');
?>
<?php
    //Bất đầu một phiên làm việc mới hoặc tiếp tục phiên làm việc hiện tại
    session_start();
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        table {
            border: 2px solid blue;
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            table-layout: auto;
        }
        th, td {
            border: 1px solid blue;
            padding: 10px;
            text-align: center;
            width: 1%; /* Shrink to fit content */
            white-space: nowrap; /* Prevent content from wrapping */
        }
        th {
            background-color: lightgray;
        }
        table img {
            width: 50%;
            height: auto;
        }
        .continue-color{
            color: blue;
            font-weight: bold;
        }
        .K{
           margin-top: 40px;
        }
    </style>
</head>
<body>
    <h2>GIỎ HÀNG CỦA BẠN</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Pictruct</th>
            <th>Name</th>
            <th>Price</th>
            <th>Delete</th>
        </tr>
        <?php
            $i = 0;
            foreach ($_SESSION ['cart'] as $item) {
                echo '
                    <tr>
                        <td>'.($i+1).'</td>
                        <td>'.$item[0].'</td>
                        <td><img src ="images/'.$item[1].'"</td>
                        <td>'.$item[2].'</td>
                        <td>'.$item[3].'</td>
                        <td><button> <a href = delcart.php?del='.$i.'>X</a></button></td> 
                    </tr>
                     ';
                     $i++;
            }
        ?>
    </table>
    <p class="K"><a class="continue-color" href="product.php">Continue shopping</a></p>
    <p class="K"><a class="continue-color" href="delcart.php">Delete entire cart</a></p>
</body>
</html>
<?php
    }
    else{
        echo '<br> Giỏ hàng rỗng . Bạn muốn <a href="sp.php">Đặt hàng</a> không ?';
    }
?>
<?php
//This is footer
    include('footer.php');
?>