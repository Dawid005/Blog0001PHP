<?php

    require_once ('sqlQuery.php');

    $sql = "INSERT INTO marek_posts (content) VALUES ('$content')";

    sqlQuery($sql);
