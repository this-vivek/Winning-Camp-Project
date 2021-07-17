<?php
require_once("../common/connection.php");
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * from users where email='$username' && password='$password'" ;

$result=$conn->query($sql);
if($result)
{
    if($result->num_rows>0){
        header("Location: http://localhost:8080/quotation/pages/home.php");
    }
    else{
    header("Location:http://localhost:8080/quotation/login.html?msg=wrong credentials");
    }
}else{
    echo "Error in ".$sql."<br>".$conn->error;
  }

$conn->close();
?>