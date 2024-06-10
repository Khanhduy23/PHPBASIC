<?php
    //Bắt đầu hoặc tiếp tục một phiên làm việc, Điều này cho phép truy cập và sử dụng các phiên làm việc $SESSION
    session_start();
    ob_start();
    //Bắt đầu lưu trữ đầu ra ,Dữ liệu được in ra sẽ được lưu trữ trong bộ nhớ đệm đầu ra thay vì đucợ gửi trực tiếp đến trình duyệt
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
    // //Kiểm tra xem biến phiên cart đã được khởi tạo hay chưa , nếu chưa khởi tạo thì nó dưới một mãng rỗng
    if(isset($_POST['addcart']) && $_POST['addcart']){
        //Kiểm tra xem có tồn tại dữ liệu Post với khóa addcart và giá trị của nó không 
        $id = $_POST['id'];
        $img = $_POST['img'];   
        $name = $_POST['name'];
        $price = $_POST['price'];
        $count = $_POST['count'];
        //Kiểm tra trùng sản phẩm
        $flag = true; //Biến kiểm tra
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
            $i = 0;
            foreach($_SESSION['cart'] as $item){
                if($item[0] == $id){
                    $count +=$item[4];
                    $flag = false;
                    $_SESSION['cart'][$i][4] = $count;
                    break;
                }
                $i++;
            }
        }
        if($flag == true){
            $product=[$id,$img,$name,$price,$count];
            $_SESSION['cart'][]=$product;
        }

        // unset($_SESSION['cart']);
        // array_push($_SESSION['cart'],$product);
        header('location: cart.php');
        print_r($_SESSION['cart']);
    }
?>