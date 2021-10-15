<?php

require_once 'connectMysql.php';

function sqlQueryShow($sql){
    $connection = new DataBase("localhost","root", "","blog0001" );

    $conn = mysqli_connect($connection->host,$connection->db_user, $connection->db_password, $connection->db_name);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    if (mysqli_query($conn, $sql)) {
      //echo "New record created successfully";
    } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo $row["content"];
        }
      } else {
        echo "0 results";
      }

    mysqli_close($conn);
    //header('Location: index.php');
}       