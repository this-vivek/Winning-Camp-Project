<?php
require_once("../common/connection.php");
session_start();
$id=$_GET["id"];
$username=$_SESSION["username"];
$name=$_SESSION["name"];
$post_title="xyz";
$post_content=$_GET["content"];
$bold=options_check($_GET["bold"]);
$italic=options_check($_GET["italic"]);
$underline=options_check($_GET["underline"]);
$bg_color=$_GET["bg"];
$font_style=$_GET["font"];
$likes=0;
$status=1;
$category=$_GET["category"];
$sql="UPDATE posts set post_title='$post_title',post_content='$post_content',
bold='$bold',italic='$italic',underline='$underline',bg_color='$bg_color',
font_style='$font_style',likes='$likes',status='$status',category='$category' where id=$id";

if($conn->query($sql)==TRUE){
    echo "success";
}
else{
    echo "error in ".$sql."<br>".$conn->error;
}
$conn->close();
?>
<?php

function options_check($op){
    if($op=="true"){
    return 1;
    }
    return 0;
    }
?>