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
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <form method="post" id="createOrder" action='javascript:void(null);' onsubmit="addOrder(this)">
                    <h1>Оформление заказа</h1>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Имя" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Телефон:</label>
                        <input type="text" class="form-control" id="phone"  name="phone" placeholder="Телефон" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Адрес доставки:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Адрес доставки" required><br>
                    </div>

                    <button type="submit" class="btn btn-default">Подтвердить</button>
                </form>

                </div>
                <div class="col-lg-3"></div>

            </div>






        </div>


    </div>




    <footer>
        <div id="footer">© 2016 All rights reserved</div>
    </footer>
</div>
</body>
</html>

