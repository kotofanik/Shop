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
                        <a href="">Главная</a>&nbsp;&nbsp;
                        <a href="shipping.php">Оплата и доставка</a>&nbsp;&nbsp;
                        <a href="card.php" class="basket"><img src="img/empty-cart-dark.png" alt="card" width="40px" height="40px"  >
                            <?php

                            session_start();

                            echo "<sup style='color: red'>".count(@$_SESSION['goods'])."</sup>"

                            ?></a>&nbsp;&nbsp;

                </div>
            </nav>


            <div>

                <?php
                require_once "controller/db.php";
                $dbc = DB::getInstance();
                $dbc->getQuery("SET NAMES UTF8");
                $result = $dbc->getQuery("SELECT * FROM goods");
                $rows = $result->fetch_assoc();
                //echo "<table><tbody>";
                echo "<div class=\"container\"><div class='row'></div>";
                do{


                    echo "<div class='col-lg-6'><h2>".$rows['model']."</h2><div class='row'></div>";

                    echo "<div class='col-lg-5'><img class='img_good' src='".$rows['img_src']."' alt=''></div><div class='col-lg-5'><h4>Описание:</h4>
                    Сборка: ".$rows['assembly']."<br>Диаметр: ".$rows['diameter']."<br>Толщина: ".$rows['thickness']."<br>Ремешок: ".$rows['strap']."<br>Стекло: ".$rows['glass']."<br>Механизм: ".$rows['mechanism']."<br>Водозащита: ".$rows['water']."<br>Индикаторы: ".$rows['indicator']."<br><b><h4>Цена: ".$rows['cost']."</h4></b><br><br><input class='btn btn-primary' type='button' value='Добавить в корзину' onclick='addItem(".$rows['id'].")'></div><div class='col-lg-1'></div></div>";






                } while($rows=$result->fetch_assoc());
                    echo "</div></div><br><br>";
               // echo "</tbody></table>";


                ?>




        </div>



    
        <footer>
            <div id="footer">© 2016 All rights reserved</div>
        </footer>
    </div>
</body>
</html>

<!-- echo "<tr><td><img class='img_good' src=".$rows['img_src']." alt='good'></td>";
                    echo "<td><h2>".$rows['manufacturer']." ".$rows['model']."</h2><br>".$rows['release_date'].", ".$rows['diagonal']."\", ".$rows['scr_resol'].", ".$rows['video'].", ".$rows['processor'].", ".$rows['RAM'].", ".$rows['type_disk'].", ".$rows['capacity']."<br><br><h2>Цена: ".$rows['cost']." рублей</h2></td>";
                    echo "<td><form method='post' action='javascript:void(null);' class='addItem' name='add' id='addItem' onsubmit=call(".$rows['id'].")>
                              <input type='hidden' name='good_id' value='".$rows['id']."'>
                              <input type='submit' value='Добавить в корзину' >
                          </form></td></tr>";


echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-4'>";
                       echo "<div class='thumbnail'> <img src='".$rows['img_src']."'  class='img_good' width='100px'>";
                       echo  "<div class='caption'>
                                    <h3>".$rows['manufacturer']." ".$rows['model']."</h3>
                                    <p><b>Краткое описание: </b>".$rows['release_date'].", ".$rows['diagonal']."\", ".$rows['scr_resol'].", ".$rows['video'].", ".$rows['processor'].", ".$rows['RAM'].", ".$rows['type_disk'].", ".$rows['capacity']."</p>

                                    <input class='btn btn-primary' type='button' value='Добавить в корзину' onclick='addItem(".$rows['id'].")'>
                                </div>
                            </div>
                        </div>";