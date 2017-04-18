<?php

    if(!empty($_POST)) {

        session_start();

        $_SESSION['goods'][] = $_POST['good_id'];

    }

?>