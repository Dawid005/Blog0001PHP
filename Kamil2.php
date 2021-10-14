<?php

    require_once ('sqlQuery.php');

    $sql = "INSERT INTO kamil_posts (content) VALUES ('$content')";

    sqlQuery($sql);