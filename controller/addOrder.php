<?php
    require_once "db.php";
    @session_start();


function escape_inj ($text) {
    $text = strtolower($text); // Приравниваем текст параметра к нижнему регистру
    if (
        !strpos($text, "select") && //
        !strpos($text, "union") && //
        !strpos($text, "update") && //
        !strpos($text, "order") && // Ищем вхождение слов в параметре
        !strpos($text, "where") && //
        !strpos($text, "char") && //
        !strpos($text, "from") &&//
        !strpos($text, "drop") &&//
        !strpos($text, "insert") &&//
        !strpos($text, "delete") &&//
        !strpos($text, "alter") &&//
        !strpos($text, "table") &&//
        !strpos($text, "like")  //
    ) {

        return true;
    } else {
        return false;
    }


}

    $dbc = DB::getInstance();
    $dbc->getQuery("SET NAMES UTF8");

    $good = "";
    if(@isset($_SESSION['goods'])){

        for($i = 0; $i<count($_SESSION['goods']); $i++) {


            $result = $dbc->getQuery("SELECT `model` FROM `goods` WHERE `id` LIKE '{$_SESSION['goods'][$i]}'");
            $rows = $result->fetch_assoc();

            $good .= $rows['model'].", ";
        }

       // echo $good;

        //exit;

    }


    if(!empty($_POST)) {

        $name = mysql_real_escape_string(trim(strip_tags($_POST['name'])));
        $phone = mysql_real_escape_string(trim(strip_tags($_POST['phone'])));
        $address =mysql_real_escape_string( trim(strip_tags($_POST['address'])));






        if(!escape_inj($name) && !escape_inj($phone) && !escape_inj($address))
        {
            echo "Error";
            exit();


        } else {


            $dbc = DB::getInstance();
            $dbc->getQuery("SET NAMES UTF8");
            $result = $dbc->getQuery("INSERT INTO `orders`(`id`, `goods`, `name`, `phone`, `address`) VALUES (NULL,'{$good}','{$name}','{$phone}','{$address}')");
            unset($_SESSION['goods']);
        }













    }