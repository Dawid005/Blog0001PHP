<?php

    require_once ('connectionMysql.php');

    try
        {
            $conn = new mysqli($connection->host, $connection->db_user, $connection->db_password, $connection->db_name);
            if($conn -> connect_errno)
            {   
                throw new Exception(mysqli_connect_errno());
            }   


            $sql = "SELECT content FROM marek_posts";
            $result = $conn->query($sql);
            
            if($result->num_rows >0){

                while($row = $result->fetch_assoc()) {
                    echo $row["content"]. "<br>";
                  }
            }

            $conn->close();
        }       
        catch(Exception $e)
        {       
            echo '<span style="color:red;">Error of server! Sorry, please
            make an account next time!</span>';
            echo  '<br />Information for developers: '.$e;
        }      


?>