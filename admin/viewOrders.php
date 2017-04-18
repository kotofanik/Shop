<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script src="../js/main.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
    <div id="content">
        <header>
            <div id="logo">
                <a href="http://localhost/EB/arthur" title="На главную">
                    <img id="logotype" src="../img/logo.png" alt="Главная">
                    <span>House Nout</span>
                </a>
            </div>
            <div id="spec">
                <a href="" title="Специальные предложения">Специальные предложения</a>

            </div>
            <div id="reg_auth">Телефон: +375295552327<br>E-mail: info@imperialtime.by</div>
        </header>



        <div class="container">
            <div class="row">
                <div class="col-lg-2"><br><br>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-header">Меню</li>
                        <li><a href="http://localhost/eb/arthur/admin/addItem.php">Добалвение товара</a></li>
                        <li class="active"><a href="viewOrders.php">Просмотр заказов</a></li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-9">

                    <?php
                    require_once "../controller/db.php";
                    error_reporting(1);

                    $dbc = DB::getInstance();
                    $dbc->getQuery("SET NAMES UTF8");
                    $result = $dbc->getQuery("SELECT * FROM `orders`");
                    $rows = $result->fetch_assoc();
                    echo "<br><br><br>";
                    echo "<table><tbody>";
                    echo "<tr><td>Имя:</td><td>Телефон:</td><td>Адрес:</td><td>Заказанные товары:</td></tr>";

                    do{

                        echo "<tr><td>".$rows['name']."</td><td>".$rows['phone']."</td><td>".$rows['address']."</td><td>".$rows['goods']."</td></tr>";


                    }while($rows = $result->fetch_assoc());


                    echo "</tbody></table><br><br>";
                    ?>

                </div>


            </div>


        </div>


    </div>




    <footer>
        <div id="footer">© 2016 All rights reserved</div>
    </footer>
</div>
</body>
</html>


