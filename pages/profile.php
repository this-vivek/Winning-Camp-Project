<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<?php require_once("../common/links.php")?>

<body style="padding-top: 70px;">
    <?php require_once("../common/nav.php");?>
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
                                                    aria-describedby="Name" placeholder="Enter Name">

                                            </div>
                                        </div>
                                        <div class="col-1 icon m-0 p-0" id="nameButton">
                                            <i class="fa fa-pencil fa-lg"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="row  d-flex align-items-center justify-content-center">
                                        <div class="col-10 m-0 p-0">
                                            <div class="form-group">
                                                <input type="text" readonly class="form-control" id="username"
                                                    aria-describedby="username" placeholder="username">

                                            </div>
                                        </div>
                                        <div class="col-1 icon">
                                            <i class="fa fa-pencil fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row profile-row">
                                <div class="col-6">
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <div class="col-10 m-0 p-0 ">
                                            <div class="form-group">
                                                <input type="Email" readonly class="form-control" id="email"
                                                    aria-describedby="Email" placeholder="Enter Email">

                                            </div>
                                        </div>
                                        <div class="col-1 icon" id="emailButton">
                                            <i class="fa fa-pencil fa-lg"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <div class="col-10 m-0 p-0">
                                            <div class="form-group">
                                                <input type="Number" readonly class="form-control" id="mobile"
                                                    aria-describedby="Number" placeholder="Enter Your Mobile Num.">

                                            </div>
                                        </div>
                                        <div class="col-1 icon" id="mobileButton">
                                            <i class="fa fa-pencil fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center  profile-row">
                                <div class="col-4 m-0 p-0">
                                    <div class="form-group text-center">
                                        <label for="DOB">Date Of Birth</label>
                                        <input type="Date" readonly class="form-control" id="DOB" aria-describedby="DOB"
                                            placeholder="Enter DOB">
                                    </div>
                                </div>
                                <div class="col-1 icon date " id="dateButton">

                                    <i class="fa fa-pencil fa-lg"></i>


                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Personal Data end -->
                        <!-- Users Post data -->
                        <div class="col-12 mt-4">
                            <div class="col-lg-12 col-sm-12 mx-0 p-0 " id="basic-waypoint">
                                <div class="bg-dark rounded">
                                    <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                            aria-hidden="true"></i></button>
                                    <h4 class="text-light border-bottom border-light p-2"
                                        style=" font-family: 'Pacifico', cursive;">Amit Kalantri</h4>
                                    <p class="text-light m-0 p-4 " id="text"
                                        style="font-family: 'Hind Siliguri', sans-serif; font-size:125%;">
                                        “A group of sheep led by a tiger can defeat a group of tigers led by a sheep.”
                                    </p>
                                </div>
                                <div class="row mx-0 justify-content-left ">
                                    <div class="col-lg-3 col-sm-4 pl-4">
                                        <span>Like</span>
                                        <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)"
                                            aria-hidden="true" id="likeButton"></span>
                                    </div>

                                    <div class="col-lg-2 col-sm-4">
                                        <span>Share</span>
                                        <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                                    </div>
                                    <div
                                        class=" col-lg col-sm-4 icon align-self-end d-flex justify-content-end align-items-center">
                                        <span>Edit</span>
                                        <span class="fa fa-pencil fa-lg ml-1 " aria-hidden="true"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12 col-sm-12 mx-0 p-0 " id="basic-waypoint">
                                <div class="bg-dark rounded">
                                    <button class="close" type="button"><i class="fa fa-bookmark fa-sm "
                                            aria-hidden="true"></i></button>
                                    <h4 class="text-light border-bottom border-light p-2"
                                        style=" font-family: 'Pacifico', cursive;">Amit Kalantri</h4>
                                    <p class="text-light m-0 p-4 " id="text"
                                        style="font-family: 'Hind Siliguri', sans-serif; font-size:125%;">
                                        “A group of sheep led by a tiger can defeat a group of tigers led by a sheep.”
                                    </p>
                                </div>
                                <div class="row mx-0 justify-content-left ">
                                    <div class="col-lg-3 col-sm-4 pl-4">
                                        <span>Like</span>
                                        <span class="fa fa-thumbs-o-up fa-lg " onclick="likeButton(this)"
                                            aria-hidden="true" id="likeButton"></span>
                                    </div>

                                    <div class="col-lg-2 col-sm-4">
                                        <span>Share</span>
                                        <span class="fa fa-share fa-lg " aria-hidden="true"></span>
                                    </div>
                                    <div
                                        class=" col-lg col-sm-4 icon align-self-end d-flex justify-content-end align-items-center">
                                        <span>Edit</span>
                                        <span class="fa fa-pencil fa-lg ml-1 " aria-hidden="true"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- User post data End -->
                    </div>
                    <!-- content ends here  -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $('#nameButton').click(function() {

            let $input = $('#name');
            if ($input.attr('readonly')) {
                console.log("yes");
                $input.removeAttr('readonly');
            } else {
                console.log("no");
                $input.attr('readonly', true);
            }
        })

        $('#emailButton').click(function() {

            let $input = $('#email');
            if ($input.attr('readonly')) {
                console.log("yes");
                $input.removeAttr('readonly');
            } else {
                console.log("no");
                $input.attr('readonly', true);
            }
        })

        $('#mobileButton').click(function() {

            let $input = $('#mobile');
            if ($input.attr('readonly')) {
                console.log("yes");
                $input.removeAttr('readonly');
            } else {
                console.log("no");
                $input.attr('readonly', true);
            }
        })

        $('#dateButton').click(function() {

            let $input = $('#DOB');
            if ($input.attr('readonly')) {
                console.log("yes");
                $input.removeAttr('readonly');
            } else {
                console.log("no");
                $input.attr('readonly', true);
            }
        })
    })
    </script>
</body>

</html>