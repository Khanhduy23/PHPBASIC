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
        // Đây là đường dẫn tới thư mục trên máy chủ mà bạn muốn lưu trữ các hình ảnh được tải lên. Trong trường hợp này, hình ảnh sẽ được lưu vào thư mục có tên img trong thư mục gốc của trang web.
        $img = $folder_path.basename($_FILES['img']['name']);
        // Biến $img được gán giá trị là đường dẫn tuyệt đối tới tệp tin hình ảnh sau khi đã được tải lên. basename($_FILES['img']['name']) trả về tên tệp tin của hình ảnh (không kèm đường dẫn thư mục). Sau đó, nó được ghép với $folder_path để tạo ra đường dẫn hoàn chỉnh.
        move_uploaded_file($_FILES['img']['tmp_name'], $img);
        // Hàm move_uploaded_file() được sử dụng để di chuyển tệp tin hình ảnh từ thư mục tạm trên máy chủ (nơi tệp tin được lưu trữ tạm thời sau khi tải lên) đến thư mục mục tiêu. Trong trường hợp này, tệp tin hình ảnh sẽ được di chuyển từ đường dẫn tạm $_FILES['img']['tmp_name'] đến đường dẫn mục tiêu $img.
        var_dump($_FILES['img']);
        // : Dòng này được sử dụng để in ra thông tin chi tiết về biến siêu toàn cục $_FILES sau khi hình ảnh đã được tải lên. Thông tin này bao gồm tên, loại, kích thước và đường dẫn tạm của tệp tin hình ảnh.
    }
}
?>
<body>
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

</body>
</html>