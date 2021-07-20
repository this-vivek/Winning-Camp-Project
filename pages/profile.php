<!DOCTYPE html>
<html lang="en">
<?php 
 require("../common/session_mng.php");
 if(!checkSession()){
    header("Location: http://localhost:8080/quotation");
 }
 require_once("../common/connection.php");
$username=$_SESSION["username"];
$sql="select * from users where username='$username'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$name=$row["name"];
$email=$row["email"];
$mobile=$row["mobile"];
$DOB=$row["DOB"];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<?php require_once("../common/links.php")?>

<body style="padding-top: 70px;">
    <?php 
    $msg=@$_GET["msg"];
    if($msg=="success"){
        ?>
    <div class="alert show showAlert">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Message: Post Added Successfully!</span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <?php
    }
    else {
        ?>
    <div class="alert ">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg"></span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <?php
    }
    ?>

    <?php require_once("../common/navProfile.php");?>
    <link rel="stylesheet" href="../styles/profile.css">
    <div class="container-fluid ">
        <div class="row h-100 d-flex align-items-center justify-content-center">
            <div class=" col-8 center-container bg-white">
                <div class="container-fluid">
                    <!-- content starts here  -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <h3 class="text-center profile-heading">PROFILE</h3>
                        </div>
                        <!-- Personal Data -->
                        <div class="col-12 mt-3 ">

                            <div class="row profile-row ">
                                <div class="col-6">
                                    <div class="row m-0 p-0 d-flex align-items-center justify-content-center">
                                        <div class="col-10 m-0 p-0">
                                            <div class="form-group">
                                                <input type="text" readonly class="form-control" id="name"
                                                    aria-describedby="Name" value="<?php echo $name?>"
                                                    placeholder="Enter Name">

                                            </div>
                                        </div>
                                        <div class="col-1 icon m-0 p-0" id="nameButton">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="row  d-flex align-items-center justify-content-center">
                                        <div class="col-10 m-0 p-0">
                                            <div class="form-group">
                                                <input type="text" readonly class="form-control" id="username"
                                                    aria-describedby="username" value="<?php echo $username?>"
                                                    placeholder="username">

                                            </div>
                                        </div>
                                        <div class="col-1 icon">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row profile-row">
                                <div class="col-6">
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <div class="col-10 m-0 p-0 ">
                                            <div class="form-group">
                                                <input type="Email" readonly value="<?php echo $email?>"
                                                    class="form-control" id="email" aria-describedby="Email"
                                                    placeholder="Enter Email">

                                            </div>
                                        </div>
                                        <div class="col-1 icon" id="emailButton">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <div class="col-10 m-0 p-0">
                                            <div class="form-group">
                                                <input type="Number" readonly class="form-control" id="mobile"
                                                    aria-describedby="Number" value="<?php echo $mobile?>"
                                                    placeholder="Enter Your Mobile Num.">

                                            </div>
                                        </div>
                                        <div class="col-1 icon" id="mobileButton">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center  profile-row">
                                <div class="col-4 m-0 p-0">
                                    <div class="form-group text-center">
                                        <label for="DOB">Date Of Birth</label>
                                        <input type="Date" readonly class="form-control" value="<?php echo $DOB?>"
                                            id="DOB" aria-describedby="DOB" placeholder="Enter DOB">
                                    </div>
                                </div>
                                <div class="col-1 icon date " id="dateButton">

                                    <i class="fas fa-edit fa-lg"></i>


                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Personal Data end -->
                        <!-- Users Post data -->
                        <div class="col-12 mt-4">
                            <?php
                require("../common/functions.php");
                $sql = "SELECT * FROM `posts` WHERE username='$username' && status=1";
               
                $color="";
                $style="";
                $bold="";
                $italic="";
                $underline="";

                $result=$conn->query($sql);
                if($result)
                if($result->num_rows > 0)
                while($row=$result->fetch_assoc()){
                    $id=$row["id"];
                    $border_bottom="border-light";
                    $fontColor="white";
                    $color=set_bgColor($row["bg_color"]);
                    if($row["bg_color"]=="Yellow" || $row["bg_color"]=="White"){
                        $fontColor="black";
                        
                    }
                    $style=set_fontFamily($row["font_style"]);
                    if($row["bold"]==1){
                        $bold="bold";
                    }
                    if($row["italic"]==1){
                        $italic="italic";
                    }
                    if($row["underline"]==1){
                        $underline="underline";
                    }
                   ?>
                            <div class=" mt-4 col-lg-12 col-sm-12 mx-0 p-0 " id="basic-waypoint">
                                <div class="rounded border border-dark" style="background-color:<?php echo $color?>;">
                                    <button class="close" type="button"><i class="fas fa-bookmark fa-sm "
                                            aria-hidden="true"></i></button>
                                    <h4 class=" border-bottom <?php echo $border_bottom;?> p-2"
                                        style=" font-family: 'Pacifico', cursive; color:<?php echo $fontColor;?>">
                                        <?php echo $row["name"]; ?></h4>
                                    <p class=" m-0 p-4 " id="text" style="font-family: <?php echo $style; ?>;   font-weight: <?php echo $bold;?>; font-style:<?php echo $italic?>;
                            text-decoration:<?php echo $underline?>; color:<?php echo $fontColor;?>;font-size:125%;">
                                        “<?php echo $row["post_content"]; ?>.”</p>
                                </div>
                                <div class="row mx-0 justify-content-left ">
                                    <div class="col-lg-3 col-sm-4 pl-4">
                                        <span>Likes</span>
                                        <span><?php echo $row["likes"];?></span>
                                    </div>

                                    <div class="col-lg-2 col-sm-4">
                                        <span>Share</span>
                                        <span class="fas fa-share fa-lg " aria-hidden="true"></span>
                                    </div>
                                    <div
                                        class=" col-lg col-sm-4 icon align-self-end d-flex justify-content-end align-items-center">
                                        <a href="../api/hide.php?id=<?php echo $id;?>" class="icon"><span>Delete</span>
                                            <span class="fas fa-trash fa-lg ml-1 " aria-hidden="true"></span></a>
                                    </div>
                                    <div
                                        class=" col-lg col-sm-4 icon align-self-end d-flex justify-content-end align-items-center">
                                        <a href="updatePost.php?id=<?php echo $id;?>" class="icon"><span>Edit</span>
                                            <span class="fas fa-edit fa-lg ml-1 " aria-hidden="true"></span></a>
                                    </div>
                                </div>

                            </div>
                            <?php 
                }
                ?>

                        </div>
                        <!-- User post data End -->
                    </div>
                    <!-- content ends here  -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require("../common/jslinks.php");?>
    <script>
    $(document).ready(function() {
        $('#nameButton').click(function() {

            let $input = $('#name');
            if ($input.attr('readonly')) {

                $input.removeAttr('readonly');
                $("#nameButton").css("color", "black");
            } else {
                insertToDatabase("name", $input.val())
                $input.attr('readonly', true);
                $("#nameButton").css("color", "rgb(177, 172, 172)");
            }
        })

        $('#emailButton').click(function() {

            let $input = $('#email');
            if ($input.attr('readonly')) {

                $input.removeAttr('readonly');
                $("#emailButton").css("color", "black");
            } else {
                insertToDatabase("email", $input.val())
                $input.attr('readonly', true);
                $("#emailButton").css("color", "rgb(177, 172, 172)");
            }
        })

        $('#mobileButton').click(function() {

            let $input = $('#mobile');
            if ($input.attr('readonly')) {

                $input.removeAttr('readonly');
                $("#mobileButton").css("color", "rgb(177, 172, 172)");
            } else {
                insertToDatabase("mobile", $input.val())
                $input.attr('readonly', true);
                $("#mobileButton").css("color", "rgb(177, 172, 172)");
            }
        })

        $('#dateButton').click(function() {

            let $input = $('#DOB');
            if ($input.attr('readonly')) {

                $input.removeAttr('readonly');
                $("#dateButton").css("color", "rgb(177, 172, 172)");
            } else {
                insertToDatabase("DOB", $input.val())
                $input.attr('readonly', true);
                $("#dateButton").css("color", "rgb(177, 172, 172)");
            }
        })
    })


    function insertToDatabase(colname,
        userdata) {
        $.get("../api/updatePerData.php", {
                col: colname,
                data: userdata
            })
            .done(function(data) {
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function() {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                }, 5000);
                $(".msg").text(data);
            });
    }
    $('.close-btn').click(function() {
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    });
    </script>
</body>

</html>