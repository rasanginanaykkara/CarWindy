<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Settings</title>
    <link rel="stylesheet" href="../PereraKKScss/style_DriverSettings.css">
    <link rel="stylesheet" href="../PereraKKScss/cssfooter.css">
    <script type="text/javascript" src="../PereraKKSjs/script_DriverSettings.js"></script>
    </head>

    <body>
       
        <div id="header_area" class="header">
			<img src="../PereraKKSimages/logo.png" id="logo_img">
			<div id="login_signup_links" class="user_links">
				<p>
					<a href="">login</a>
					|
					<a href="">sign in</a>
				</p>
			</div>
		</div>
        <br>

        <div id="description">
            <h1 class="topic">
                What driver can Do Here?
            </h1>

            
                <button class="edit" id="edit_profile" onclick="displaySelect1()">
                    Edit driver profile
                </button>

                <br><br><br><br>

                <button class="edit" id="term_cond" onclick="displaySelect2()">
                    Terms and Conditions
                </button>
            
        </div>

        <div class="edit_content">
            
                <div class="content_inner" id="pro">

                    <form method="post" action="DriverPanel.php?id=1" enctype = "multipart/form-data">
                        <fieldset>
                            <legend>Edit Profile Details</legend>
                            <br><br>

                            <label class="labels">Update profile photo</label>
                            <input type="file" id="file_pick" name="photo"><br><br>
                            <label for="file_pick" id="file-picker">Select a file</label><br><br><br>

                            First Name : <input type="text" name="fname"style="height:30px; width:50%"><br><br>
                            Last Name : <input type="text" name="lname"style="height:30px; width:50%"><br><br>                            
                            Contact Number : <input type="text" name="lnumber"><br><br>
                            Experiences : <input type="text" name="bio"style="height:20px; width:50%"><br><br>
                            <input type="text" name="id" value="1">
                            <br><br><br>
                            <center>
                                <input type="reset" value="Reset" style="height:50px; width:200px">
                                <input type="submit" name="updated" value="Update" style="height:50px; width:200px">
                            </center>
                            
                        </fieldset>
                    </form>
                    
                </div>
                
               
                <div class="content_inner" id="tc">
                    <h1>Terms and Conditions</h1>
                        	
                    <form method="post" action="#">	
                        <fieldset>
                            <legend>Terms and conditions</legend>
                            <div class="terms"><center>--Terms and conditions--</center><br>
                            The renter fully agrees to the terms and conditions of this contract and has received a copy thereof.
                            <br><br>
                            The renter has received the mentioned car and its accessories in proper and safe condition.
                            <br><br>
                            The renter agrees to return the vehicle to the lessor on the agreed date and place, as written in the contract, or earlier if the lessor so insists. 
                            <br><br>
                            The collision damage waiver (CDW) does not cover.
                            <br><br>
                            The car must be operated and driven with great care.
                            <br><br>
                            Under no circumstances is it permitted to use the vehicle, operate or drive.
                            <br><br>
                            All car must be retuned with full tank of gas.<br>
                            
                        </fieldset>
                            <br>				
                            <input type="checkbox">
                            <label class="submit_button">I accept license and agreements</label>
                            <input type="submit" name="sub" id="sub" value="Submit">
                        
                        </form>

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
					
						<img src="../PereraKKSimages/QRCODE.png" width="110px" height="110px">
						
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
                            <li><a class="selected" href = "../PereraKKShtml/Faq.html" >FAQ</a></li>
                            <li><a class="selected" href = "#" >Support</a></li>
                        </ul>
						
                    </div> 
					
                    <div class="footer-col">
					
                        <h4 id="Id4">CONNECT WITH US</h4>
						
						<div class="socialLinks">
						
							<a class="selected-2" href = "https://www.facebook.com" target="_blank" ><img class="social-img" src="../PereraKKSimages/FB.png" >Facebook</a><br>
							<a class="selected-2" href = "https://www.twitter.com" target="_blank" ><img class="social-img" src="PereraKKSimages/TW.png" >Twitter</a><br>
							<a class="selected-2" href = "https://www.instagram.com" target="_blank" ><img class="social-img" src="PereraKKSimages/IS.png" >Instagram</a><br>
							
						</div>
						
                    </div>	
					
                </div>
							
            </div>				
			
				<a class="ab" href="http://www.facebook.com" target="_blank"><button class="button"><img id="img1" src="../PereraKKSimages/Chat-icon.png" width="30px" height="30px" >Chat With Us!</button></a>		
			
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