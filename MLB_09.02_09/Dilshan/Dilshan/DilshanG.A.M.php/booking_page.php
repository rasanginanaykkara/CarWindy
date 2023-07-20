
<!DOCTYPE html> <html>
	<head>
        <?php
            require 'header_creater.php';
            $fromHome = false;
        ?>

		<link rel="stylesheet" href="../DilshanG.A.M.css/styles.css">
		<link rel="stylesheet" href="../DilshanG.A.M.css/footer.css">
		<link rel="stylesheet" href="../DilshanG.A.M.css/cars_styles.css">
        <link rel="stylesheet" href="../DilshanG.A.M.css/booking_page_styles.css">
		<title>carWindy</title>				
		<script type="text/javascript" src="../DilshanG.A.M.js/scripts_for_cars.js">            
        </script>
        <script type="text/javascript" src="../DilshanG.A.M.js/scripts_for_booking_page.js">
		</script>
	</head>
	<body>
        <?php
            $conn = new mysqli("localhost","root","","test");
            if(isset($_POST['randomsub'])){
                if($_POST['type']==""){
                    $sql = "SELECT registration_number FROM car EXCEPT SELECT registration_number FROM reserve r 
                    WHERE (r.pickup_date BETWEEN '".$_POST['pickup_date']."' AND '".$_POST['dropoff_date']."') OR 
                    (r.pickup_date <= '".$_POST['pickup_date']."' AND r.dropoff_date >= '".$_POST['pickup_date']."');";
                }else{
                    $sql = "SELECT registration_number FROM car c WHERE c.car_type = '".$_POST['type']."' EXCEPT SELECT registration_number FROM reserve r 
                    WHERE (r.pickup_date BETWEEN '".$_POST['pickup_date']."' AND '".$_POST['dropoff_date']."') OR 
                    (r.pickup_date <= '".$_POST['pickup_date']."' AND r.dropoff_date >= '".$_POST['pickup_date']."');";
                }
                
                $freeVehicle = $conn->query($sql) OR die($conn->error);
                if($carNum = $freeVehicle->fetch_assoc()){
                    $_GET['id'] = $carNum['registration_number'];
                    $fromHome = true;
                }else{
                    echo "<script>alert('No matching vehicle found Redirecting to the home page') </script>";
                    echo "<script>window.location = '../index.php';</script>";
                    
                }
                
                
            }
            $stmnt = "SELECT * FROM car WHERE registration_number = '".$_GET['id']."';";
            $result = $conn->query($stmnt);
        ?>
		
		<div id="header_area" class="header">
			<img src="../images/logo.png" id="logo_img">
			<?php
                setLogin();
            ?>
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
		<?php
                          
                if($details = $result->fetch_assoc()){
                echo "
                <div id='booking_header'>
                    <div class='spec_sheet'>
                        <table>
                            <tr>
                                <td>Brand:</td>
                                <td>".$details['brand']."</td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td>".$details['name']."</td>
                            </tr>
                            <tr>
                                <td>Seating facility:</td>
                                <td>".$details['seats']." passengers</td>
                            </tr>
                            <tr>
                                <td>Boot space :</td>
                                <td>".$details['luggage_space']." suitcases</td>
                            </tr>
                            <tr>
                                <td>Transmission:</td>
                                <td>".$details['transmission']."</td>
                            </tr>
                            <tr>
                                <td>Fuel type:</td>
                                <td>".$details['fuel_type']."</td>
                            </tr>
                            <tr>
                                <td>Car type:</td>
                                <td>".$details['car_type']."</td>
                            </tr>
                        </table>    
                    </div>
                    <img id='car' src='../images/cars/".$_GET['id'].".jpg'>
                    <div id='check_panel'>
                        <form id='formid' method='get' action='booking_page.php'>
                            <input class = 'dateinput' type='date' id = 'pickup_date' name = 'pickup_date'><br>
                            <input class = 'dateinput' type='date' id = 'dropoff_date' name = 'dropoff_date'><br>
                            <span id='status'>Not checked</span><br>
                            <input type='hidden' name='id' value = ".$_GET['id']."><br>
                            
                            <input id='sub' name='sub' type='submit' value='Check availability'>
                            
                            <br>
                        </form>
                        
                    </div>
                </div>";
                }
                
            
        ?>
        
       
		 
		<?php
        if(isset($_GET['sub'])){
            $conn = new mysqli("localhost","root","","test");
            $check = "SELECT COUNT(reservation_id) AS C FROM reserve WHERE registration_number = '".$_GET['id']."' AND (
                        pickup_date BETWEEN '".$_GET['pickup_date']."' AND '".$_GET['dropoff_date'].
                        "' OR (pickup_date <= '".$_GET['pickup_date']."' AND dropoff_date >= '".$_GET['pickup_date']."'));";
            
            $row_result = $conn->query($check)  or die($conn->error);
            if($row_count = $row_result->fetch_assoc()){
                echo "<script>setResult(".$row_count['C'].",'".$_GET['pickup_date']."','".$_GET['dropoff_date']."')</script>";
            }else
                echo mysqli_error($conn);
            
        }else if($fromHome){
            echo "<script>setResult(0,'".$_POST['pickup_date']."','".$_POST['dropoff_date']."')</script>";
        }
        ?>
		
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
	
</html>