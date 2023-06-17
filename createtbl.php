<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname="test";
    try{
        $conn = new PDO("mysql:host=127.0.0.1:3306;dbname=test", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql ="CREATE table donor(
            id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname varchar(255) NOT NULL,
            lastname varchar(255) NOT NULL,
            email varchar(255)NOT NULL,
            tel varchar(10)NOT NULL,
            ville varchar(255)NOT NULL,
            tb varchar(255)NOT NULL,
            time varchar(255)NOT NULL)
            ";
  $conn->exec($sql);
  echo "Table donor created successfully";
}
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>