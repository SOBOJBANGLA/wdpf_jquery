<?php
$conn = new mysqli("localhost","root","","jq");

$email = $_GET['em'];
$pass = $_GET['ps'];

$sql = $conn->query("SELECT * FROM login WHERE email='$email' AND password='$pass'");

if($sql->num_rows>0){
    echo "Login successful";
}else{
    echo "Login invalid";
}


?>