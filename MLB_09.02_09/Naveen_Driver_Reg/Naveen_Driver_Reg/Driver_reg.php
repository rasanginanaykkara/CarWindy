<!DOCTYPE html> 
	<html>
			<head>
				<link rel="stylesheet" href="Herath.R.P.N.M.css/styles/styles.css">
				<link rel="stylesheet" href="Herath.R.P.N.M.css/styles/home_styles.css">
		
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="Herath.R.P.N.M.css/styles/Style_For_Driver_Reg.css">

				<script type="text/javascript" src="Herath.R.P.N.M.js/registration.js"></script>
		
				<title>carWindy</title>
		
						
			</head>
			<body onload="initializeContent()">
	
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
					<button class="tab_button" id = "home_button" onclick="location.href=location.href='../../Dilshan/Dilshan/index.php'">HOME</button>
					<button class="tab_button" id = "service_button "onclick="">SERVICES</button>
					<button class="tab_button" id= "cars_button" onclick="location.href='../../Dilshan/Dilshan/DilshanG.A.M.php/cars.php'">CARS</button>
					<button class="tab_button" id="what_we_do_button" onclick="location.href='../../Rasangi/Rasangi/WhatWeDo.php'">WHAT WE DO</button>
					<button class="tab_button" id="about_button" onclick="location.href='../../Rasangi/Rasangi/About.php'">ABOUT</button>
					<button class="tab_button" id="feedback_button" onclick="location.href='../../Rasangi/Rasangi/feedback.php'">FEEDBACK</button>
				</div>
				
				<ul class="breadcrumb">		
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Register now</a></li>			
				</ul>
				
				<br><br>
				
				<h2 class="driver">Driver Registration</h2>
				
				<br><br><br>
				
				<nav id ="nav">
						<ul id = "menu">
						<li><a id="d1" href="#reg1"><button type="button" class="btn" id="btn1"  >Section 1</button></a></li>
						<li><a id="d2" href="#reg2"><button type="button" class="btn" id="btn2"  >Section 2</button></a></li>
						<li><a id="d3" href="#reg3"><button type="button" class="btn" id="btn3"  >Section 3</button></a></li>
					</ul>
				</nav>
				
				<br>
				
			
				<script type="text/javascript">		
			
					var d1 = document.getElementById("btn1");
					var d2 = document.getElementById("btn2");
					var d3 = document.getElementById("btn3");	
					
					window.onscroll = function(){changeBtnColor()};
					function changeBtnColor(){
						if(window.pageYOffset > 150 && window.pageYOffset < 900){
						
							d1.style.background="linear-gradient(170deg, #BAE128 20%,#84F734 80%)";
							
							d2.style.color="black"
							d2.style.background="rgba(54, 25, 25, .00004)";
							
							d3.style.color="black";
							d3.style.background="rgba(54, 25, 25, .00004)";
	
						}else{
							d1.style.color="black";
							d1.style.background="rgba(54, 25, 25, .00004)";						
						}
					
					
						if(window.pageYOffset > 890 && window.pageYOffset < 1800){
						
							d2.style.background="linear-gradient(170deg, #BAE128 20%,#84F734 80%)";	
							
							d1.style.color="black"
							d1.style.background="rgba(54, 25, 25, .00004)";	
							
							d3.style.color="black";
							d3.style.background="rgba(54, 25, 25, .00004)";
	
						}else{
							d2.style.color="black";
							d2.style.background="rgba(54, 25, 25, .00004)";						
						}
					
					
						if(window.pageYOffset > 1690 && window.pageYOffset < 3500){
						
							d3.style.background="linear-gradient(170deg, #BAE128 20%,#84F734 80%)";	
							
							d1.style.color="black";
							d1.style.background="rgba(54, 25, 25, .00004)";
							
							d2.style.color="black"
							d2.style.background="rgba(54, 25, 25, .00004)";	
					
						}else{
							d3.style.color="black";
							d3.style.background="rgba(54, 25, 25, .00004)";						
						}					
					
						if(window.pageYOffset > 250 && window.pageYOffset){						
							document.getElementById("nav").className="sticky";						
						}else{
							document.getElementById("nav").className="";						
						}
					}					
				</script>		
				
				<form name="myform" method="POST" action="login.php" id="myform" enctype="multipart/form-data">
			
					<div id="reg1">
						<br><br><br><br><br><br><br>
						<div class="reg_form">	
							
							
								<div class="form-position">
								
									<label for="first-name" class="labels" id="fname" >First Name</label> 
									<label for="last-name" class="labels" id="lname" >Last Name</label>		
																	
									<div class="name_error">
										<span class="pp1"></span>																		
										<span class="pp1"></span>
									</div>		

									<input type="text" class="txt_box required_form1" id="first-name" name="fname" placeholder="First Name">
													
									<input type="text" class="txt_box required_form1" id="last-name" name="lname" placeholder="Last Name">
									
									<br><br>
			
									<label class="labels">Gender</label>
									
									<span class="Gender_span"></span>

									<input type="radio" name="gender" class="radio" id="radio1" value="m" >
									<label for="radio1" class="gen ">Male</label>
									<input type="radio" name="gender" class="radio" id="radio2" value="f" >
									<label for="radio2" class="gen ">Female</label>
								
									<br><br>

									<label class="labels">Phone Number</label>
									
									<div class="phone_error">
										<span class="pp1"></span>
										<span class="pp1"></span>
									</div>

									<select id="phone-no" class ="required_form1" name="p_number1">
										<option value = "Country Code">Country Code</option>
										<option value = "+94">+94</option>
										<option value = "+14">+124</option>
										<option value = "+24">+244</option>
										<option value = "+34">+184</option>
										<option value = "+54">+254</option>
									</select>
				
									<span ><b>--</b></span>
													
									<input type="tel" class="required_form1" id="phone-no2" name="p_number2" placeholder="Phone Number">
									
									<br><br>
									
			
									<label class="labels" >Email</label>
															
										<p class="pp1"></p>				
									
									<input type="text" class="txt_box required_form1" id="Email" name="email" placeholder="e-mail">
									
									<br><br>
									
			
									<label class="labels">Driving License No</label>
																	
										<p class="pp1"></p>					
									
									<input type="text" class="txt_box required_form1" id="DLno" name ="driveId" placeholder="Driving License no">	
									
									<br><br>
									
		
									<label class="labels">Driving License Copy</label>
																	
										<p class="pp1"></p>
										<br>	

									<input type ="file" class="required_form1" name="file" id="file_pick" onchange="getFileName()">
									<label for="file_pick" id="file-picker" >Select a file</label>
									<span class="file-name" id="file_name">No file chosen..</span>
																
									<br><br>
		
									<label class="labels">Bank Details</label>
									
									<p class="pp1"></p>		

									<select  id="bankDet" name="bankDet" class="required_form1">
										<option>Choose Bank</option>
										<option>BOC</option>
										<option>NDB</option>
										<option>CMB</option>
										<option>RCB</option>
									</select>
									
									<br>			
									
									<label class="labels"></label>
								
										<p class="pp1"></p>					
	
									<input type="text" class="txt_box required_form1" id="bDetail" name="accNumber" placeholder="Account Number">
									
									<br><br>
								
								</div>
								
								<input type="button" class="submit" value="next" onclick="validateForm1(1)">		
							
							
							
						</div>
					</div>
					
					<br>
					
					<div id="reg2">
					
						<br><br><br><br><br><br><br>
						
							<div class="reg_form" >								
								
									<div class="form-position">
					
										<label class="labels">Address</label>
										<p class="pp2"></p>	
					
										<select class="required_form2" id = "select" name="country">
											<option>Select Country</option>
											<option>Sri Lanka</option>
											<option>India</option>
											<option>America</option>
											<option>Russia</option>
										</select>
										
										<br><br>
										<p class="pp2"></p>	
										<input type="text" class="txt_box required_form2" id="stAddress1" name="Address1" placeholder="Street Address 1">
										
										<br><br>	
										<p class="pp2"></p>	
										<input type="text" class="txt_box required_form2" id="stAddress2" name="Address2" placeholder="Street Address 2">
										
										<br><br>			
										<p class="pp2"></p>	
										<input type="text" class="txt_box required_form2" id="city" name="city" placeholder="City">
										
										<br><br>
										<p class="pp2"></p>	
										<input type="text" class="txt_box required_form2" id="stateOrProv" name="state" placeholder="State / Province">
										
										<br><br>
										<p class="pp2"></p>	
										<input type="text" class="txt_box required_form2" id="postalZip" name="postal" placeholder="Postal / Zip Code">
										
										<br><br>
				
										<label class="labels">Experience</label>
										<p class="pp2"></p>											
										<textarea class="required_form2" name="Description" id="yourExp" cols="39" rows="8" placeholder="Your Experience..."></textarea>
										
										<br><br>
									</div>
									
									<input type="button" class="submit" value="next" onclick="validateForm2(2)">							
								
							</div>
					</div>
					
					<br>
					
					<div  id="reg3">
					
						<br><br><br><br><br><br><br>
								
							<div class="reg_form">

									<div class="form-position">
								
									<fieldset>
									
										<legend>Terms and conditions</legend>
										
											<div class="scroll"><center>--Terms and conditions--</center><br>
											
												What’s in these terms?<br>
												This index is designed to help you understand some of the key updates we’ve made to our Terms of Service (Terms). We hope this serves as a useful guide, but please ensure you read the Terms in full.
												<br><br>
												Welcome to CarWindy!
												This section outlines our relationship with you. It includes a description of the Service, defines our Agreement, and names your service provider.
												<br><br>
												Who May Use the Service?
												This section sets out certain requirements for use of the Service, and defines categories of users.
												<br><br>
												Your Use of the Service
												This section explains your rights to use the Service, and the conditions that apply to your use of the Service. It also explains how we may make changes to the Service.
												<br><br>	
												Your Content and Conduct
												This section applies to users who provide Content to the Service. It defines the scope of the permissions that you grant by uploading your Content, and includes your agreement not to upload anything that infringes on anyone else’s rights. 
												<br><br>
												Account Suspension and Termination
												This section explains how you and CarWindy may terminate this relationship.
												<br><br>
												About Software in the Service
												This section includes details about software on the Service.
												<br><br>
												Other Legal Terms
												This section includes our service commitment to you. It also explains that there are some things we will not be responsible for.
												<br><br>
												About this Agreement
												This section includes some further important details about our contract, including what to expect if we need to make changes to these Terms; or which law applies to them.</div>
									
									</fieldset>
									
										<br>	
										
										<input type="checkbox" id = "check1" >									
										<label class="check" for ="check1" >I accept license and agreements</label>
									
										<input type="button" name="sub" id="subBtn" class="submit" value="Submit" onclick="submitForm()">

									</div>
								
							</div>
					</div>
					<br>
				</form>			
				
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