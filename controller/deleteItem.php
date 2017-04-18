<?php


    if(!empty($_POST)) {

       @session_start();

        $key = array_search($_POST['good_id'], $_SESSION['goods']);


        unset($_SESSION['goods'][$key]);
        sort($_SESSION['goods']);

    }