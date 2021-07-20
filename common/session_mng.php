<?php

session_start();
function setSession($username,$name){
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
}
function checkSession(){
    if(isset($_SESSION["username"])){
        return true;
    }
    else{
        return false;
    }
}
function logout(){
    unset($_SESSION["username"]);
    unset($_SESSION["name"]);
    header("Location: http://localhost:8080/quotation");
}
?>