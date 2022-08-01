<html>
	<head> <title> registration </title></head>
	<body> 
	<h1> registration form</h1>
	<form action ="reg.php" method ="post">
		First Name : <input type="text" name ="Fname" ><br><br>
		Last Name : <input type="text" name ="Lname"><br><br>
		Gender : <input type ="radio" name ="gender" value ="male"> Male
		<input type ="radio" name ="gender" value ="female">Female<br><br>
		which course are you following at UOJ? : <select name ="course">
				<option  > Computer Sciece </option>
				<option  >Physical Sciece </option>
				<option >Applied Sciece </option>
				
				</select>
				<br><br>
		select course unit :<br>
			<input type = "checkbox" name="unit[]" value ="CSC123">CSC123<br>
			<input type = "checkbox" name="unit[]" value ="CSC234">CSC234<br>
			<input type = "checkbox" name="unit[]" value ="CSC456">CSC456<br>
		
		<br><br>
		password :<input type="password" name ="password">
		<br><br>
		<input type="submit" name ="sub" button ="submit">
		<input type="reset" name ="re" button ="reset">
	</form>
	
	</body>
</html>