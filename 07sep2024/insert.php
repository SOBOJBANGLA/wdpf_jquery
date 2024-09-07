<?php
require_once ("connect.php");

//print_r($_POST);

$serializedData = $_POST['mydata'];
parse_str($serializedData,$data);
//print_r($data);

$name = $data['name'];
$gender = $data['gender'];
$date = $data['date'];
$email = $data['email'];
$phone = $data['phone'];
$address = $data['address'];

$conn->query("INSERT INTO students VALUES(NULL,'$name','$gender','$date','$email','$phone','$address')");

if($conn->affected_rows){
    echo "Successfully inserted";

}





?>