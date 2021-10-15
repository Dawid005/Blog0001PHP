<?php

session_start();

$_SESSION['nickSee']="kamil";

header('Location: usersSeePost.php');
