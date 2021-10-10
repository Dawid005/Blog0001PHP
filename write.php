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
            session_start();
                if(!isset($_SESSION['logedIn']) && $_SESSION['logedIn']!==true){
                    header('Location: index.php');
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