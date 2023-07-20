<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   

    <link rel="stylesheet" href="Herath.R.P.N.M.css/Style/style.css">
    <link rel="stylesheet" href="Herath.R.P.N.M.css/Style/style5.css">
    <link rel="stylesheet" href="Herath.R.P.N.M.css/Style/home_styles.css">
    <link rel="stylesheet" href="Herath.R.P.N.M.css/Style/booking.css">

	<title>Update Details</title>
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
        <button class="tab_button" id="home_button" onclick="location.href=location.href='../../Dilshan/Dilshan/index.php'">
            HOME
        </button>
        <button class="tab_button" id="service_button " onclick="">
            SERVICES
        </button>
        <button class="tab_button" id="cars_button" onclick="location.href='../../Dilshan/Dilshan/DilshanG.A.M.php/cars.php'">
            CARS
        </button>
        <button class="tab_button" id="what_we_do_button"onclick="location.href='../../Rasangi/Rasangi/WhatWeDo.php'">
            WHAT WE DO
        </button>
        <button class="tab_button" id="about_button"  onclick="location.href='../../Rasangi/Rasangi/About.php'">ABOUT</button>
        <button class="tab_button" id="feedback_button" onclick="location.href='../../Rasangi/Rasangi/feedback.php'">FEEDBACK</button>
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
                        <a class="main-menu-tab" href="../../CoorayN.T.LCustomerAccountSetting.php"><span class="icon"></span>SETTINGS</a>
                    </li>
                    <li>
                        <a class="main-menu-tab" href="#2"><span class="icon"></span>MY INQUIRIES</a>
                    </li>
                    <li>
                        <a class="main-menu-tab" href="../../CoorayN.T.LMsg.php"><span class="icon"></span>MESSAGES</a>
                        <a class="main-menu-number" href="#4">5</a>
                    </li>
                    <li>
                        <a class="main-menu-tab " href="booking.php"><span class="icon"></span>MY BOOKINGS</a>
                    </li>
                </ul>
                <div class="profile-menu">
                    <p>Me <a href="#26"><span class="entypo-down-open"></span></a></p>
                    <div class="profile-picture small-profile-picture">
                        <img width="40px" alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg">
                    </div>
                </div>
            </header>

<div class="Update_form">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?ID='.$_GET['ID'];?>" enctype="">
		<label for="pickUpDate" class="labls">Pickup Date  : </label>
		<input type="date" id="pickUpDate" name="pickUpDate"><br/><br/>
		<label for="dropOffDate" class="labls">Dropoff Date : </label>
		<input type="date" id="dropOffDate" name="dropOffDate"><br/>
		<input type="Submit" id="submitBtn" name="subchange">		
	</form>
</div>
<?php
require("connection.php");

$reservation = $_GET['ID'];
$cusreg = 'CCX-6969';

$sql="SELECT * FROM reserve WHERE reservation_id = $reservation";
$result = $con->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()){

		$cusreg = $row["registration_number"];	

}

}
if (isset($_POST['subchange'])) {



$mydateget =$_POST['pickUpDate'];
$mydatedrop=$_POST['dropOffDate'];


$sql = "SELECT * FROM reserve WHERE registration_number = '$cusreg' AND (pickup_date BETWEEN '$mydateget' AND '$mydatedrop' OR (pickup_date <= '$mydateget' AND dropoff_date >= '$mydateget'))";


$result = $con->query($sql) or die($con->error);

	if (!$result->num_rows > 0) {
			//Update Reservation 

			$sql = "UPDATE reserve SET pickup_date = '$mydateget' ,dropoff_date = '$mydatedrop' WHERE reservation_id =".$reservation ;

				if ($con->query($sql)) {

					echo "<br>updated";

				}else{
					echo "not upadet";

				}

			

			echo "<script>alert('Reservation Updates applied successfully".$_SESSION["userID"]."') </script>";
            echo "<script>window.location = 'booking.php';</script>";


		}

$con->close();			
}



?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

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
                             <li class="list1"><a class="selected" href = "../../IT21178368_PereaKKS/PereraKKSphp/DriverPanel.php"target="_blank" >Jobs</a></li>
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
                 
                 <p> Experienced Driver? <a class="selected" id="reg" href="Driver_reg.php">Register now</a></p>
             
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


<!-- // if ($row["C"] > 0 ) {

		// 	echo "name name".$row["C"];
						
		// 	echo "<br/><br/><br/>Can't update";

		// 	$sql = "SELECT * FROM reserve WHERE registration_number = '$cusreg'";

		// 	$result = $con->query($sql);

		// 	if ($result->num_rows > 0) {

		// 		echo "<table border= '1'>";

		// 		while($row = $result->fetch_assoc()){
						
		// 			echo "<tr>"."<td>".$row["reservation_id"]."</td>"."<td>".$row["pickup_date"]."</td>"."<td>".$row["dropoff_date"]."</td>"."<td>".$row["driver_id"]."</td>"."<td>".$row["registration_number"]."</td>"."</tr>";
		// 		}
		// 	} -->