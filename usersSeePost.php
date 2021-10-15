<?php

session_start();

require_once ('sqlQueryShow.php');

$nick = $_SESSION['nickSee'];

$nick = strtolower($nick);

$sql = "SELECT content FROM ". "$nick"."_posts";

sqlQueryShow($sql);