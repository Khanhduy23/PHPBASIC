<?php
    session_start();
    ob_start();
    //Kiểm tra và khỏi tạo giỏ hàng ,điều này đảm bảo rằng giỏ hàng luôn được khởi tạo khi người dụng bắt đầu một phiên làm việc mới
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
    if(isset($_POST['addcart']) && $_POST['addcart']){
        $id = $_POST['id'];
        $img = $_POST['img'];   
        $name = $_POST['name'];
        $price = $_POST['price'];
        $count = $_POST['count'];
        //Kiểm tra trùng sản phẩm
        $flag = true; //Biến kiểm tra xem sản phầm có tồn tại trong giỏ hàng hay không
        //Nếu giỏ hàng không rỗng thì foreach sẽ duyệt qua từng sp trong giỏ hàng để kiểm tra trùng lặp bằng các so sánh ID sp
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
            $i = 0;
            foreach($_SESSION['cart'] as $item){
                //Nếu sp đã tồn tại thì số lượng sẽ được cộng thêm
                if($item[0] == $id){
                    //Cộng thêm
                    $count +=$item[4];
                    //Đặt flag thì false để ngăn sản phẩm mới vào giỏ hàng
                    $flag = false;
                    //Gán vào giỏ hàng
                    $_SESSION['cart'][$i][4] = $count;
                    break;
                }
                $i++;
            }
        }
        //Nếu flag là true ( sp không trùng lặp ) thì sẽ tạo một mãng product chưa thông tin sp và thêm vào giỏ hàng 
        if($flag == true){
            $product=[$id,$img,$name,$price,$count];
            $_SESSION['cart'][]=$product;
        }
        //Chuyển hướng người dùng và in ra giỏ hàng
        header('location: cart.php');
        print_r($_SESSION['cart']);
    }
?>