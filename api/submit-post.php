<?php
require_once("../common/connection.php");

$username="user_60f32bbc24e89";
$name="charlie";
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
$sql="INSERT into posts (username,name,post_title,post_content,bold,italic,underline,bg_color,font_style,likes,status,category)
VALUES('$username','$name','$post_title','$post_content','$bold','$italic','$underline','$bg_color','$font_style','$likes','$status','$category')";

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
if(isset($_POST[$op])){
return 1;
}
return 0;
}
?>