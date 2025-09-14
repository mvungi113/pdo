<?php 
require_once 'config/db.php';

// $insert = "insert into users(name) values(?)";
$insert = "insert into users (name) values(:name)";
// $sql = "insert into users(name) values('John')";

$stm = $conn -> prepare($insert);
// $stm -> execute(['Haji' ]);
$stm ->execute(['name' => 'Anda Mbillah']);

