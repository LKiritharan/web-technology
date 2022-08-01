<html>
	<head> 
		<title> Thank You </title>
	</head>
	<body>
	<?php $units = " ";
			 if(isset($_POST["unit"]))
			 {
				 foreach($_POST["unit"] as $unit)
				 {
					 $units.=$unit.", ";
				 }
			 }
			 
			//echo print_r($_POST["unit"]);?>
		
		<h1> Thank you for registering. here is the information you submitted</h1>

		<table border = 1; Style ="border-collapse:collapse;">
			<tr><td>First Name:</td><td><?php echo $_POST["Fname"];?> </td></tr>
			<tr><td>Last Name:</td><td><?php echo  $_POST["Lname"];?></td></tr>
			<tr><td>Gender:</td><td><?php echo  $_POST["gender"];?></td></tr>
			<tr><td>Following:</td><td><?php echo  $_POST["course"];?></td></tr>
			<tr><td>course unit:</td><td>
			
			<?php  echo substr_replace( $units, " ",strlen($unit-2));	//echo print_r($_POST["unit"]);?>	</td></tr>
			
		</table>

	</body>
</html>