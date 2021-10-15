<?php

session_start();

$_SESSION['nickSee']="piotr";

header('Location: usersSeePost.php');
