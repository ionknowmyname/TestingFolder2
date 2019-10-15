<!DOCTYPE html>
<html>
	<head>
		<script type = "text/css" rel = "stylesheet">
			a{
				text-decoration: none;
				color: #000;
				margin-left: 30px;
			}

		    a:hover{
				color: maroon;
			}
		</script>

		<script src="jquery-3.1.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!--  using jquery to add the html page inside div tag

		<script>
			$(document).ready(function(){
	   
	   			$('#add').load("addCourses.html");

			});
		</script>
		-->


		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Hind|Oswald" rel="stylesheet">
	</head>

	<body>
		<!--  <div id="add"></div>  -->

		<iframe name="courses" src="addCourses.html" style="height:270px; ; width: 1335px;" scrolling="none"></iframe>
		<iframe name="calculator" src="gpaCalculator.js" style="height:500px; ; width: 1335px;"></iframe> border:0px

	</body>

	<?php
		$_SESSION['staffLogin'] = $row['staffLogin'];
	?>

</html>