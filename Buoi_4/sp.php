<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        .boxsp{
            width: 80%;
            margin: auto;
        }
        .sp{
            width: calc(25%  - 20px);
            box-shadow: 0 0 5px gray;
            padding: 5px;
            text-align: center;
            float: left;
            border-radius: 10px;
            padding-bottom: 20px;
            margin: 10px;
        }
        img{
            width: 100%;
            height: auto;
        }
        a{
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            background-color: orangered;
            box-shadow: 0 0 5px;
            border-radius: 5px;
        }
        a:hover{
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="boxsp">
        <?php
        for($i=0;$i<=19;$i++){
            echo '
            <div class="sp">
                <img class="image" src="img/dt.jpg" alt="">
                <h3>Iphone 15 Promax</h3>
                <p>Gía: 25.000.000</p>
                <a href="">Mua ngay</a>
            </div>
            ';
        }
        ?>
    </div>
</body>
</html>