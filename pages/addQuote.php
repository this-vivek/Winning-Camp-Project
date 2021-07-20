<!DOCTYPE html>
<html lang="en">

<?php 
 require("../common/session_mng.php");
 if(!checkSession()){
    header("Location: http://localhost:8080/quotation");
 }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quote</title>
    <?php require_once("../common/links.php");?>
</head>


<body> <?php require_once("../common/navAddPost.php");?>
    <link rel="stylesheet" type="text/css" href="../styles/AddQuote.css">
    <div class="alert">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Message: Post Added Successfully!</span>
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <div class="wrapper">

        <div class="input-box">
            <h3> Add Posts</h3>
            <input type="text" name="content" required id="enter" class="input-text" placeholder="Enter Here">
        </div>
        <div class="post-wrapper">

            <div class="post">
                <textarea maxlength="80" id="textarea" readonly></textarea>
            </div>
            <div class="options">
                <div class="colors">
                    <select name="bg" id="colors">
                        <option value="Black" id="black">Black</option>
                        <option value="Purple" id="purple">Purple</option>
                        <option value="Yellow" id="yellow">Yellow</option>
                        <option value="White" id="white">White</option>
                    </select>
                </div>
                <div class="italic" id="italic">
                    <a href="#" role="button">I</a>
                </div>
                <div class="bold" id="bold">
                    <a href="#" role="button">B</a>
                </div>
                <div class="underline" id="underline"><a href="#" role="button">U</a></div>
                <div class="textstyle">
                    <select name="Font Family" id="FontFamily">
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Arial">Arial</option>
                        <option value="Courier New">Courier New</option>
                        <option value="cursive">cursive</option>
                    </select>
                </div>
                <div class="category">
                    <select name="category" id="category">
                        <option value="Sad">Sad</option>
                        <option value="Inspirational">Inspirational</option>
                        <option value="Joy">Joy</option>
                    </select>
                </div>
                <div class="submit-div">
                    <button style="color:black"><a style="color:black">Post</a></button>
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
            let category = $("#category").val();;
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
                url: "../api/submit-post.php",
                type: "get", //send it through get method
                data: {
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
                        "http://localhost:8080/quotation/index.php?msg=success";
                },
                error: function(xhr) {
                    //Do Something to handle error
                    alert("Error: " + xhr);
                }
            });
            console.log("done");
        })
    });
    $('.close-btn').click(function() {
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    });
    </script>
</body>

</html>