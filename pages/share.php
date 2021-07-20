<!DOCTYPE html>
<html lang="en">

<?php  require("../common/session_mng.php");
 $id=null;
 $id=@$_GET["id"];
$category="";

if(!isset($id)){
    header("Location:http://localhost:8080/quotation/pages/home.php");
}
require_once("../common/connection.php");
require("../common/functions.php");

$sql="select * from posts where id=$id";
$result=$conn->query($sql);
if(!$result){
    header("Location:http://localhost:8080/quotation/pages/home.php?error=$conn->error");
}
if($result->num_rows<0){
    header("Location:http://localhost:8080/quotation/pages/home.php");
}
$row = $result->fetch_assoc();
$name=$row["name"];
$content=$row["post_content"];
$textarea_content='" '.$content.' "';
$bg_color=$row["bg_color"];
$font_style=$row["font_style"];
$category=$row["category"];
$bold=$row["bold"];
$italic=$row["italic"];
$underline=$row["underline"];
$italicer="";
$bolder="";
$category=$row["category"];
$underliner="";
if($bold==1){
    $bolder="bolder";
}
if($italic==1){
    $italicer="italicer";
}
if($underline==1){
    $underliner="underline";
}
$textColor="white";
if($bg_color=="Yellow" || $bg_color=="White"){
    $textColor="black";
}
$real_bg_color=set_bgColor($bg_color);

$real_font_style=set_fontFamily($font_style);


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quote</title>
</head>
<?php require_once("../common/links.php");?>

<body>

    <link rel="stylesheet" type="text/css" href="../styles/AddQuote.css">

    <div class="wrapper">

        <?php 
         if(checkSession()){
            require_once("../common/navProfile.php");
         }
        
        ?>
        <div class="input-box">
            <h4 class="display-4 "><?php echo $name?></h4>
        </div>
        <div class="post-wrapper">

            <div class="post">
                <textarea maxlength="80" id="textarea"
                    style="background-color:<?php echo $real_bg_color ?>; font-family:<?php echo $real_font_style ?>; color:<?php echo $textColor?>"
                    class="<?php echo $bolder." ".$italicer." ".$underliner;?>"
                    readonly><?php echo $textarea_content?></textarea>
            </div>

        </div>



    </div>

</body>

</html>