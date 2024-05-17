<?php

    $servername = "localhost"; 
    $username = "id22173846_studentdb"; 
    $password = "Studentdb_1234"; 
    $dbname = "id22173846_studentdb"; 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //executes if the connection has failed.
    if ($conn == false){
        die("Connection failed: ". mysqli_connect_error());
    }
?>
