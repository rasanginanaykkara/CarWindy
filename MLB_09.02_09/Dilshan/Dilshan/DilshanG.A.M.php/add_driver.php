<!DOCTYPE html> <html>
	<head>
        <?php
            
        ?>

		<link rel="stylesheet" href="../DilshanG.A.M.css/styles.css">
        <link rel="stylesheet" href="../DilshanG.A.M.css/footer.css">		
		<link rel="stylesheet" href="../DilshanG.A.M.css/add_driver_styles.css">
        <link rel="stylesheet" href="../DilshanG.A.M.css/booking_page_styles.css">
		<title>carWindy</title>				
		<script type="text/javascript" src="../DilshanG.A.M.js/scripts_for_cars.js">            
        </script>
        <script type="text/javascript" src="../DilshanG.A.M.js/scripts_for_add_driver.js">
		</script>
	</head>
	<body>
        <?php
            $conn = new mysqli("localhost","root","","test");
           
        ?>
		
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
            <button class="tab_button" onclick="location.href='../index.php'">HOME</button>
			<button class="tab_button">SERVICES</button>
			<button class="tab_button active">CARS</button>
			<button class="tab_button">WHAT WE DO</button>
			<button class="tab_button">ABOUT</button>
		</div>
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>		
		</ul>
        <div class="content">
            <div id="drivers_area">
                    
                <?php

                    $conn= new mysqli("localhost","root","","test");
                    $sql = "SELECT * FROM driver EXCEPT SELECT d.driver_id, d.driver_name, d.contact_number, d.driver_bio, d.profile_picture FROM reserve r 
                    JOIN driver d ON r.driver_id = d.driver_id WHERE (r.pickup_date BETWEEN '".$_GET['pickup_date']."' AND '".$_GET['dropoff_date']."') OR 
                    (r.pickup_date <= '".$_GET['pickup_date']."' AND r.dropoff_date >= '".$_GET['pickup_date']."');";
                    $result = $conn->query($sql) Or die($conn->error);
                    
						
						
							while($row = $result->fetch_assoc()){
								echo" 
                                <div class='list_item' onclick=addADriver(".$row['driver_id'].")>
                                <img src='".$row['profile_picture']."'>
                                <div class='driver_info'>
                                    <p class='driver_name'>".$row['driver_name']." ".$row['driver_name']."</p>
                                    <p class='bio'>".$row['driver_bio']."
                                    
                                    </p>
                                </div>
                                </div>";
							}
						
                ?>
            </div>
            <div id="paymentDetails">
                            <?php
                            $stmnt = "SELECT* FROM car WHERE registration_number = '".$_GET['id']."'";
                            $result = $conn->query($stmnt) OR die($conn->error);
                            $row = $result->fetch_assoc();
                            
                            echo"
                            <center><span>Payment details</span></center><br><br>                            
                            <span>Reg number : </span><span class='answer' id='reg_number'>".$_GET['id']."</span><br><br>

                            <span>Number of days : </span><span class='answer' id='no_of_days'></span><br><br>

                            <span>Renatal per day : </span><span class='answer' id='per_day'>".$row['pay']."</span><br><br>

                            <span>driver cost : </span><span class='answer' id='driver_cost'></span><br><br>

                            <span>Total : </span><span class='answer' id='total'></span><br><br>

                            <span>Driver : </span><span class='answer' id='driver'>None</span><br><br>

                            <span>Pick up date : </span><span class='answer' id='start'>".$_GET['pickup_date']."</span><br><br>

                            <span>Drop off date : </span><span class='answer' id='end'>".$_GET['dropoff_date']."</span><br><br>

                            <form method = 'post' action='reservator.php'><br><br>
                                <input type='hidden' name='registration_number' value='".$_GET['id']."'>
                                <input type='hidden' name='pickup_date' value='".$_GET['pickup_date']."'>
                                <input type='hidden' name='dropoff_date' value='".$_GET['dropoff_date']."'>
                                <input type='hidden' id='dID' name='driver_id' value = 0>
                                <input type='submit' id='pay' value='reserve' name='reserved' ><br><br><br>
                            </form>

                            <button onclick='removeDriver();'>Remove driver</button><br><br>";
                            ?>
            </div>
        </div>

        <script>getTimeDifference();</script>
        <script>calculateTotal()</script>
 
		
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
                             <li><a class="selected" href = "#" >FAQ</a></li>
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
	
</html>