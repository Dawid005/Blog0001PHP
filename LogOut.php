<?php

session_start();

unset($_SESSION['logedIn']);
unset($_SESSION['nick']);

session_unset();

header('Location: index.php');
?>