<?php
require_once("../common/connection.php");

$username=$_POST["username"];
$name=$_POST["name"];
$post_title=["title"];
$post_content=$_POST["content"];
$bold=options_check("bold");
$italic=options_check("italic");
$underline=options_check("underline");
$bg_color=$_POST["bg"];
$font_style=$POST["font"];
$likes=0;
$status=1;
$category=$_POST["category"];
$sql="UPDATE posts set post_title='$post_title',post_content='$post_content',
bold='$bold',italic='$italic',underline='$underline',bg_color='$bg_color',
font_style='$font_style',likes='$likes',status='$status',category='$category' where username='$username";

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