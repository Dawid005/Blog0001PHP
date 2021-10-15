<?php   
    session_start();
    
    if(isset($_SESSION['logedIn'])){

        require_once ('sqlQuery.php');

        $nick = $_SESSION['nick'];
        $nick = strtolower($nick);
        if(isset($_POST['content'])){
            $content = $_POST['content'];

            $data = (string)date('Y-m-d H:i:s');

            $content = $content . "\n" . $data . "\n";

            $sql = "INSERT INTO ". "$nick"."_posts (content) VALUES ('$content')";
            sqlQuery($sql);
        }
    }

    //header('Location: index.php');