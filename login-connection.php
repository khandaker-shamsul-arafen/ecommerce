<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "emart";

    // Create connection
    $conn =mysqli_connect($servername, $username, $password, $database) or die("Database Conncetion faile");

    // if ($conn->connect_errno) {
    //     printf("Connect failed: %s\n", $conn->connect_error);
    //     exit();
    // }
    // printf("Connected successfully");
?>