<?php

$db= new mysqli("localhost:3310","root","","w60");

//echo $_GET['id'];

//echo "Hello world";

$id =$_GET['id'];

/*$cities =array (
    1 =>"Dhaka is famous for mosque",
    2 =>"Cumilla is famous for Roshmalai",
    3 =>"Rajshahi is famous for mango"
);

echo $cities[$id];*/

$sql = $db->query("SELECT * FROM city WHERE id = '$id'");

$row = $sql->fetch_assoc();

echo $row['name']. ": " . $row['detais'];


?>