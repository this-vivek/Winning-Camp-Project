<?php
require_once("../common/connection.php");
session_start();
$username=$_SESSION["username"];
$col=$_GET["col"];
$data=$_GET["data"];

$sql="update users set $col='$data' where username='$username'";
$result=$conn->query($sql);
if($result)
{
    
    echo "$col updated Successfully";
    }
    else{
    echo "Error in ".$sql."<br>".$conn->error;
  }

$conn->close();

?>