<?php
// define variables and set to empty values
$uid="20MCA1232";
$pass="123456789";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if($_POST['uid']==$uid && $_POST['password']==$pass)
  {
      header("Location: https://20mca1232.azurewebsites.net/home.html");
  }
}
?>
