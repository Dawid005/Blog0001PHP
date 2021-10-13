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
        <?php
            require_once "connectionMysql.php";

            session_start();
                if(!isset($_SESSION['logedIn']) && $_SESSION['logedIn']!==true){
                    header('Location: index.php');
                }
            
                if($_SESSION['logedIn'] == true){ 

                    if($_SESSION['nick'] == "Marek"){
                        header('Location: Marek.php');
                    }   

                    elseif($_SESSION['nick'] == "Kamil"){
                        header('Location: Kamil.php');
                    }
                    
                    elseif($_SESSION['nick'] == "Piotr"){
                        header('Location: Piotr.php');
                    }
                    
                    else{
                        header('Location: index.php');
                    }
                }
        ?>
<body>
    
    <div id="container">

        <div id="Write">
    
            <h1> Here you can make your posts </h1>

        </div>

        

        <div id="LogOut">

            <a href="LogOut.php">Click here to log out</a>
        
        </div>

    </div>

</body>
</html>