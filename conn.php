<?php
    $servername = 'localhost';
    $database ='leungo-database';
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "<script>console.log('connected successfully')</script>";
?>