<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Imperial Time</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
    <div id="content">
        <header>
            <div id="logo">
                <a href="http://localhost/EB/arthur" title="На главную">
                    <img id="logotype" src="img/logo.png" alt="Главная">
                    <span>Imperial Time</span>
                </a>
            </div>
            <div id="spec">


            </div>
            <div id="reg_auth">Телефон: +375295552327<br>E-mail: info@imperialtime.by</div>
        </header>
        <nav>

            <div id="hideMenu">
                <a href="index.php">Главная</a>&nbsp;&nbsp;
                <a href="shipping.php">Оплата и доставка</a>&nbsp;&nbsp;
                <a href="card.php" class="basket"><img src="img/empty-cart-dark.png" alt="card" width="40px" height="40px"  >
                    <?php

                    session_start();

                    echo "<sup style='color: red'>".count(@$_SESSION['goods'])."</sup>"

                    ?></a>&nbsp;&nbsp;

            </div>
        </nav>


        <div class="container">
            <div class="row">
                <img src="img/ship.jpg" alt="">

            </div>






        </div>


    </div>




    <footer>
        <div id="footer">© 2016 All rights reserved</div>
    </footer>
</div>
</body>
</html>

