<?php
require_once("../common/connection.php");
$username=uniqid('user_');
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$dob=$_POST["DOB"];
echo $dob;
$password=$_POST['password'];
//ADD validation
$sql="INSERT into users (username,name,password,email,mobile,DOB) 
VALUES('$username','$name','$password','$email','$mobile','$dob')" ;

$result=$conn->query($sql);
if($result)
{
    
    header("Location: http://localhost:8080/quotation");
    }
    else{
    echo "Error in ".$sql."<br>".$conn->error;
  }

$conn->close();
?>