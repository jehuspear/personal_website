<?php
    // AZURE DATABASE
    $hostName = "jehu-server.mysql.database.azure.com";
    $dbUser = "adminjehu";
    $dbPassword = "WebProg_2024";
    $dbName = "personal_web_db";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong!");
    }

    // XAMPP LOCALHOST DATABASE
    // $hostName = "localhost";
    // $dbUser = "root";
    // $dbPassword = "";
    // $dbName = "personal_web_db";
    // $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    // if (!$conn) {
    //     die("Something went wrong!");
    // }


?>