<?php 
	/*$filename = basename("/home/james/docs/index.html");
	echo "$filename<br>";
		
	$dir = basename("/home/james/docs");
	echo "$dir<br>";*/
	
	/*$myfile = fopen("data.txt","r") or die("Unable to open file!");
	echo fread($myfile,filesize("data.txt"));
	fclose($myfile);
	echo "<br>";
	/*hi welcome!!*/

	
	
	/*$myfile = fopen("data1.txt","r") or die("Unable to open file!");/*data1.txt file not in folder*/
	/*echo fread($myfile,filesize("data1.txt"));
	fclose($myfile);
	/*Warning: fopen(data1.txt): failed to open stream: No such file or directory in C:\xampp\htdocs\new1\new .php on line 12
	Unable to open file!*/
	echo "<br>------------------------------------------------<br>";
	
	/*$myfile = fopen("data.txt","w") or die("Unable to open file!");
	$txt ="John Doe\n";
	fwrite($myfile,$txt);
	$txt ="jane Doe\n";
	$txt ="jane Doe thankyou\n";
	fwrite($myfile,$txt);
	/*$txt1 ="Write a text file ";
	fwrite($myfile,$txt1);*/
	/*fclose($myfile);
	echo "<br>";*/
	
	/*$myfile = fopen("data.txt","a");
	$txt ="aaaa\n";
	fwrite($myfile,$txt);
		$txt ="bbb\n";
	fwrite($myfile,$txt);
	fclose($myfile);*/
	
	
	/*$handle =fopen("data.txt","r");
	$text = "";
	while(!feof($handle)){
		$text.=fread($handle,3);//read 3 char at a time
	}
	echo $text."<br/>";
	fclose($handle);*/
	
	$handle =fopen("data.txt","r");
	$text = "";
	while(!feof($handle)){
		$text.=fread($handle,4); echo "<br>";//read 3 char at a time
	}
	echo $text."<br/>";
	fclose($handle);

	
?>