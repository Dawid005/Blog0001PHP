<?php

    require_once ('connectionMysql.php');

    try
        {
            $conn = new mysqli($connection->host, $connection->db_user, $connection->db_password, $connection->db_name);
            if($conn -> connect_errno)
            {   
                throw new Exception(mysqli_connect_errno());
            }   
            $content = $_POST["content"];

            $data = (string)date('Y-m-d H:i:s');

            $content = $content . "\n" . $data . "\n";

            $sql = "INSERT INTO piotr_posts (content) VALUES ('$content')";
            $conn->query($sql);
            
            $conn->close();
        header('Location: index.php');
        }       
        catch(Exception $e)
        {       
            echo '<span style="color:red;">Error of server! Sorry, please
            make an account next time!</span>';
            echo  '<br />Information for developers: '.$e;
        }      


?>