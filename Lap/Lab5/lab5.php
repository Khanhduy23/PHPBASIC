<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .err{
            color: red  ;
        }
        body{
            text-align: center;
        }
        form{
            background-color: aliceblue;
            width: 50%;
            height: 620px;
            margin: auto;
        }
        input[type="text"]{
            width: 50%;
            padding: 5px;
        }
        h1{
            padding-top: 10px;
        }
        table {
            border: 2px solid blue;
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th,td {
            border: 1px solid blue;
            padding: 10px;
            text-align: center;
        }
        img{
            width: 300px;
            height: 200px;
        }
    </style>
</head>
<?php
    $idErr = $nameErr = $priceErr = $desErr ='';
    $id = $name = $price = $des ='';
    if(isset($_POST['add'])){
        if(empty($_POST['id'])){
            $idErr = "ID is empty";
        }else{
            $id = $_POST['id'];
        }
        if(empty($_POST['name'])){
            $nameErr = "Name is empty";
        }else{
            $name = $_POST['name'];
        }
        if(empty($_POST['price'])){
            $priceErr = "Price is empty";
        }else{
            $price = $_POST['price'];
        }
        if(empty($_POST['des'])){
            $desErr = "Des is empty";
        }else{
            $des = $_POST['des'];
        }
        //upload hình
    if(isset($_FILES['img'])){
        $folder_path = 'img/';
        $img = $folder_path.basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $img);
    }
}
?>
<body>
<!-- $_SERVER["PHP_SELF"] trả về tên tệp hiện tại, tức là trang mà biểu mẫu đang nằm trên đó. -->
<!-- đoạn mã này đảm bảo rằng khi biểu mẫu được gửi, nó sẽ gửi dữ liệu tới chính trang đó. -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <h1>Upload hình ảnh</h1>
        <p class="err">* là bắt buộc</p>
        Mã sản phẩm: <br><input type="text" name="id">
        <span class="err">*<?=$idErr?></span>
        <br><br>
        Tên sản phẩm: <br><input type="text" name="name">
        <span class="err">*<?=$nameErr?></span>
        <br><br>
        Gía sản phẩm: <br><input type="text" name="price">
        <span class="err">*<?=$priceErr?></span>
        <br><br>
        
        Hình sản phẩm: <br><input type="file" name="img" id="">

        <br><br>
        Mô tả: <br><textarea name="des" id="" cols="50" rows="10"></textarea>
        <span class="err">*<?=$desErr?></span>
        <br><br>
        <input type="submit" value="Thêm sản phẩm" name="add">
    </form>
    <h2>Thông tin đã nhập</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Hình sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
        </tr>
        <?php
        $i = 0;
            if(isset($_POST['add'])){
                echo'
                    <tr>
                        <td>'.htmlspecialchars($id).'</td>
                        <td>';
                            if($img) {
                                echo '<img src="' . htmlspecialchars($img) . '" alt="Hình sản phẩm">';
                            } else {
                                echo 'Không có hình';
                            }
                             echo '</td>
                        <td>'.htmlspecialchars($name).'</td>
                         <td>'.htmlspecialchars($price).'</td>
                          <td>'.htmlspecialchars($des).'</td>
                    </tr>
                ';
            }
        ?>
    </table>
</body>
</html>