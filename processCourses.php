<?php
	$courseName = $_POST["courseID"];
	$courseUnit = $_POST["courseunit"];
	

	if(!empty($courseName) && !empty($courseUnit)){
				
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "logininfo";

			//creating connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


			if(mysqli_connect_error()){
				die('Connection Failed ('. mysqli_connect_errno() .') '. mysqli_connect_error());
			}else{
				if(!empty($courseName)){

					//Check if already in DB, then tell them to login instead.
					$sql = "SELECT courseNumber, courseUnits FROM courses WHERE courseNumber= '$courseName' ";
						
		                $query = $conn->query($sql);

		     			if($query->num_rows > 0){		     				
		     				echo "<script type='text/javascript'>alert('Course already in database, Please add new course.'); window.location='addCourses.html';</script>";	
		     			}else{

				     		//if not in DB, insert into DB
							$sql2 = "INSERT INTO courses (courseNumber, courseUnits) values ('$courseName', '$courseUnit')";
								if($conn->query($sql2)){
									echo "<script type='text/javascript'>alert('New Course added successfully. Add next course.'); window.location='addCourses.html';</script>";
								}else{
									echo "Error: ". $sql2 ."<br>". $conn->error;
								}
							$conn->close();
						}
			   	}
			}
	}else{
		echo "<script type='text/javascript'>alert('Either Course ID or  Course Units is empty'); window.location='addCourses.html'; </script>";	
	}  	
?>