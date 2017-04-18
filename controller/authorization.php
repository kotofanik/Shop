<?php
require_once "db.php";
if(!empty($_POST)) {

    $login = mysql_real_escape_string(trim(strip_tags($_POST['login'])));
    $password = mysql_real_escape_string(trim(strip_tags($_POST['password'])));

    $login = md5($login);
    $password = md5($password);

    $dbc = DB::getInstance();
    $dbc->getQuery("SET NAMES UTF8");
    $result = $dbc->getQuery("SELECT `id` FROM `admin` WHERE `login` LIKE '{$login}' AND `password` LIKE '{$password}'");

    $rows = $result->fetch_assoc();\

    session_start();



    if(!isset($rows['id'])){
        echo json_encode(array('result' => 'no'));
        exit();
    } else {
        $_SESSION['admin'] = true;
        echo json_encode(array('result' => 'yes'));
        exit();
    }

}