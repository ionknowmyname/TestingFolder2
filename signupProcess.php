<?php
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	$login = $_POST["staffid"];
	$password = $_POST["password"];

	
	// $login = filter_input(INPUT_POST, "staffid");
	// $password = filter_input(INPUT_POST, "password"); 
	//Does the same thing as $_POST

	if(!empty($firstName) && !empty($lastName)){
		if(!empty($login) && !empty($password)){
		
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "logininfo";

			//creating connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


			if(mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
			}else{
				if(!empty($login)){

					//Check if already in DB, then tell them to login instead.
					$sql = "SELECT firstName, staffLogin FROM tblusers WHERE staffLogin= '$login' ";
						
		                $query = $conn->query($sql);

		     			if($query->num_rows > 0){		     				
		     				echo "<script type='text/javascript'>alert('You already signed up, Please Login'); window.location='login.html';</script>";	
		     			}else{

				     		//if not in DB, insert into DB
							$sql2 = "INSERT INTO tblusers (firstName, lastName, Email, staffLogin, staffPassword) values ('$firstName', '$lastName', '$email', '$login', '$password')";
								if($conn->query($sql2)){
									echo "<script type='text/javascript'>alert('New record is inserted successfully'); window.location='login.html';</script>";
								}else{
									echo "Error: ". $sql2 ."<br>". $conn->error;
								}
							$conn->close();
						}
			   	}
			}
		}else{
			echo "<script type='text/javascript'>alert('Either Staff ID or Password is empty'); window.location='index.html';</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('Either First Name or Last Name is empty'); window.location='index.html'; </script>";	
	}  	
?>