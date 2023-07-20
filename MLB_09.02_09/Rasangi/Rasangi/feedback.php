
<!DOCTYPE html> <html>
	<head>
		<link rel="stylesheet" href="Rasangi.css/styles.css">
		<link rel="stylesheet" href="Rasangi.css/home_styles.css">
		<link rel="stylesheet" href="Rasangi.css/footer.css">
        <link rel="stylesheet" href="Rasangi.css/feedback.css">
		
		<title>carWindy</title>
		
		<script type="text/javascript" src="Rasangi.js/scripts_for_home.js">
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
			<button class="tab_button" onclick="location.href='../../Dilshan/Dilshan/index.php'">HOME</button>
			<button class="tab_button" id = "service_button "onclick="">SERVICES</button>
			<button class="tab_button" id= "cars_button" onclick="location.href='../../Dilshan/Dilshan/DilshanG.A.M.php/cars.php'">CARS</button>
			<button class="tab_button" id="what_we_do_button" onclick="location.href='WhatWeDo.php'">WHAT WE DO</button>
			<button class="tab_button" id="about_button" onclick="location.href='About.php'">ABOUT</button>
			<button class="tab_button active" id="feedback_button" onclick="#">FEEDBACK</button>
		</div>
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>	
			<li><a href="#">Feedback</a></li>	
		</ul>

        <div class="content feedback" id="feedback_content">

            <div class="feed-back-name">
                <span id="feedID">FEEDBACK</span> 
            </div>
        
            
            <br/> 

            <div class="feedback-button">
                <button class="feedback_btn" id="feedback_btn1" onclick="feedbackSelect1()">User feedback</button><br/>
                <button class="feedback_btn" id="feedback_btn2" onclick="feedbackSelect2()">Send your feedback</button><br/>            
            </div>
            

                <div class="feedback-background-inner" id="fbacgrd1">
                    <div class="inner-content" id="ic1">                    

                            <?php
                                $conn = new mysqli("localhost","root","","feedback"); 
                                if($conn->connect_error){
                                    die("Connection faild: " . $conn->connect_error);
                                }else{                      
                                
                                $stmnt = "SELECT * FROM feedback_table;";
                                $result = $conn->query($stmnt);

                                if(mysqli_num_rows($result)<=0){
                                    echo "no feedback in databse";
                                }
                                while($row = $result->fetch_assoc()){
                                    echo '<div class="feedback-user"style = "width:100%; height: fit-content; ">';

                                    echo '<div class="username" style="color:black; font-weight: bold;" ><span>'.$row["user_name"].'</span></div>';

                                    for ($i=0; $i < $row['Rate'] ; $i++) { 
                                        echo '<span class = "select" styles="color:yellow;"> ★ </span>';
                                    }
                                                                        
                                    for ($i=0; $i < 5 - $row['Rate']; $i++) { 
                                        echo '<span class ="notselect"> ★ </span>';
                                    }
                                    echo "<div class='a_feedback'><p>".$row['feedback']."</p><br/></div>";
                                    ?>
                                    
                                    <td class="deletebtn" ><a href="editform.php?ID=<?php echo $row["ID"];?>"onclick="return confirm('Are you sure?');">Edit</a></td>

                                    <td class="deletebtn" ><a href="delete-feedback.php?ID=<?php echo $row["ID"];?>"onclick="return confirm('Are you sure?');">Remove</a></td>
                                    
                                    <?php
                                    echo "<hr><br>";

                                    echo '</div>';                                          
                                }
                            }   
                            $conn->close();     

                        ?>  
                
                    </div>
                </div>

                <div class="feedback-background-inner" id="fbacgrd2">
                        <br/>
                    <span class="span-feed">Your feedback is valuble to us.</span>
                        <br/>
                        <br/>
                        <br/>
                    <span class="span-feed">Rate our service.</span>
                        <br/>
                        <form action="SendtoDB.php" method="POST" enctype="multipart/form-data">
                            <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                            </div><br/>
                            <input type="text" class="text_1" name="user" placeholder="Enter your name..">
                            <br/>
                            <textarea class="textarea" name="feedback-content" cols="100" rows="8" placeholder="Enter your feedback...."></textarea>
                            <input type="submit" class="submit_form" name="submit" value="submit">
                        </form>
                </div>
                
                
                <script type="text/javascript">
                    function feedbackSelect1(){
                        var background_1 = document.getElementById("fbacgrd1");
                        var background_2 = document.getElementById("fbacgrd2");
                        
                        background_1.style.display = "block";
                        background_2.style.display = "none";
                                            
                    }
                                            
                    function feedbackSelect2(){
                        var background_1 = document.getElementById("fbacgrd1");
                        var background_2 = document.getElementById("fbacgrd2");                     

                        background_1.style.display = "none";
                        background_2.style.display = "block";
                        
                    }
            
                </script>
                            
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