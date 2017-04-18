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



        <div class="container">
            <div class="row">
                <div class="col-lg-2"><br><br>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-header">Меню</li>
                        <li class="active"><a href="http://localhost/eb/arthur/admin/addItem.php">Добалвение товара</a></li>
                        <li><a href="viewOrders.php">Просмотр заказов</a></li>

                    </ul>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <form method="post" id="addGoods" action='javascript:void(null);' onsubmit="return writeMeSubmit(this);">
                        <h1>Добавление товара:</h1>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Модель:</label>
                            <input type="text" id="model" class="form-control"   name="model" placeholder="Модель" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Сборка:</label>
                            <input type="text" id="release_date" class="form-control"   name="release_date" placeholder="Сборка" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Диаметр:</label>
                            <input type="text" id="diagonal" class="form-control"   name="diagonal" placeholder="Диаметр" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Толщина:</label>
                            <input type="text" id="scr_resol" class="form-control"   name="scr_resol" placeholder="Толщина" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ремешок:</label>
                            <input type="text" id="processor" class="form-control"   name="processor" placeholder="Ремешок" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Стекло:</label>
                            <input type="text" id="ram" class="form-control"   name="RAM" placeholder="Стекло" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Механизм:</label>
                            <input type="text" id="type_disk" class="form-control"   name="type_disk" placeholder="Механизм" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Водозащита:</label>
                            <input type="text" id="capacity" class="form-control"   name="capacity" placeholder="Водозащита" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Индикаторы:</label>
                            <input type="text" id="video" class="form-control"   name="video" placeholder="Индикаторы" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Цена:</label>
                            <input type="text" id="cost" class="form-control"   name="cost" placeholder="Цена" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Фото:</label>
                            <input type="file" class="form-control" id="photo" name="photo" placeholder="photo" required>
                        </div>


                        <button type="submit" class="btn btn-default">Добавить товар</button><br><br>
                    </form>

                </div>
                <div class="col-lg-4"></div>

            </div>


        </div>


    </div>




    <footer>
        <div id="footer">© 2016 All rights reserved</div>
    </footer>
</div>
</body>
</html>


