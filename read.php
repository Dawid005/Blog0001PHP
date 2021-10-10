<?php
    require_once 'connectMysql.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connection = @new mysqli($objMysql->host, $objMysql->db_user, $objMysql->db_password, $objMysql->db_name);

        if($connection -> connect_errno!=0){
            echo "Error:".$connection->connect_errno;
        }

        $sql = "SELECT * FROM posts0001;" ;

        if ($connection->query($sql) === TRUE) {
            
        } 
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
          
        $connection->close();

    ?>


</body>
</html>