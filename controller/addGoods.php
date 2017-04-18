<?php
require_once "db.php";
if(!empty($_POST)) {

    if (!empty($_FILES['photo']['tmp_name'])) {
        $rand = rand(0,99999).time();
        $path = "../img/".$rand.$_FILES['photo']['name'];
        $filepath = "img/".$rand.$_FILES['photo']['name'];
        if (copy($_FILES['photo']['tmp_name'], $path)){

        }
    }



    $model = mysql_real_escape_string(trim(strip_tags($_POST['model'])));
    $release_date = mysql_real_escape_string(trim(strip_tags($_POST['release_date'])));
    $diagonal = mysql_real_escape_string(trim(strip_tags($_POST['diagonal'])));
    $scr_resol = mysql_real_escape_string(trim(strip_tags($_POST['scr_resol'])));
    $processor = mysql_real_escape_string(trim(strip_tags($_POST['processor'])));
    $RAM = mysql_real_escape_string(trim(strip_tags($_POST['ram'])));
    $type_disk = mysql_real_escape_string(trim(strip_tags($_POST['type_disk'])));
    $capacity = mysql_real_escape_string(trim(strip_tags($_POST['capacity'])));
    $cost = mysql_real_escape_string(trim(strip_tags($_POST['cost'])));
    $video = mysql_real_escape_string(trim(strip_tags($_POST['video'])));


    $dbc = DB::getInstance();
    $dbc->getQuery("SET NAMES UTF8");
    $result = $dbc->getQuery("INSERT INTO `goods`(`id`, `model`, `assembly`, `diameter`, `thickness`, `strap`, `glass`, `mechanism`, `water`, `indicator`, `cost`, `img_src`) VALUES (NULL,'{$model}','{$release_date}','{$diagonal}','{$scr_resol}','{$processor}','{$RAM}','{$type_disk}','{$capacity}','{$cost}','{$video}','{$filepath}')");




}
