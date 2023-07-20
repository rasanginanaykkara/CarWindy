<!DOCTYPE html> <html>
	<head>
		<link rel="stylesheet" href="../DilshanG.A.M.css/styles.css">		
		<link rel="stylesheet" href="../DilshanG.A.M.css/cars_styles.css">
		<link rel="stylesheet" href="../DilshanG.A.M.css/footer.css">
		<title>carWindy</title>				
		<script type="text/javascript" src="../DilshanG.A.M.js/scripts_for_cars.js">
		</script>
	</head>
	<body>
		
		<div id="header_area" class="header">
			<img src="../images/logo.png" id="logo_img">
			<div id="login_signup_links" class="user_links">
				<p>
					<a href="../html/login.html">login</a>
					|
					<a href="">sign in</a>
				</p>
			</div>
		</div>
		<div class="button_panel">
		<button class="tab_button"  onclick="location.href='../index.php'">HOME</button>
			<button class="tab_button" id = "service_button "onclick="">SERVICES</button>
			<button class="tab_button active" id= "cars_button" onclick="#">CARS</button>
			<button class="tab_button" id="what_we_do_button" onclick="location.href='../../../Rasangi/Rasangi/WhatWeDo.php'">WHAT WE DO</button>
			<button class="tab_button" id="about_button" onclick="location.href='../../../Rasangi/Rasangi/About.php'">ABOUT</button>
			<button class="tab_button" id="feedback_button" onclick="location.href='../../../Rasangi/Rasangi/feedback.php'">FEEDBACK</button>
		</div>
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>		
		</ul>
		

		<div class="content" id="cars_content">
			<div class="search_form_area" id="search_form_area">

				<form class="search_form" id="search_form" action="cars.php" method="post">
					<div class="search_bar_area">
						<input type="text" name="key_word" class="search_bar" placeholder="Search...">
						<input type="image" class="search_button" src="../images/icons/search_icon.png">
						
					</div>
					<div class="checkbox_section">
					<input type="checkbox" id="filters_enabled" name="filters_enabled" value="enabled" onchange="showOrHideFilterDiv()">
					<label for="filters_enabled" id="enable_filters_label">Advanced search options</label>
					</div>
					<div id="filter_div" class="filter_div expanding">
						<div class="selector">
							<label>Car type</label><br>						
							<select id="car_type" name="car_type">							
								<option value="all" selected>Any car type</option>
								<option value="saloon">Saloon</option>
								<option value="sedan">Sedan</option>
								<option value="hatchback">Hatchback</option>
								<option value="coupe">Coupe</option>							
						</select>
						</div>
						
						<div class="selector">
							<label>No of pessengers</label><br>						
							<select id="passengers" name="passengers">								
								<option value="all" selected>Any number of seats</option>
								<option value="2">Two</option>
								<option value="4">Four</option>
								<option value="5">Five</option>
								<option value="7">Seven</option>														
						</select>
						</div>
						
						<div class="selector">
							<label>Fuel type</label><br>						
							<select id="fuel_type" name="fuel_type">
							
								<option value="all" selected >Any fuel type</option>
								<option value="petrol">Petrol</option>
								<option value="deisel">Deisel</option>
								<option value="electric">Electric</option>
								<option value="hybrid">Hybrid</option>																				
							</select>
						</div>
						
						<div class="selector">
							<label>Transmission</label><br>					
							<select id="transmission" name="transmission">							
								<option value="all" selected>Any transmission</option>
								<option value="Automatic">Automatic transmission</option>
								<option value="Manual">Manual transmission</option>
								<option value="PS">Automatic with paddle shifters</option>																					
							</select>
						</div>
						<div class="selector">
							<label>Car brand</label><br>						
							<select id="brand" name="brand">								
								<option value="all" selected>Any brand</option>
								<option value="Alfa Romeo">Alfa romeo</option>
								<option value="Toyota">Toyota</option>
								<option value="Nissan">Nissan</option>
								<option value="Mitsubishi">Mitsubishi</option>
							<select>
						</div>
						<div class="selector">
							<label>Luggage space</label><br>						
							<select id="luggage_space" name="luggage_space">								
								<option value="all" selected>Any luggage space</option>
								<option value="1">1 suit case (120L)</option>
								<option value="2">2 suit case (240L)</option>
								<option value="3">3 suit case (360L)</option>
								<option value="4">4 suit case (480L)</option>
							<select>
						</div>						
					</div>
				</form>
			</div>
			
			<div class="search_result_div">
				<?php
					
					$conn = new mysqli("localhost","root","","test");
					if($_SERVER["REQUEST_METHOD"] == "POST"){
						
						$query = "Select * FROM car WHERE name LIKE '%".$_POST["key_word"]."%'";
						if(isset($_POST['filters_enabled'])){
							if($_POST['filters_enabled']=='enabled'){
								if($_POST['car_type']!='all'){
									$query .= " AND car_type ='".$_POST['car_type']."'";
								}
								if($_POST['passengers']!='all'){
									$query .= " AND seats =".$_POST['passengers'];
								}
								if($_POST['car_type']!='all'){
									$query .= " AND car_type ='".$_POST['car_type']."'";
								}
								if($_POST['fuel_type']!='all'){
									$query .= " AND fuel_type ='".$_POST['fuel_type']."'";
								}
								if($_POST['transmission']!='all'){
									$query .= " AND transmission ='".$_POST['transmission']."'";
								}
								if($_POST['brand']!='all'){
									$query .= " AND brand ='".$_POST['brand']."'";
								}
								if($_POST['luggage_space']!='all'){
									$query .= " AND luggage_space =".$_POST['luggage_space'];
								}

							}
							unset($_POST['filters_enabled']);
						}
						$result = $conn->query($query);
						if(mysqli_num_rows($result)<=0){
							echo "<p id='error_label'><strong>No search result found.. Try again</strong></p>";
						}else{
							while($row = $result->fetch_assoc()){
								echo 
									"<div class='result_tile'>
										<a href ='booking_page.php?id=".$row['registration_number']."' target='_blank'>
										<img src='../".$row["image"]."' href ='booking_page.php?id=".$row['registration_number']."'>
										</a>
										<div class='name_area'>
										<p>".$row['brand']." ".$row['name']."</p>
										</div>
									</div>";
							}
						}
					}				
				?>				
			</div>
		</div>
				
	</body>
	<footer class = "footer">           
  		   
             <div class = "container">
             
                 <div class="carwindy">
             
                     <p id="carp1">CAR<span id="carp2">W</span>INDY</p>
             
                 </div>
             
                 <div class = "row">
                 
                     <div class="qr-code">
                     
                         <img src="../images/QRCODE.png" width="110px" height="110px">
                         
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
                             <li><a class="selected" href = "#" >Jobs</a></li>
                             <li><a class="selected" href = "#" >News</a></li>
                         </ul>
                         
                     </div>
                     
                     <div class="footer-col">
                     
                         <h4 id="Id3">LEARN MORE</h4>
                         
                         <ul>
                             <li><a class="selected" href = "#" >Best Deals</a></li>
                             <li><a class="selected" href = "#" >Developers</a></li>
                             <li><a class="selected" href = "../../../IT21178368_PereaKKS/PereraKKShtml/Faq.html" >FAQ</a></li>
                             <li><a class="selected" href = "#" >Support</a></li>
                         </ul>
                         
                     </div> 
                     
                     <div class="footer-col">
                     
                         <h4 id="Id4">CONNECT WITH US</h4>
                         
                         <div class="socialLinks">
                         
                             <a class="selected-2" href = "https://www.facebook.com" target="_blank" ><img class="social-img" src="../images/FB.png" >Facebook</a><br>
                             <a class="selected-2" href = "https://www.twitter.com" target="_blank" ><img class="social-img" src="../images/TW.png" >Twitter</a><br>
                             <a class="selected-2" href = "https://www.instagram.com" target="_blank" ><img class="social-img" src="../images/IS.png" >Instagram</a><br>
                             
                         </div>
                         
                     </div>	
                     
                 </div>
                             
             </div>				
             
                 <a class="ab" href="http://www.facebook.com" target="_blank"><button class="button"><img id="img1" src="../images/Chat-icon.png" width="30px" height="30px" >Chat With Us!</button></a>		
             
             <div class="last-part" >						
                 
                 <p> Experienced Driver? <a class="selected" id="reg" href="../../../Naveen_Driver_Reg/Naveen_Driver_Reg/Driver_reg.php">Register now</a></p>
             
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
</html>