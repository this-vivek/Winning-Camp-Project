<?php
require_once("../common/connection.php");
require("../common/session_mng.php");
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * from users where email='$username' && password='$password'" ;

$result=$conn->query($sql);
if($result)
{
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        setSession($row["username"],$row["name"]);
        echo $row["username"];
       header("Location: http://localhost:8080/quotation/");
    }
    else{
    header("Location:http://localhost:8080/quotation/index.html?msg=wrong credentials");
    }
}else{
    echo "Error in ".$sql."<br>".$conn->error;
  }

$conn->close();
?>