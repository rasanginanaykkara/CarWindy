<?php
		session_start();
		$_SESSION['id'] = 1;
	?>
<!DOCTYPE html> <html>
	
	<head>
		<link rel="stylesheet" href="DilshanG.A.M.css/styles.css">
		<link rel="stylesheet" href="DilshanG.A.M.css/home_styles.css">
		<link rel="stylesheet" href="DilshanG.A.M.css/footer.css">
		
		<title>carWindy</title>
		
		<script type="text/javascript" src="DilshanG.A.M.js/scripts_for_home.js">
		</script>		
	</head>
	<body>
		
		<div id="header_area" class="header">
			<img src="images/logo.png" id="logo_img">
			<div id="login_signup_links" class="user_links">
				<p>
					<a href="../../CoorayN.T.Llogin.php">login</a>
					|
					<a href="../../CoorayN.T.Llogin.php">sign in</a>
				</p>
			</div>
		</div>
		<div class="button_panel">
			<button class="tab_button active">HOME</button>
			<button class="tab_button" id = "service_button "onclick="">SERVICES</button>
			<button class="tab_button" id= "cars_button" onclick="location.href = 'DilshanG.A.M.php/cars.php'">CARS</button>
			<button class="tab_button" id="what_we_do_button" onclick="location.href='../../Rasangi/Rasangi/WhatWeDo.php'">WHAT WE DO</button>
			<button class="tab_button" id="about_button" onclick="location.href='../../Rasangi/Rasangi/About.php'">ABOUT</button>
			<button class="tab_button" id="feedback_button" onclick="location.href='../../Rasangi/Rasangi/feedback.php'">FEEDBACK</button>
		</div>
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>		
		</ul>
		
		<div class="content" id="home_content">
			<div class="background_layer" id="background_layer">
				<div class="form_area">				
					<form class="form" method="post" action="DilshanG.A.M.php/booking_page.php">
						<center><span id="ad">Get Started!</span></center>
						<br/>
						<br/>
						<label for="car_type">Select car type</label>
						
						<select id="car_type" name="type">	
							<option value="">Any</option>;						
							<option value="sedan">Sedan</option>;
							<option value="coupe">Sport coupe</option>;
							<option value="spyder">Spyder</option>											
						</select>
						<br>
						
						
						
						<br>
						<label for="pickup_date">Pick up date</label>
						
						<input type="date" name="pickup_date"class="form_date" id="pickup_date">
						<br>
						
						<br>
						<label for="dropoff_date">Drop off date</label>
						
						<input class="form_date" name="dropoff_date" type="date" id="dropoff_date">
						<br>
						
						<br>
						<br/>
						<br/>
						<center>
						<input type="submit" value="Continue reservation process" name="randomsub" id="submit_button">
						</center>
						<br>
					</form>				
				</div>
			
			<div class="presentation">
				<img class="presentation_images" id="" src="images/presentation/image_1.png">
				<img class="presentation_images" id=""src="images/presentation/image_2.png">
				<img class="presentation_images" id=""src="images/presentation/image_3.png">
				<img class="presentation_images" id=""src="images/presentation/image_4.png">
				<div class="slide_possition" id="position_div">					
				</div>
				<script>
					play();
				</script>
			</div>
			</div>
		</div>

		<footer class = "footer">           
  		   
             <div class = "container">
             
                 <div class="carwindy">
             
                     <p id="carp1">CAR<span id="carp2">W</span>INDY</p>
             
                 </div>
             
                 <div class = "row">
                 
                     <div class="qr-code">
                     
                         <img src="images/QRCODE.png" width="110px" height="110px">
                         
                     </div>				
                                                 
                     <div class="footer-col">										
                     
                         <h4 id="Id1">PRODUCT</h4>
                         
                         <ul>
                             <li><a class="selected" href = "#" >Features</a></li>
                             <li><a class="selected" href = "#" >Events</a></li>
                             <li><a class="selected" href = "#" >Packages</a></li>
                             <li><a class="selected" href = "#" >Pricing</a></li>
                         </ul>
                         
                     </div> 
                     
                     <div class="footer-col">
                     
                         <h4 id="Id2">DETAILS</h4>
                         
                         <ul>
                             <li><a class="selected" href = "#" >About Us</a></li>
                             <li><a class="selected" href = "#" >Contact Us</a></li>
                             <li><a class="selected" href = "../../IT21178368_PereaKKS/PereraKKSphp/DriverPanel.php"target="_blank" >Jobs</a></li>
                             <li><a class="selected" href = "#" >News</a></li>
                         </ul>
                         
                     </div>
                     
                     <div class="footer-col">
                     
                         <h4 id="Id3">LEARN MORE</h4>
                         
                         <ul>
                             <li><a class="selected" href = "#" >Best Deals</a></li>
                             <li><a class="selected" href = "#" >Developers</a></li>
                             <li><a class="selected" href = "../../IT21178368_PereaKKS/PereraKKShtml/Faq.html" >FAQ</a></li>
                             <li><a class="selected" href = "#" >Support</a></li>
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
                 
                 <p> Experienced Driver? <a class="selected" id="reg" href="../../Naveen_Driver_Reg/Naveen_Driver_Reg/Driver_reg.php">Register now</a></p>
             
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
	
</html>