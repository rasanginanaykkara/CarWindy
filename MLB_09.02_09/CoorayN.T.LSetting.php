<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="CoorayN.T.L.css/Style/style.css">
    <link rel="stylesheet" href="CoorayN.T.L.css/Style/style5.css">
    <link rel="stylesheet" href="CoorayN.T.L.css/Style/home_styles.css">

    <title>Document</title>
</head>





<body onload="initializeContent()">
    <div id="header_area" class="header">
        <img src="images/logo.png" id="logo_img" />

        <div id="login_signup_links" class="user_links">
            <p>
                <a href="CoorayN.T.Llogin.php">logOut</a>

                <a href="CoorayN.T.Llogin.php"></a>
            </p>
        </div>
    </div>

    <div class="button_panel">
        <button class="tab_button" id="home_button" onclick="location.href='Dilshan/Dilshan/index.php'">
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
        <button class="tab_button" id="feedback_button" onclick="location.href='Rasangi/Rasangi/feedback.php'">FEEDBACK</button>
    </div>

    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Customer Acount Now</a></li>
    </ul>

    <div !-- HEADER -->
        <div>

            <!-- HEADER -->
            <header class="block">
                <ul class="main-menu menu-list">
                    <li>
                        <a class="main-menu-tab" href="CoorayN.T.LCustomerAccountSetting.php"><span class="icon"></span>SETTINGS</a>
                    </li>
                    <li>
                        <a class="main-menu-tab" href="#2"><span class="icon"></span>MY INQUIRIES</a>
                    </li>
                    <li>
                        <a class="main-menu-tab" href="CoorayN.T.LMsg.php"><span class="icon"></span>MESSAGES</a>
                        <a class="main-menu-number" href="#4">5</a>
                    </li>
                    <li>
                        <a class="main-menu-tab" href="Naveen_Driver_Reg/Naveen_Driver_Reg/booking.php"><span class="icon"></span>MY BOOKINGS</a>
                    </li>
                </ul>
                <div class="profile-menu">
                    <p>Me <a href="#26"><span class="entypo-down-open"></span></a></p>
                    <div class="profile-picture small-profile-picture">
                        <img width="40px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
                    </div>
                </div>
            </header>

            <!-- LEFT-CONTAINER -->
            <div class="left-container containerw">
                <div class="Left-menu-box block">
                    <!-- MENU BOX (LEFT-CONTAINER) -->
                    <h2 class="titular">MENU BOX</h2>
                    <ul class="Left-menu-box-menu">
                        <li>
                            <a class="Left-menu-box-tab" href="CoorayN.T.LMsg.php"><span class="icon"></span>Messages<div class="Left-menu-box-number">24</div></a>
                        </li>
                        <li>
                            <a class="Left-menu-box-tab" href="#8"><span class="icon"></span>Invites<div class="Left-menu-box-number">3</div></a>
                        </li>
                        <li>
                            <a class="Left-menu-box-tab" href="#10"><span class="icon"></span>Events<div class="Left-menu-box-number">5</div></a>
                        </li>
                        <li>
                            <a class="Left-menu-box-tab" href="CoorayN.T.LCustomerAccountSetting.php"><span class="icon"></span>Account Settings</a>
                        </li>
                        <li>
                            <a class="Left-menu-box-tab" href="#13">
                                <sapn class="icon"></sapn>Statistics
                            </a>
                        </li>
                    </ul>
                </div>



                <div class="line-chart-block block clear">
                    <!-- LINE CHART BLOCK (LEFT-CONTAINER) -->
                    <div class="line-chart">

                    </div>
                </div>
                <div>
                    <!-- MEDIA (LEFT-CONTAINER) -->
                </div>
                <ul class="social menu-list block">
                    <!-- SOCIAL (LEFT-CONTAINER) -->

                </ul>
            </div>

            <!-- MIDDLE-CONTAINER -->
            <div class="middle-container containerw">
                <div class="profile block">
                    <!-- PROFILE (MIDDLE-CONTAINER) -->
                    <a class="add-button" href="#"><span class="icon"></span></a>
                    <div class="profile-picture big-profile-picture clear">

                        <!-- I gwt this resource from online jgp image -->
                        <img width="150px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
                    </div>
                    <h1 class="user-name">Anne Hathaway</h1>
                    <div class="profile-description">
                        <p class="scnd-font-color">Lorem ipsum dolor sit amet consectetuer adipiscing</p>
                    </div>


                </div>
            </div>

           
           

            <footer class = "footer">           
  		   
             <div class = "footer_backgrnd">
             
                 <div class="carwindy">
             
                     <p id="carp1">CAR<span id="carp2">W</span>INDY</p>
             
                 </div>
             
                 <div class = "row">
                 
                     <div class="qr-code">
                     
                         <img src="images/QRCODE.png" width="110px" height="110px">
                         
                     </div>				
                                                 
                     <div class="footer-col">										
                     
                         <h4 id="Id1">PRODUCT</h4>
                         
                         <ul class="ulClass">
                             <li class="list1"><a class="selected" href = "#" >Features</a></li>
                             <li class="list1"><a class="selected" href = "#" >Events</a></li>
                             <li class="list1"><a class="selected" href = "#" >Packages</a></li>
                             <li class="list1"><a class="selected" href = "#" >Pricing</a></li>
                         </ul>
                         
                     </div> 
                     
                     <div class="footer-col">
                     
                         <h4 id="Id2">DETAILS</h4>
                         
                         <ul class="ulClass">
                             <li class="list1"><a class="selected" href = "#" >About Us</a></li>
                             <li class="list1"><a class="selected" href = "#" >Contact Us</a></li>
                             <li class="list1"><a class="selected" href = "IT21178368_PereaKKS/PereraKKSphp/DriverPanel.php"target="_blank" >Jobs</a></li>
                             <li class="list1"><a class="selected" href = "#" >News</a></li>
                         </ul>
                         
                     </div>
                     
                     <div class="footer-col">
                     
                         <h4 id="Id3">LEARN MORE</h4>
                         
                         <ul class="ulClass">
                             <li class="list1"><a class="selected" href = "#" >Best Deals</a></li>
                             <li class="list1"><a class="selected" href = "#" >Developers</a></li>
                             <li class="list1"><a class="selected" href = "../../IT21178368_PereaKKS/PereraKKShtml/Faq.html" >FAQ</a></li>
                             <li class="list1"><a class="selected" href = "#" >Support</a></li>
                         </ul>
                         
                     </div> 
                     
                     <div class="footer-col">
                     
                         <h4 id="Id4">CONNECT WITH US</h4>
                         
                         <div class="socialLinks">
                         
                             <a class="selected-2" href = "https://www.facebook.com" target="_blank" ><img class="social-img" src="images/FB.png" >Facebook</a><br>
                             <a class="selected-2" href = "https://www.twitter.com" target="_blank" ><img class="social-img" src="images/TW.png" >Twitter</a><br>
                             <a class="selected-2" href = "https://www.instagram.com" target="_blank" ><img class="social-img" src="images/IS.png" >Instagram</a><br>
                             
                         </div>
                         
                     </div>	
                     
                 </div>
                             
             </div>				
             
                 <a class="ab" href="http://www.facebook.com" target="_blank"><button class="button"><img id="img1" src="images/Chat-icon.png" width="30px" height="30px" >Chat With Us!</button></a>		
             
             <div class="last-part" >						
                 
                 <p> Experienced Driver? <a class="selected" id="reg" href="Driver_reg.html">Register now</a></p>
             
             </div>
             
             <hr id="hr1"><br>
             
             <div class="after-hr">
 
                 <p id="corporation">Carwindy Corporation © 2022</p><br>
                 <a id="Terms" href="#">Terms of service</a><br>
                 <a id="Privacy" href="#">Privacy Policy</a><br>
 
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