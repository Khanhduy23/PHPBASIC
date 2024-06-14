<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FZONE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/stylegh.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <style>
    input[type="submit"] {
    padding: 5px;
    width: 30px;
    height: 36px;
}
    </style>
</head>
<body>
    <header>
        <div class="color-header container-header">
            <!-- Phần đầu Logo -->
            <div class="logo-section">
                <a href="index.php"><img src="assets/img/Logo2024black.png" alt=""></a>
            </div>
            <!-- Phần Kết Logo -->
            <div class="zindex  input-section">
                <!-- Phần đầu input -->
                <div class="search-section">
                    <form action="" method="post">
                        <input type="search" placeholder="Tìm kiếm" name="q" class="search-input">
                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </form>
                </div>
                 <!-- Phần kết input -->
            </div>
            <!-- Phần thông tin hỗ trợ, đăng nhập -->
            <div class="color-header search-information">
                <div class="color-header navbar">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-bell"></i>Thông tin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-question-circle"></i>Hỗ trợ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-shopping-cart"></i>Giỏ hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dangnhap.php">
                                <i class="fas fa-sign-in-alt"></i> Đăng Nhập
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Phần kết thông tin hỗ trợ, đăng nhập -->
        </div>
    </header>
    <nav>
        <div class="service-list">
            <div class="navbar1">
                <ul class="nav-list1">
                    <li class="nav-item1">
                        <a href="#"> Ưu đãi hôm nay</a>
                    </li>
                    <li class="nav-item1">
                        <a href="#">Dịch vụ khách hàng</a>
                    </li>
                    <li class="nav-item1">
                        <a href="#">Thẻ quà tặng</a>
                    </li>
                    <li class="nav-item1">
                        <a href="#">Kênh người bán</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <article>
    <div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Chi Tiết Sản Phẩm</span>
							</div>
							<div class="one-eight text-center">
								<span>Gía</span>
							</div>
							<div class="one-eight text-center">
								<span>Số lượng</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Xóa</span>
							</div>
						</div>

						<?php
						$i = 0;
                        $tong = 0;
						if(isset($_SESSION['cart'])){
							foreach ($_SESSION['cart'] as $item) {
                                $tt = $item[3] * $item[4];
                                $tong+=$tt;
								echo '
									<div class="product-cart d-flex">
										<div class="one-forth">
											<div class="product-img" style="background-image: url(assets/img/'.$item[1].');">
											</div>
											<div class="display-tc">
												<h3>'.$item[2].'</h3>
											</div>
										</div>
										<div class="one-eight text-center">
											<div class="display-tc">
												<span class="price">'.$item[3].'</span>
											</div>
										</div>
										<div class="one-eight text-center">
											<div class="display-tc">
												<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="'.$item[4].'" min="1" max="100">
											</div>
										</div>

										<div class="one-eight text-center">
											<div class="display-tc">
                                            	<form method="get" action="delcart.php">
                                                    <input type="submit" value="x"  name="delcart">
                                                    <input type="hidden" value="'.$i.'" name="delid">
                                                </form>
											</div>
										</div>
									</div>
								 ';
                                 $i++;
							}
						}
						?>
                        
					</div>
				</div>
                <div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Tổng:</span> <span><?=$tong?></span></p>
											<p><span>Vận chuyển:</span> <span>0.00</span></p>										</div>
										<div class="grand-total">
											<p><span><strong>Tổng cộng:</strong></span> <span><?=$tong?></span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
    </article>
    <footer>
        <div class="fontc box-footer">
            <div class="fontc ft">
                <h3 class="fontc">Về FZONE</h3>
                <a href=""><p>Giới thiệu</p></a>
                <a href=""><p>Tuyển dụng</p></a>
                <br><br>
            </div>
            <div class="ft">
                <h3 class="fontc">Chính sách</h3>
                <a href=""><p>Chính sách bảo hành</p></a>
                <a href=""><p>Chính sách thanh toán</p></a>
                <a href=""><p>Chính sách giao hàng</p></a>
                <a href=""><p>Chính sách bảo mật</p></a>
            </div>
            <div class="ft">
                <h3 class="fontc">Thông tin</h3>
                <a href=""><p>Hệ thống cửa hàng</p></a>
                <a href=""><p>Hướng dẫn mua hàng</p></a>
                <a href=""><p>Tra cứu địa chỉ bảo hành</p></a>
                <br>
            </div>
            <div class="ft">
                <h3 class="fontc">Liên hệ với chúng tôi</h3>
                <a href=""><p>Mua hàng: 0815934934</p></a>
                <a href=""><p>Bảo hành: 1800.6173</p></a>
                <a href=""><p>Email: lukiluna23803@gmail.com</p></a>
                <br>
            </div>
            <div class="ft">
                <h3 class="fontc">Kết nối với chúng tôi</h3>
                <a  href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a  href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                <br><br><br><br><br>
            </div>
    </footer>
</body>
</html>
