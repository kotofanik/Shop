<?php

@session_start();
if(@isset($_SESSION['admin'])) {
    header('Location: http://localhost/eb/arthur/admin/viewOrders.php');
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Imperial Time</title>
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
                    <span>Imperial Time</span>
                </a>
            </div>
            <div id="spec">
                <a href="" title="Специальные предложения">Специальные предложения</a>

            </div>
            <div id="reg_auth">Телефон: +375295552327<br>E-mail: info@imperialtime.by</div>
        </header>



        <div class="container" id="cont">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form method="post" id="authorization" action='javascript:void(null);' onsubmit="authorization()">
                        <h1>Вход в админ панель:</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Логин:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Логин" name="login" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль:</label>
                            <input type="password" class="form-control"   name="password" placeholder="Пароль" required>
                        </div>


                        <button type="submit" class="btn btn-default">Войти</button>
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

