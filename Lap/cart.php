<?php
session_start();

// Xử lý xóa sản phẩm khỏi giỏ hàng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_id'])) {
    $removeId = $_POST['remove_id'];
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($removeId) {
            return $item['id'] !== $removeId;
        });
    }
}

$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul class="menu container">
            <li><a href="lap4b4.php">Trang chủ</a></li>
            <li><a href="cart.php">Giỏ hàng</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <h2>Giỏ hàng của bạn</h2>
            <?php if (!empty($cartItems)): ?>
                <ul>
                    <?php foreach ($cartItems as $item): ?>
                        <li>
                            <img src="img/<?= $item['hinh'] ?>" alt="<?= $item['tensp'] ?>" width="50">
                            <?= $item['tensp'] ?> - <?= number_format($item['gia'], 0, ',', '.') ?> VND - Số lượng: <?= $item['quantity'] ?>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="remove_id" value="<?= $item['id'] ?>">
                                <button type="submit">Xóa</button>
                            </form>
                        </li>
                    <?php endforeach; ?>    
                </ul>
            <?php else: ?>
                <p>Giỏ hàng của bạn đang trống.</p>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
