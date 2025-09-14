<?php

$server = '127.0.0.1'; // 127.0.0.1
$dbname = 'crud_app';
$username = 'root';
$password = '';

// $dns = "mysql:host=$server;dbname=$dbname";
// connect to db
try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname",$username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
      echo "Database Connected Successfully";

    // if($conn){
    //     echo "Database Connected Successfully";
    // }

}catch(PDOException $error){
    die("Connection Failed :". $error->getMessage());
}


?>
