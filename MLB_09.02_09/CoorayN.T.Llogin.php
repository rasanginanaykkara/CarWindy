<?php
include_once("CoorayN.T.Ldbh.inc.php");
session_start();
?>

<!DOCTYPE html>
<html>



<!-- 

<div id="header_area" class="header">
    <img src="images/logo.png" id="logo_img" />

    <div id="login_signup_links" class="user_links">
        <p>
            <a href="">login</a>
            |
            <a href="">sign in</a>
        </p>
    </div>
</div>

<div class="button_panel">
    <button class="tab_button" id="home_button" onclick="show('home_content','home_button')">
        HOME
    </button>
    <button class="tab_button" id="service_button " onclick="">
        SERVICES
    </button>
    <button class="tab_button" id="cars_button" onclick="show('cars_content','cars_button')">
        CARS
    </button>
    <button class="tab_button" id="what_we_do_button" onclick="">
        WHAT WE DO
    </button>
    <button class="tab_button" id="about_button" onclick="">ABOUT</button>
</div>

<ul class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li><a href="#">Now Update customer Details</a></li>
</ul>

 -->







<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="Styles/HomeStyle.css">-->
    <link rel="stylesheet" href="CoorayN.T.L.css/signin&signup.css">
    <!-- <link rel="stylesheet" href="CoorayN.T.L.css/Style/style5.css"> -->
    <!-- <script type=text/javascript src="../js/loginPage.js"></script> -->

<body onload="signin[0].style.display = 'none'">


    <a href="Dilshan/Dilshan/index.php">Home Page</a>



    <div class="container right-Form">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="CoorayN.T.Lsignup.inc.php" class="form" id="form1" onsubmit="RecheckPassword()" method="post">
                <h2 class="formtitle">Sign Up</h2>
                <input type="Username" name="uid" placeholder="Username" class="input" />
                <input type="email" placeholder="Email" class="input" name="email" />
                <input type="Password" placeholder="Password" class="input" id="PSW" name="pwd" />
                <input type="password" placeholder="Re-Enter Password" class="input" id="REPSW" name="pwd-repeat" /><br>
                < <label>Accept privacy policy and terms</lable>
                    <input type="checkBox" id="CheckBox" onclick="Enabalebutton()"><br><br>
                    <button type="submit" class="custom-btn btn-5" id="SignUp" name="signUp">Sign Up</button>
            </form>


        </div>

        <!-- Login -->
        <div class="container__form container--signin">
            <?php
            if (isset($_SESSION['userId'])) {

                echo '<p calss="login-status" > logged in!</p>';
            } else {
                echo '<p calsss="login-status" > logged out!</p>';
            }

            ?>
            <form action="CoorayN.T.Lsignin.inc.php" class="form" id="form2" method="post">
                <h2 class="formtitle">Sign In</h2>
                <input type="email" placeholder="Email" name='mailuid' class="input" />

                <input type="password" placeholder="Password" class="input" type="password" value="" id="PSWInput" name='pwd'><br>
                <input type="checkbox" onclick="PSWFunction()">Show Password
                <a href="#" class="link">Forgot your password?</a>
                <button type="submit" class="custom-btn btn-5" id="SignIn" name="SignIn">Sign In</button>
            </form>
        </div>

        <!--MoveOn-->
        <!--<form action="includes/signup.inc.php" method=post>-->
        <div class="containerMoveOn">
            <div class="MoveOn">
                <div class="MoveOnpanel MoveOn--left">
                    <button class="custom-btn btn-4" id="signIn">Sign In</button>
                </div>
                <div class="MoveOnpanel MoveOn--right">
                    <button class="custom-btn btn-4" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        // const fistForm = document.getElementById("form1");
        // const secondForm = document.getElementById("form2");
        const container = document.querySelector(".container");
        var signin = document.getElementsByClassName(
            "container__form container--signin"
        );

        signInBtn.addEventListener("click", () => {
            signin[0].style.display = "block";
            container.classList.remove("right-Form");
        });

        signUpBtn.addEventListener("click", (f) => {
            container.classList.add("right-Form");
            signin[0].style.display = "none";
        });

        //fistForm.addEventListener("submit", (e) => e.preventDefault());
        //secondForm.addEventListener("submit", (e) => e.preventDefault())

        function PSWFunction() {
            var i = document.getElementById("PSWInput");
            if (i.type === "password") {
                i.type = "text";
            } else {
                i.type = "password";
            }
        }

        function RecheckPassword() {
            if (
                document.getElementById("PSW").value !=
                document.getElementById("REPSW").value
            ) {
                alert("Re-Enter password incorrrect!");

                return false;
            } else {
                alert("Success!");
            }
        }

        function Enabalebutton() {
            if (document.getElementById("checkBox").checked) {
                document.getElementById("SignUp").disabled = false;
            } else {
                document.getElementById("SignUp").disabled = ture;
            }
        }
    </script>
</body>

</html>