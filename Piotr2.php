<?php

    require_once ('sqlQuery.php');

    $sql = "INSERT INTO piotr_posts (content) VALUES ('$content')";

   sqlQuery($sql);


?>