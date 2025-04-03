<?php

$connection = new mysqli('localhost', 'root');

// $connection->query("CREATE DATABASE NSTI");
$connection->query("USE NSTI");
// $connection->query("CREATE TABLE student (id INT, name VARCHAR(50), address VARCHAR(100))");
$connection->query("insert into student values (1,'karan','sarangarh')");

?>