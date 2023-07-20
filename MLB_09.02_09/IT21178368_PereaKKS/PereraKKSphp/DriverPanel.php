<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Panel</title>
    <script rel="text\javascript" src="../PereraKKSjs/script_driver_panel.js"></script>
    <link rel="stylesheet" href="../PereraKKScss/style_DriverPanel.css">
    <link rel="stylesheet" href="../PereraKKScss/cssfooter.css">
    </head>

    <body>
    <?php
    $_GET['id']=$_SESSION['userId'];
    $conn = new mysqli("localhost","root","","test");
    function deleteReservation($conn){
        
        if(isset($_GET['submitted'])){
        if($_GET['submitted']==1){
        $stmt = "UPDATE reserve SET driver_id = '' WHERE reservation_id =".$_GET['delete_key'];
        if(mysqli_query($conn,$stmt)){
           
        }else{
            echo "mysqli_error($conn)";

        }
        
        }
    }
    
    }
    function updateSettings($conn){
        
        if(isset($_POST['updated'])){
            
            $upQuery = "UPDATE driver SET ";
            $upData = "VALUES (";
            $started = false;
            if($_POST['fname']!=""){
                $upQuery .= "firstName = '". $_POST['fname']."'";                
                $started = true;
            }
            if($_POST['lname']!=""){
                if($started){
                    $upQuery .= ",lastName = '".$_POST['lname']."'";
                    
                }else{
                    $upQuery .="lastName = '".$_POST['lname']."'";
                    
                    $started = true;
                }
                
            }
            if($_POST['lnumber']!=""){
                if($started){
                    $upQuery .= ",number = '".$_POST['lnumber']."'";
                    
                }else{
                    $upQuery .="number = '".$_POST['lnumber']."'";
                    
                    $started = true;
                }
                
            }
            if($_POST['bio']!=""){
                if($started){
                    $upQuery .= ",experience = '".$_POST['bio']."'";
                    
                }else{
                    $upQuery .="experience = '".$_POST['bio']."'";
                    $started = true;
                    
                }
                
            }
            if(basename($_FILES['photo']['tmp_name']) != ""){
                if($started){
                    $upQuery .= ",photo = '../../images/".$_POST['id'].".jpg'";
                    copy($_FILES['photo']['name'],"../../images/".$_POST['id'].".jpg");
                    
                }else{
                    $upQuery .="photo = '../../images/".$_POST['id'].".jpg'";   
                    copy($_FILES['photo']['tmp_name'],"../../images/".$_POST['id'].".jpg");                 
                    $started = true;
                }
            }
            
            
            $upQuery .= " WHERE ID=".$_GET['id'].";";
            echo "<script>alert('".$upQuery."')</script>";
           if($started)
            $conn->query($upQuery);
            
            
                
        }
    }
    updateSettings($conn);
    deleteReservation($conn);

?>
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


        <div id="box1">
            <?php
                        
                        $stmt = "SELECT * FROM driver WHERE ID = ".$_GET['id'] ;
                        $result = $conn->query($stmt);
                        if($row = $result->fetch_assoc()){
                            echo "
            <h2 class='heading'>Driver's Profile</h2>

                <center><img id = 'pp'src='".$row['photo']."'></center><br><br>
                <p class='content1'>
                   
                            
                            
                            Name : ".$row['firstName']." ". $row['lastName']." <br><br>
                            ID : ".$_GET['id']." <br><br>
                            Contact Number : ".$row['number']." <br><br>
                            Experiences : ".$row['experience']."
                    
                </p>";  
                }
                ?>
                <br>

            <button onclick="location.href='DriverSettings.php?id=1'" formaction="#">Edit Profile</button>


        </div>

        
        <div id="box2">
            <h2 class="heading">Driver's Reservation</h2>
            <?php 
                $find_reserve = "SELECT * FROM reserve WHERE driver_id = '".$_GET['id']."'";
                $result_reserve = $conn->query($find_reserve);
                while($reservation = $result_reserve->fetch_assoc()){
                    echo "
                    <form  method='get' action='DriverPanel.php?id=".$_GET['id']."'>
                    <div class= 'reservation'>
                    
                        <input type='image' name='submit_button' class='bin' src='../PereraKKSimages/bin.png'>
                        Reservation ID : ".$reservation['reservation_id']."<br>
                        Car's Registration Number : ".$reservation['registration_number']."<br>
                        Pick-up Date : ".$reservation['pickup_date']."<br>
                        Drop-off Date : ".$reservation['dropoff_date']."<br>
                        <input type='hidden' name='delete_key' value=".$reservation['reservation_id'].">
                        <input type='hidden' name='id' value=1>
                        <input type='hidden' name='submitted' value=1>
                    
                </div>
                </form>";
                }
            ?>  
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
                            <li><a class="selected" href = "#" >Jobs</a></li>
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
							<a class="selected-2" href = "https://www.twitter.com" target="_blank" ><img class="social-img" src="../PereraKKSimages/TW.png" >Twitter</a><br>
							<a class="selected-2" href = "https://www.instagram.com" target="_blank" ><img class="social-img" src="../PereraKKSimages/IS.png" >Instagram</a><br>
							
						</div>
						
                    </div>	
					
                </div>
							
            </div>				
			
				<a class="ab" href="http://www.facebook.com" target="_blank"><button class="button"><img id="img1" src="../PereraKKSimages/Chat-icon.png" width="30px" height="30px" >Chat With Us!</button></a>		
			
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