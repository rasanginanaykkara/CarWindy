<?php
include_once("CoorayN.T.Ldbh.inc.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CoorayN.T.L.css/style/CustomerAccountSetting.css">
    <link rel="stylesheet" href="CoorayN.T.L.css/Style/style5.css">
    <link rel="stylesheet" href="CoorayN.T.L.css/Style/home_styles.css">
    <title>Account Setting</title>
</head>

<body>

    <div id="header_area" class="header">
        <img src="images/logo.png" id="logo_img" />

        <div id="login_signup_links" class="user_links">
            <p>
                <a href="CoorayN.T.Llogin.php">login</a>
                |
                <a href="CoorayN.T.Llogin.php">sign in</a>
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
        <button class="tab_button" id="feedback_button" onclick="#">FEEDBACK</button>
    </div>

    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Now Update customer Details</a></li>
    </ul>


    <a href="Setting.php">go Customer Profile</a>



    <form name="myform" method="POST" action="CoorayN.T.Lsave.php" id="myform">

        <div">

            <div class="Account_form">


                <div class="Accountform-more">


                    <label class="labels" id="fname">First Name</label>
                    <label class="labels" id="lname">Last Name</label>

                    <div class="name_error">
                        <span class="pp1"></span>
                        <span class="pp1"></span>
                    </div>

                    <br>

                    <input type="text" class="txt_box " id="first-name" name="fname" placeholder="First Name">

                    <input type="text" class="txt_box " id="last-name" name="lname" placeholder="Last Name">

                    <br><br>

                    <label class="PhoneNumber">Phone Number</label>

                    <div class="phone_error">
                        <span class="pp1"></span>
                        <span class="pp1"></span>
                    </div>

                    <input type="tel" id="phone-no2" name="p_number2" placeholder="Phone Number">

                    <br><br>


                    <label class="labels">Email</label>

                    <p class="pp1"></p>
                    <br>

                    <input type="text" class="txt_box " id="Email" name="email" placeholder="e-mail">

                    <br><br>


                    <label class="labels">NIC No</label><br>


                    <p class="pp1"></p>



                    <input type="text" class="txt_box " name="customerNIC" placeholder="Customer NIC no"><br><br>

                    <label class="labels">License No</label>
                    <p class="pp1"></p>
                    <br>
                    <input type="text" class="txt_box " name="customerId" placeholder="Customer License no">

                    <br><br>




                    <label class="labels">Bank Details</label>

                    <p class="pp1"></p>

                    <br>
                    <select id="bankDet" name="bankDet">
                        <option>Choose Bank</option>
                        <option>BOC</option>
                        <option>NDB</option>


                    </select>

                    <br>

                    <label class="labels"></label>

                    <p class="pp1"></p>
                    <br>

                    <input type="text" class="txt_box" id="bDetail" name="accNumber" placeholder="Account Number">

                    <br><br>

                </div>

                <input type="submit" class="submit" value="Save" name="save">



            </div>
            </div>
    </form>


    <footer class="footer">
        <div class="container">
            <div class="carwindy">
                <p id="carp1">CAR<span id="carp2">W</span>INDY</p>
            </div>

            <div class="row">
                <div class="qr-code">
                    <img src="images/QRCODE.png" width="110px" height="110px" />
                </div>

                <div class="footer-col">
                    <h4 id="Id1">PRODUCT</h4>

                    <ul>
                        <li><a class="selected" href="#">Features</a></li>
                        <li><a class="selected" href="#">Events</a></li>
                        <li><a class="selected" href="#">Packages</a></li>
                        <li><a class="selected" href="#">Pricing</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4 id="Id2">DETAILS</h4>

                    <ul>
                        <li><a class="selected" href="#">About Us</a></li>
                        <li><a class="selected" href="#">Contact Us</a></li>
                        <li><a class="selected" href="IT21178368_PereaKKS/PereraKKSphp/DriverPanel.php"target="_blank">Jobs</a></li>
                        <li><a class="selected" href="#">News</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4 id="Id3">LEARN MORE</h4>

                    <ul>
                        <li><a class="selected" href="#">Best Deals</a></li>
                        <li><a class="selected" href="#">Developers</a></li>
                        <li><a class="selected" href="../../IT21178368_PereaKKS/PereraKKShtml/Faq.html">FAQ</a></li>
                        <li><a class="selected" href="#">Support</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4 id="Id4">CONNECT WITH US</h4>

                    <div class="socialLinks">
                        <a class="selected-2" href="https://www.facebook.com" target="_blank"><img class="social-img" src="images/FB.png" />Facebook</a><br />
                        <a class="selected-2" href="https://www.twitter.com" target="_blank"><img class="social-img" src="images/TW.png" />Twitter</a><br />
                        <a class="selected-2" href="https://www.instagram.com" target="_blank"><img class="social-img" src="images/IS.png" />Instagram</a><br />
                    </div>
                </div>
            </div>
        </div>

        <a class="ab" href="http://www.facebook.com" target="_blank"><button class="button">
                <img id="img1" src="images/Chat-icon.png" width="30px" height="30px" />Chat With Us!
            </button></a>

        <div class="last-part">
            <p>
                Experienced Driver?
                <a class="selected" id="reg" href="Driver_reg.html">Register now</a>
            </p>
        </div>

        <hr id="hr1" />
        <br />

        <div class="after-hr">
            <p id="corporation">Carwindy Corporation © 2022</p>
            <br />
            <a id="Terms" href="#">Terms of service</a><br />
            <a id="Privacy" href="#">Privacy Policy</a><br />

            <form action="#" id="form-1">
                <select id="language">
                    <option value="English">English</option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Arab">Arab</option>
                </select>
            </form>
        </div>
    </footer>

</body>

</html>