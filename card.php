<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Imperial Time</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
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
                <a href="card.php" class="basket"> <img src="img/empty-cart-dark.png" alt="card" width="40px" height="40px"  >
                    <?php

                    session_start();

                    echo "<sup style='color: red'>".count(@$_SESSION['goods'])."</sup>"

                    ?></a>&nbsp;&nbsp;

            </div>
        </nav>

       
        <div>
            <!--<h1>Корзина:</h1>-->

            <?php
            require_once "controller/db.php";
            error_reporting(1);
           // @session_start();
            if(isset($_SESSION['goods'])) {

                if(count($_SESSION['goods']) != 0) {
                    $dbc = DB::getInstance();
                    $dbc->getQuery("SET NAMES UTF8");
                    echo "<table><tbody>";

                    for ($i = 0; $i < count($_SESSION['goods']); $i++) {

                        $tepm = $_SESSION['goods'][$i];
                        $result = $dbc->getQuery("SELECT * FROM goods WHERE id LIKE '{$tepm}'");
                        $rows = $result->fetch_assoc();

                        echo "<th><td><img class='img_good_card' src=" . $rows['img_src'] . " alt='good'></th>";
                        echo "<td><h3>" . $rows['model'] . "</h3><h3>Цена: " . $rows['cost'] . " рублей</h3></td>";
                        echo "<td> <input type='submit' class='btn btn-primary' value='Убрать' onclick='deleteItem(" . $tepm . ")'>
                          </form></td></tr>";

                    }
                    echo "<th><td colspan='3' style='text-align: center'><a href='order.php'><input type='button' class='btn btn-primary' value='Оформить заказ'></a></td></th></tbody></table><br><br><br>";
                } else {
                    echo "<div class='hcard'><h1 >Вы еще ничего не заказали!</h1></div>";
                }
            } else {
                echo "<div class='hcard'><h1 >Вы еще ничего не заказали!</h1></div>";
            }

            ?>





            <div id="results"></div>
        </div>


    </div>




    <footer>
        <div id="footer">© 2016 All rights reserved</div>
    </footer>
</div>
</body>
</html>

