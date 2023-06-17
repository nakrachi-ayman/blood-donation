<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname="test";

        $conn = new PDO("mysql:host=127.0.0.1:3306;dbname=test", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>