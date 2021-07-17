<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<head>
    <title>quotation</title>
</head>
<?php require_once("../common/links.php")?>

<body class="bg-white " style="padding-top: 40px;">


    <?php require_once("../common/nav.php");?>

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
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action list-group-item-white active"
                                id="list-home-list" data-toggle="list" href="#list-home" role="tab"
                                aria-controls="home">Random</a>
                            <a class="list-group-item list-group-item-action list-group-item-white"
                                id="list-profile-list" data-toggle="list" href="#list-profile" role="tab"
                                aria-controls="profile">Inspirational</a>
                            <a class="list-group-item list-group-item-action list-group-item-white"
                                id="list-messages-list" data-toggle="list" href="#list-messages" role="tab"
                                aria-controls="messages">Sad</a>
                            <a class="list-group-item list-group-item-action list-group-item-white"
                                id="list-settings-list" data-toggle="list" href="#list-settings" role="tab"
                                aria-controls="settings">Editor's choice</a>
                            <a class="list-group-item list-group-item-action list-group-item-white"
                                id="list-settings-list" data-toggle="list" href="#list-settings" role="tab"
                                aria-controls="settings">Joy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm px-lg-4">
                <div class="col-lg-12 col-sm-12 mx-0 p-0 " id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;">Amit Kalantri</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif; font-size:125%;">
                            “A group of sheep led by a tiger can defeat a group of tigers led by a sheep.”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"
                                id="likeButton"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-12  mx-0 mt-4 p-0" id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;"> Cara Dee</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif; font-size:125%;">
                            “Titles were what we made them, whether it was age play or the lifestyle of DD/lb. With or
                            without regression,
                            with or without commitment. As long as it felt right, in one way or another.”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"
                                id="likeButton"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-12  mx-0 mt-4 p-0 " id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;">Marilyn Faneite</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif ; font-size:125%;">
                            “If you are not noble in your thoughts and actions, no title awarded by any king or queen
                            can make you so.”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-12  m-0 p-0" id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;"> Alberto Manguel</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif ; font-size:125%;">
                            “Old books that we have known but not possessed cross our path and invite themselves over.
                            New books try to seduce us daily with tempting titles and tantalizing covers. ”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"
                                id="likeButton"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12  m-0 p-0" id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;">Amit Kalantri</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif; font-size:125%;">
                            “A group of sheep led by a tiger can defeat a group of tigers led by a sheep.”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"
                                id="likeButton"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-12 m-0 p-0" id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;"> Cara Dee</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif; font-size:125%;">
                            “Titles were what we made them, whether it was age play or the lifestyle of DD/lb. With or
                            without regression,
                            with or without commitment. As long as it felt right, in one way or another.”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"
                                id="likeButton"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-12  m-0 p-0" id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;">Marilyn Faneite</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif ; font-size:125%;">
                            “If you are not noble in your thoughts and actions, no title awarded by any king or queen
                            can make you so.”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"
                                id="likeButton"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-12 m-0 p-0" id="basic-waypoint">
                    <div class="bg-dark rounded">
                        <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                aria-hidden="true"></i></button>
                        <h4 class="text-light border-bottom border-light p-2"
                            style=" font-family: 'Pacifico', cursive;"> Alberto Manguel</h4>
                        <p class="text-light m-0 p-4 " id="text"
                            style="font-family: 'Hind Siliguri', sans-serif ; font-size:125%;">
                            “Old books that we have known but not possessed cross our path and invite themselves over.
                            New books try to seduce us daily with tempting titles and tantalizing covers. ”</p>
                    </div>
                    <div class="row mx-0 justify-content-left ">
                        <div class="col-lg-3 col-sm-4 pl-4">
                            <span>Like</span>
                            <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)" aria-hidden="true"
                                id="likeButton"></span>
                        </div>
                        <div class="col-lg-3  col-sm-4 pl-lg-0 pr-lg-4" id="comment">
                            <span>Comment</span>
                            <span class="fa fa-comment-o fa-lg" aria-hidden="true" id="commentButton"></span>
                        </div>
                        <div class="col-lg-6 d-none col-sm-6 " id="commentDiv">
                            <form class="form-inline">

                                <input type="text" class="form-control form-control-sm">
                                <input type="submit" class="btn btn-dark btn-sm" value="comment">
                            </form>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <span>Share</span>
                            <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-1 m-0 p-0 d-none" id="addFriends-card-instead">
            </div>
            <div class="col-lg-3 col-sm-4 m-0 p-0 d-lg-block d-sm-none" id="addFriends-card">
                <div class=" sticky-top " style="top:75px;">
                    <div class="card">
                        <div class="col-lg-1 col-sm-1 offset-10">
                            <span class="clickable" onclick="closeAddFriendsCard(this)"><i
                                    class="fa fa-times"></i></span>
                        </div>
                        <div class="card-title">
                            <h4 class="lead text-center">Add Friends</h4>
                        </div>
                        <div class="row mx-2 mt-2  d-flex align-items-center">
                            <div class=" col-lg-3  col-sm-3  m-sm-0 p-sm-0 p-lg-2">
                                <img src="../images/person-icon.png" alt="profilePic" class="img-thumbnail"
                                    width="100px" height="100px">
                            </div>
                            <div class="col-lg-5 col-sm-5  mt-1 p-0 ">
                                <div class="col-12 m-0 ">
                                    <p class="display-4 m-0" style="font-size:16px;">
                                        Shailesh Rai
                                    </p>
                                </div>
                                <div class="col-12 m-0  ">
                                    <p class="text-muted m-0">Followers:69 </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm m-sm-0 p-sm-0">
                                <a class="btn btn-outline-dark btn-sm " role="button" onclick="addFriend(this)"
                                    aria-disabled="true">Add</a>
                            </div>
                        </div>
                        <div class="border-bottom border-dark mx-4"></div>
                        <div class="row mx-2 mt-2  d-flex align-items-center">
                            <div class=" col-lg-3  col-sm-3  m-sm-0 p-sm-0 p-lg-2">
                                <img src="../images/person-icon.png" alt="profilePic" class="img-thumbnail"
                                    width="100px" height="100px">
                            </div>
                            <div class="col-lg-5 col-sm-5  mt-1 p-0 ">
                                <div class="col-12 m-0 ">
                                    <p class="display-4 m-0" style="font-size:16px;">
                                        Shivani Thakur
                                    </p>
                                </div>
                                <div class="col-12 m-0  ">
                                    <p class="text-muted m-0">Followers:69 </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm m-sm-0 p-sm-0">
                                <a class="btn btn-outline-dark btn-sm " role="button" onclick="addFriend(this)"
                                    aria-disabled="true">Add</a>
                            </div>
                        </div>
                        <div class="border-bottom border-dark mx-4"></div>
                        <div class="row mx-2 mt-2  d-flex align-items-center">
                            <div class=" col-lg-3  col-sm-3  m-sm-0 p-sm-0 p-lg-2">
                                <img src="../images/person-icon.png" alt="profilePic" class="img-thumbnail"
                                    width="100px" height="100px">
                            </div>
                            <div class="col-lg-5 col-sm-5  mt-1 p-0 ">
                                <div class="col-12 m-0 ">
                                    <p class="display-4 m-0" style="font-size:16px;">
                                        Shivani negi
                                    </p>
                                </div>
                                <div class="col-12 m-0  ">
                                    <p class="text-muted m-0">Followers:69 </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm m-sm-0 p-sm-0">
                                <a class="btn btn-outline-dark btn-sm " role="button" onclick="addFriend(this)"
                                    aria-disabled="true">Add</a>
                            </div>
                        </div>
                        <div class="border-bottom border-dark mx-4"></div>
                        <div class="row mx-2 mt-2  d-flex align-items-center">
                            <div class=" col-lg-3  col-sm-3  m-sm-0 p-sm-0 p-lg-2">
                                <img src="../images/person-icon.png" alt="profilePic" class="img-thumbnail"
                                    width="100px" height="100px">
                            </div>
                            <div class="col-lg-5 col-sm-5  mt-1 p-0 ">
                                <div class="col-12 m-0 ">
                                    <p class="display-4 m-0" style="font-size:16px;">
                                        Vivek Rawat
                                    </p>
                                </div>
                                <div class="col-12 m-0  ">
                                    <p class="text-muted m-0">Followers:69 </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm m-sm-0 p-sm-0">
                                <a class="btn btn-outline-dark btn-sm " role="button" onclick="addFriend(this)"
                                    aria-disabled="true">Add</a>
                            </div>
                        </div>
                        <div class="border-bottom border-dark mx-4"></div>
                        <div class="row mx-2 mt-2  d-flex align-items-center">
                            <div class=" col-lg-3  col-sm-3  m-sm-0 p-sm-0 p-lg-2">
                                <img src="../images/person-icon.png" alt="profilePic" class="img-thumbnail"
                                    width="100px" height="100px">
                            </div>
                            <div class="col-lg-5 col-sm-5  mt-1 p-0 ">
                                <div class="col-12 m-0 ">
                                    <p class="display-4 m-0" style="font-size:16px;">
                                        Aman Kumar
                                    </p>
                                </div>
                                <div class="col-12 m-0  ">
                                    <p class="text-muted m-0">Followers:69 </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm m-sm-0 p-sm-0 ">
                                <a class="btn btn-outline-dark btn-sm " role="button" onclick="addFriend(this)"
                                    aria-disabled="true">Add</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
    </div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
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
    $(x).removeClass("fa-thumbs-o-up");
    $(x).addClass("fa-thumbs-up");
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
</script>

</html>