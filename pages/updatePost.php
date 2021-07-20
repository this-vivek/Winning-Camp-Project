<!DOCTYPE html>
<html lang="en">

<?php 
 require("../common/session_mng.php");
 if(!checkSession()){
    header("Location: http://localhost:8080/quotation");
 }
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

$content=$row["post_content"];
$textarea_content='" '.$content.' "';
$bg_color=$row["bg_color"];
$font_style=$row["font_style"];
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
    <div class="alert">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Message: Post Added Successfully!</span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <div class="wrapper">
        <?php require_once("../common/navProfile.php");?>
        <div class="input-box">
            <h3> Add Posts</h3>
            <input type="text" name="content" value="<?php echo $content?>" required id="enter" class="input-text"
                placeholder="Enter Here">
        </div>
        <div class="post-wrapper">

            <div class="post">
                <textarea maxlength="80" id="textarea"
                    style="background-color:<?php echo $real_bg_color ?>; font-family:<?php echo $real_font_style ?>; color:<?php echo $textColor?>"
                    class="<?php echo $bolder." ".$italicer." ".$underliner;?>"
                    readonly><?php echo $textarea_content?></textarea>
            </div>
            <div class="options">
                <div class="colors">
                    <select name="bg" id="colors">
                        <?php 
                            if($bg_color=="Black"){
                                echo ' <option value="Black" selected id="black">Black</option>';
                            }else {
                                echo ' <option value="Black" id="black">Black</option>';
                            }
                            if($bg_color=="Purple"){
                                echo ' <option value="Purple" selected id="purple">Purple</option>';
                            }else {
                                echo '  <option value="Purple" id="purple">Purple</option>';
                            }
                            if($bg_color=="Yellow"){
                                echo ' <option value="Yellow" selected id="yellow">Yellow</option>';
                            }else {
                                echo ' <option value="Yellow" id="yellow">Yellow</option>';
                            }
                            if($bg_color=="White"){
                                echo ' <option value="White" selected id="white">White</option>';
                            }else {
                                echo ' <option value="White" id="white">White</option>';
                            }  
                        ?>
                    </select>
                </div>
                <?php
                    if($italic==1){
                       echo  '<div class="italic style-button" id="italic"><a href="#" role="button">I</a></div>';
                    }
                    else{
                        echo  '<div class="italic" id="italic"><a href="#" role="button">I</a></div>';
                    }
                ?>
                <?php
                    if($bold==1){
                       echo  '<div class="bold style-button" id="bold">
                       <a href="#" role="button">B</a>
                   </div>';
                    }
                    else{
                        echo  '<div class="bold" id="bold">
                        <a href="#" role="button">B</a>
                    </div>';;
                    }
                ?>
                <?php
                    if($underline==1){
                       echo  '<div class="underline style-button" id="underline"><a href="#" role="button">U</a></div>';
                    }
                    else{
                        echo  '<div class="underline" id="underline"><a href="#" role="button">U</a></div>';
                    }
                ?>
                <div class="textstyle">
                    <select name="Font Family" id="FontFamily">
                        <?php 
                            if($font_style=="Times New Roman"){
                                echo ' <option value="Times New Roman" selected>Times New Roman</option>';
                            }else {
                                echo ' <option value="Times New Roman">Times New Roman</option>';
                            }
                            if($font_style=="Arial"){
                                echo ' <option value="Arial" selected>Arial</option>';
                            }else {
                                echo '  <option value="Arial">Arial</option>';
                            }
                            if($font_style=="Courier New"){
                                echo ' <option value="Courier New" selected>Courier New</option>';
                            }else {
                                echo ' <option value="Courier New">Courier New</option>';
                            }
                            if($font_style=="cursive"){
                                echo ' <option value="cursive" selected>cursive</option>';
                            }else {
                                echo ' <option value="cursive">cursive</option>';
                            }  
                        ?>
                    </select>
                </div>
                <div class="submit-div">
                    <button><a>Post</a></button>
                </div>
            </div>
        </div>



    </div>
    <?php require("../common/jslinks.php");?> <script>
    $(document).ready(function() {
        $("#enter").keyup(function() {
            var name = $("#enter").val();
            $("#textarea").text('" ' + name + ' "');

        });

    });

    $(document).ready(function() {
        $('#colors').change(function() {
            if ($(this).val() == 'Yellow') {
                $("#textarea").css("background-color", "rgb(212, 212, 87)");
                $("#textarea").css("color", "black");

            }
            if ($(this).val() == 'Purple') {
                $("#textarea").css("background-color", "rgb(114, 28, 114)");
                $("#textarea").css("color", "white");
            }
            if ($(this).val() == 'Black') {
                $("#textarea").css("background-color", "rgb(33, 33, 33)")
                $("#textarea").css("color", "white");
            }
            if ($(this).val() == 'White') {
                $("#textarea").css("background-color", "White");
                $("#textarea").css("color", "black");
            }

        })


    })
    $(document).ready(function() {
        $('#FontFamily').change(function() {
            if ($(this).val() == 'Times New Roman') {
                $("#textarea").css("font-family", "'Times New Roman', Times, serif")
            }
            if ($(this).val() == 'Arial') {
                $("#textarea").css("font-family", "Arial, Helvetica, sans-serif")
            }
            if ($(this).val() == 'Courier New') {
                $("#textarea").css("font-family", "'Hind Siliguri', sans-serif")
            }
            if ($(this).val() == 'cursive') {
                $("#textarea").css("font-family", "'Pacifico', cursive")
            }

        })
    })

    $(document).ready(function() {
        $('#italic').click(function() {
            $("#textarea").toggleClass("italicer")
            $("#italic").toggleClass("style-button")
        })
        $('#bold').click(function() {
            $("#textarea").toggleClass("bolder")
            $("#bold").toggleClass("style-button")
        })
        $('#underline').click(function() {
            $("#textarea").toggleClass("underliner")
            $("#underline").toggleClass("style-button")
        })
    })

    $(document).ready(function() {
        $(".submit-div").click(function() {
            let content = $("#enter").val();
            let bg = $("#colors").val();
            let font = $("#FontFamily").val();
            let italic = $("#italic").hasClass("style-button");
            let bold = $("#bold").hasClass("style-button");
            let underline = $("#underline").hasClass("style-button");
            let category = "<?php echo $category?>";
            let p_id = <?php echo $id?>;

            // $.get("../api/submit-post.php?content=", {
            //     content: content,
            //     bg: bg,
            //     font: font,
            //     italic: italic,
            //     underline: underline,
            //     bold: bold,
            //     category: category
            // }).done(function(data) {
            //     alert("Data Loaded: " + data);
            // });
            $.ajax({
                url: "../api/updatePostApi.php",
                type: "get", //send it through get method
                data: {
                    id: p_id,
                    content: content,
                    bg: bg,
                    font: font,
                    italic: italic,
                    underline: underline,
                    bold: bold,
                    category: category
                },
                success: function(response) {
                    window.location.href =
                        "http://localhost:8080/quotation/pages/profile.php?msg=success";
                },
                error: function(xhr) {
                    //Do Something to handle error
                    alert("Error: " + xhr);
                }
            });
            console.log("done");
        })
    })
    </script>
</body>

</html>