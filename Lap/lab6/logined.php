<?php
      session_start();
      if(isset($_SESSION['user'])) {
            $username = $_SESSION['user'][0];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Thông tin người dùng</title>
      <style>
            body {
                  font-family: Arial, sans-serif;
            }

            .navbar {
                  display: flex;
                  justify-content: space-between;
                  background-color: #25a54b;
                  padding: 10px;
                  color: black;
                  border-radius: 5px;
            }

            .navbar a {
                  color: rgb(255, 255, 255);
                  text-decoration: none;
                  padding: 14px 20px;
                  border-radius: 5px;
            }

            .navbar a:hover {
                  background-color: yellow;
                  color: black;
            }

            .container {
                  padding: 20px;
            }
      </style>
</head>
<body>
      <div class="navbar">
            <div class="navbar-left">
                  <a href="#">Home</a>
                  <a href="#">Profile</a>
                  <a href="#">Settings</a>
            </div>

            <div class="navbar-right">
                  <span>Welcome, <?php echo $username; ?>!</span>
                  <a href="logout.php">Logout</a>
            </div>
      </div>

      <div class="container">
            <h1>User Information</h1>
            <p>User name: <?php echo $username; ?></p>
            <p>Password: <?php echo $_SESSION['user'][1]; ?></p>
      </div>
</body>
</html>

<?php
      }
      else {
            echo 'Please log in again. <a href="login.php">Click here</a>';
      }
?>