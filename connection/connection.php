<?php
    include_once('login.php');
    $connection;
    $query;
    $result;

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if(mysqli_connect_error()) {
            echo "connection has failed";
        }

    $query = "SELECT * from products";
    $result = mysqli_query($connection, $query);

    if(!mysqli_num_rows($result) > 0) {
        echo "there is not results";
    } 
?>