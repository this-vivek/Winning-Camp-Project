<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<head>
    <title>quotation</title>
</head>
<?php 
 require("../common/session_mng.php");

?>
<?php require_once("../common/links.php")?>


<body class="bg-white " style="padding-top: 40px;">


    <?php 
     if(checkSession()){
        require_once("../common/nav.php");
    }
    else{
    require_once("../common/nav-no-login.php");
    }
    ?>
    <?php
    require_once("../common/connection.php");
   

?>
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
    else{
        ?>
    <div class="alert ">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Message: Post Added Successfully!</span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <?php
    }
    ?>
    <!-- carousel here -->

    <div class="container-fluid  animated  mt-5 d-sm-none d-lg-block">
        <div class="carousel slide m-2 bg-white border border-dark" data-ride="carousel" id="headerCarousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row ">
                        <div class="col-lg-5 offset-lg-2 col-sm-7 align-self-center">
                            <div>
                                <h1>Walt Disney</h1>
                                <p class="lead">“The Best Way To Get Started Is To Quit Talking And Begin Doing.”</p>
                            </div>
                        </div>
                        <div class="col-4 offset-sm-1 col-lg-4 offset-lg-1 align-lg-self-center">
                            <img id="welcome" class=" img-fluid" width="50%" height="50%"
                                src="../images/Welcome Sign.svg" alt="Welcome" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item  ">
                    <div class="row ">
                        <div class="col-lg-5 offset-lg-2 col-7 align-self-center">
                            <div>
                                <h1>Winston Churchill</h1>
                                <p class="lead">“The Pessimist Sees Difficulty In Every Opportunity. The Optimist Sees
                                    Opportunity In Every Difficulty.”</p>
                            </div>
                        </div>
                        <div class="col-4 offset-sm-1 col-lg-4 offset-lg-1 align-lg-self-center">
                            <img id="welcome" class=" img-fluid" width="50%" height="50%"
                                src="../images/Welcome Sign.svg" alt="Welcome" />
                        </div>
                    </div>
                </div>
                <a href="#headerCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#headerCarousel" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- carousel ends here -->
    <div class="jumbotron p-0 mt-4 d-sm-block d-lg-none animated fadeInDown">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-7 col-7 align-self-center">
                    <div>
                        <h1>Great Throught Here</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its
                            parent.</p>
                    </div>
                </div>
                <div class="col-4 offset-lg-1 col-lg-4 offset-lg-1 align-lg-self-center">
                    <img class=" img-fluid" width="80%" height="80%" src="../images/Welcome Sign.svg" alt="Welcome" />
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-lg-2 col-sm-2 p-0 d-sm-none d-lg-block">
                <div class="row-fluid sticky-top " style="top:75px;">
                    <div class="card">
                        <div class="card-title mt-2">
                            <h4 class="lead text-center">Category</h4>
                        </div>
                        <div class="list-group">
                            <?php
                                switch(@$_GET["category"]){
                                    case "inspiration":
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white "
                                        href="home.php">All</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white active"
                                        href="home.php?category=inspiration">Inspirational</a>';   
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=sad">Sad</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=joy">Joy</a>';
                                                 
                                        break;
                                    case "sad":
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white "
                                        href="home.php">All</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=inspiration">Inspirational</a>';   
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white active"
                                        href="home.php?category=sad">Sad</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=joy">Joy</a>';
                                        break; 
                                    case "joy":
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white "
                                        href="home.php">All</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=inspiration">Inspirational</a>';   
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white "
                                        href="home.php?category=sad">Sad</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white active"
                                        href="home.php?category=joy">Joy</a>';
                                        break;
                                    default:
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white active"
                                        href="home.php">All</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=inspiration">Inspirational</a>';   
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=sad">Sad</a>';
                                        echo '<a class="list-group-item list-group-item-action list-group-item-white"
                                        href="home.php?category=joy">Joy</a>';
                                                 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 ml-4 col-sm ">
                <?php
                require("../common/functions.php");
                $sql = "Select * from posts where status=1";
                $category=@$_GET["category"];
                switch($category){
                    case "inspiration":
                        $sql = "Select * from posts where category='inspiration' && status=1";
                        break;
                    case "sad":
                        $sql = "Select * from posts where category='sad' && status=1";
                        break; 
                    case "joy":
                        $sql = "Select * from posts where category='joy' && status=1";
                        break; 
                }
                
                $color="";
                $style="";
                $bold="";
                $italic="";
                $underline="";
                $result=$conn->query($sql);
                if($result->num_rows > 0)
                while($row=$result->fetch_assoc()){
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
                <div class="col-lg-12 col-sm-12 mx-0 p-0 " id="basic-waypoint">
                    <div class="rounded border border-dark" style="background-color:<?php echo $color?>;">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class=" border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;  color:<?php echo $fontColor;?>">
                            <?php echo $row["name"]; ?></h4>
                        <p class=" m-0 p-4 " id="text" style="font-family: <?php echo $style; ?>;   font-weight: <?php echo $bold;?>; font-style:<?php echo $italic?>;
                            text-decoration:<?php echo $underline?>;font-size:125%; color:<?php echo $fontColor;?>">
                            “<?php echo $row["post_content"]; ?>.”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <?php 
                        
                        if(checkSession()){
                            ?>
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span class="fas fa-thumbs-up fa-lg " role="click"
                                onclick="likeButton(<?php echo $row['id']?>)" aria-hidden="true" id="likeButton"></span>
                            <span id="like<?php echo $row['id']?>" class="unlike"><?php echo $row["likes"];?></span>
                        </div>
                        <?php
                        }
                        else{
                            ?>
                        <div class="col-lg-3 col-sm-4 pl-4">

                            <span id="like<?php echo $row['id']?>"
                                class="unlike">Likes&nbsp;<?php echo $row["likes"];?></span>
                        </div>
                        <?php
                        }
                        ?>

                        <input type="text" hidden id="share<?php echo $row['id']?>"
                            value="http://localhost:8080/quotation/pages/share.php?id=<?php echo $row['id']?>">

                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span onclick="shareButton(<?php echo $row['id']?>)" class="fa fa-share fa-lg "
                                aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
                <?php 
                }
                ?>



            </div>


        </div>

    </div>
    </div>
    </div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php require("../common/jslinks.php");?>
<script>
// $(document).ready(function(){
//     $("#comment").click(function(){
//       $("#commentDiv").removeClass("d-none");
//       $("#commentDiv").addClass("d-block");
//       $("#commentDiv").addClass("animated fadeIn");
//         getclick="false"
//     });
// });
// $(document).ready(function(){
// 	$('#basic-waypoint').css('opacity', 0);
//   // hide our element on page load
//   $('#basic-waypoint').waypoint(function() {
//       $('#basic-waypoint').addClass('animated fadeInDown');
//   }, { offset: '100%' });
//
// });
window.sr = ScrollReveal();
sr.reveal('.navbar', {
    duration: 1000,
    origin: 'bottom'
})
sr.reveal('.card', {
    duration: 3200,
    origin: 'top',
    distance: '300'
})
sr.reveal('#basic-waypoint', {
    duration: 3200,
    origin: 'bottom',
    distance: '600',
    delay: '500'

})
sr.reveal('.carousel', {
    duration: 1000,
    origin: 'bottom'
})
</script>
<script>
function likeButton(x) {
    let post = $("#like" + x);
    if (post.hasClass("unlike")) {
        let value = post[0].outerText;
        like(x, value);
        console.log(post[0].outerText);
        post.text(parseInt(value) + 1);
        post.addClass("like");
        post.removeClass("unlike");
    } else {
        let value = post[0].outerText;
        dislike(x, value);
        console.log(post[0].outerText);
        post.text(parseInt(value) - 1);
        post.removeClass("like");
        post.addClass("unlike");
    }
}

function like(x, val) {
    $.post("../api/likes.php", {
            id: x,
            likes: val,
            type: 1
        })
        .done(function(data) {
            console.log("Data Loaded: " + data);
        });
}

function dislike(x, val) {
    $.post("../api/likes.php", {
            id: x,
            likes: val,
            type: 0
        })
        .done(function(data) {
            console.log("Data Loaded: " + data);
        });
}

function shareButton(x) {

    let str = $("#share" + x)[0].defaultValue;
    console.log(str);
    $('.alert').addClass("show");
    $('.alert').removeClass("hide");
    $('.alert').addClass("showAlert");
    setTimeout(function() {
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    }, 5000);
    $(".msg").text("Sharing Link Copied");
    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);

}


function addFriend(i) {
    $(i).removeClass("btn-outline-dark");
    $(i).addClass("btn-dark");
}

function closeAddFriendsCard(i) {
    $("#addFriends-card").removeClass("d-block");
    $("#addFriends-card-instead").removeClass("d-none");
    $("#addFriends-card").addClass(" animated fadeOut d-none ");
    $("#addFriends-card-instead").addClass(" animated fadeIn d-block ");
}
$('.close-btn').click(function() {
    $('.alert').removeClass("show");
    $('.alert').addClass("hide");
});
</script>

</html>