<?php
	session_start();
	$login = $_POST["staffid"];
	$password = $_POST["password"];

	// $login = filter_input(INPUT_POST, "staffid");
	// $password = filter_input(INPUT_POST, "password"); 
	//Does the same thing as $_POST

	if(!empty($login) && !empty($password)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "logininfo";

			//creating connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


				 // OR if($conn->connect_error){}
				if(mysqli_connect_error()){
					// OR die("CONNECTION NOT GRANTED" .$conn->connect_error);
					die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
				}else{
						$sql = "SELECT firstName, staffLogin, staffPassword FROM tblusers WHERE staffLogin= '$login' and staffPassword= '$password' ";
						
		                $query = $conn->query($sql);

		      
		     			if($query->num_rows > 0){
		     				while ($row = $query->fetch_assoc()) {
		     					echo "First Name: " .$row['firstName'];
								$_SESSION['staffLogin'] = $row['staffLogin'];
		     					//header('Location:home.php');
		     				}
		     			}else{
		     				echo "<script type='text/javascript'>alert('Wrong Staff ID or Password'); window.location='login.html'; </script>";
		     			} 
				}
	}else{
		echo "<script type='text/javascript'>alert('Staff ID or Password is empty. Click on Sign Up to create an account'); window.location='login.html'; </script>";
	}

?>

 