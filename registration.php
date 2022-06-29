<html>
	<head> <title> registration </title></head>
	<body> 
	<h1> registration form</h1>
	<form action ="process_registration.php" method ="post">
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
		password :<input type="password" name ="password">
		<br><br>
		<input type="submit" name ="sub" button ="submit">
		<input type="reset" name ="re" button ="reset">
	</form>
	
	</body>
</html>
