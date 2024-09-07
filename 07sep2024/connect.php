<?php

$host = "localhost:3310";
$user = "root";
$pass = "";
$db = "jquery";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "Connection failed".$conn->connect_error;
    exit();
}

?>