

<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "feedback";


	$conn = new mysqli($server, $user, $password, $dbname);

	if($conn->connect_error){

		die("Connection faild: " . $con->connect_error);

	}else{	

		if(isset($_POST['submit'])){
            
			$name = $_POST['user'];
			$Rate = $_POST['rate'];
            $id = $_POST['id'];
			$feedContent = $_POST['feedback-content'];		
            echo $id;

            $sql ="UPDATE feedback_table SET user_name='$name',Rate='$Rate',feedback='$feedContent' WHERE ID='$id'";
            if ($conn->query($sql) === TRUE) {
            
            header("Location:feedback.php");
        } 

		}else{
			echo "Not submitted : ";
		}
		
	}
	$conn->close();	

?>