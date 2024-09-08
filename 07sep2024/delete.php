<?php

require_once("connect.php") ;

$id= $_POST['id'];

$sql = "DELETE FROM students WHERE id ='$id'";


$delete = mysqli_query($conn,$sql);

if($delete){
    echo "Deleted";
}



?>

