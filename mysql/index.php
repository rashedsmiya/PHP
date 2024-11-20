<?php 

    // Connecting MySql with Procedural aporoach

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbName     = "phptutorial";

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Check Connection
    if($conn->connect_error){
        echo "Connection failed: " . $conn->connect_error;
    }

  
    