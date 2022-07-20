<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'to_do_list';

try{
    $conn = new PDO("mysql:host=$servername; dbname=$db_name", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo 'connected !';

}catch(PDOException $e){

    echo 'connection failed : ' . $e->getMessage();
    
}