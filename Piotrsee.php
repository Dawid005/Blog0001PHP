<?php

    session_start();

    if($_SESSION['logedIn']==true && isset($_SESSION['logedIn'])){
        $_SESSION['nickSee']=$_SESSION['nick'];

        require_once ('sqlQueryShow.php');

        $sql = "SELECT content FROM piotr_posts";

        sqlQueryShow($sql);

        header('Location: usersSeePost.php');

    }