<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1026";

$serv = mysqli_connect($servername,$username,$password);

$q0 = "CREATE DATABASE IF NOT EXISTS db1026";
mysqli_query($serv,$q0);

$connect_db = new mysqli($servername, $username, $password, $dbname);

if ($connect_db->connect_error) {
    die($connect_db->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS accounts(
        id INT(4) AUTO_INCREMENT PRIMARY KEY, 
        user_name VARCHAR(30) UNIQUE NOT NULL,
        password VARCHAR(50) NOT NULL
        )";

if ($connect_db->query($sql) == FALSE)
    echo  $connect_db->error;
?>