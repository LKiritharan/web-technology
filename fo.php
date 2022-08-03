	<form action =" " method = "post"  enctype = "multipart/form-data">
		<label for ="fileselectedfield">A file  selected field</label>
		
		<input type ="file" name= "fileselectedfield"  value =""/>
		
		<br><br>
		
		<input type = "submit" name ="sub">
	</form>
	<?php 
	if(isset($_POST["sub"])){
	$filename =$_FILES["fileselectedfield"]["name"];
	
			echo $filename."<br>";
	if(move_uploaded_file($_FILES["fileselectedfield"]["tmp_name"],"C:\\xampp\\htdocs\\New folder\\".$_FILES["fileselectedfield"]["name"]))
	{
		echo "Your file uploaded";
		
	}
	else " Sorry there is a problem";
			
			
	}			?>
