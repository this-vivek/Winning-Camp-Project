<?php
$servername="localhost";
$username="root";
$password="123456789";
$db="quotation-web";

$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

?>