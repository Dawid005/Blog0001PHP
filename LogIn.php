<?php

session_start();
    
    if( isset($_SESSION['logedIn']) && ($_SESSION['logedIn'] ==true)){
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #container{
            text-align:center;
            margin-left:auto;
            margin-right:auto;
        }
    </style>
</head>
<body>
    <div id="container">
        <form method="post">

            Nick: <br /> <input type = "text" name="nick" /> <br />

            Password: <br /> <input type = "text" name="password" /> <br />

            <input type="submit" value="Log in" /> <br />

        </form>

        <div id="Menu">
            <a href="index.php">Go to home page</a>
        </div>
    </div>

    <?php
        require_once 'connectMysql.php';

        @$nick = $_POST['nick'];
        @$password = $_POST['password'];

        @$nick = htmlentities($nick);
        @$password = htmlentities($password);

        $everythingOk = true;

        try
        {
            $connection = new DataBase("localhost", "root","", "blog0001" );
            $conn = new mysqli($connection->host, $connection->db_user, $connection->db_password, $connection->db_name);
            if($conn -> connect_errno)
            {   
                throw new Exception(mysqli_connect_errno());
            }   
            else
            {   
                //Does email exist already?
                $result = $conn->query("SELECT pass FROM users0001 WHERE nick = '$nick'");

                if(!$result) throw new Exception($conn->error);

                $how_many_nicks = $result->num_rows;
                
                $row = $result -> fetch_assoc();

                if($how_many_nicks<1 && isset($_POST['nick']) && isset($_POST['password']))
                {
                    $everythingOk = false;
                    $_SESSION['error'] = "There is no user with this nick";
                    if($row['pass']!=$_POST['password']){
                        $everythingOk = false;
                        $_SESSION['error'] = "Bad password";
                    }
                }

                if($everythingOk==true  && isset($_POST['nick']) && isset($_POST['password']))
                {       
                    //Everything is okay, we can create new account

                    $_SESSION['logedIn'] = true;
                    $_SESSION['nick'] = $_POST['nick'];
                    header('Location: index.php');
                }               

                $conn->close();
            }   
        }       
        catch(Exception $e)
        {       
            echo '<span style="color:red;">Error of server! Sorry, please
            make an account next time!</span>';
            echo  '<br />Information for developers: '.$e;
        }      

    ?>
</body>
</html>