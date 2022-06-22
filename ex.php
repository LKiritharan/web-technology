# web-technology
<?php 
	//echo "Hello world";
	#comment
	echo "<h2> PHP </h2><br>";
	/*$var1 =3;
	$var2 = 5;
	echo "$var1<br>";
	echo "$var1 "."$var2<br>";
	echo "".$var1+$var2."<br>";
	$var3=$var1+$var2;
	echo "$var3";*/
	
	$va1="web";
	$va2="Technology";
	
	echo "".$va1.$va2."<br>";
	
	print("<br>Print statement<br>");
	
	echo "print"," ","Statement<br><br>";
	
	define ("consta",23);
	print(consta);
	echo "<br>";
	$va3="4";
	echo gettype($va3);
	echo "<br>";
	/*settype($va3,"integer");
	echo gettype($va3);*/
	
	echo "<br>";
	$va3=(integer)$va3;
	$y=intval($va3);
	$c=strval($va3);
	echo is_int($va3);
	echo "<br>";
	echo "$c";
	
	echo "<br><br>";
	
	$marks= 89;
	$re ="";
	($marks>50) ? $re="pass" : $re= "fail";
	echo "$re";
	
	echo "<br><br>";
	$m1=43;
	($m1>50) ? $re ="passs" : $re ="fail";
	echo "$re";
	
	
	echo "<br>============================<br>";
	
	function sum($nu)
	{
		return 6 +$nu;
	}
	echo sum(34);
	echo "<br><br>";
	echo sum (-1);
	echo "<br>============================<br>";
	
	$title = "Mr ";
	function printName()
	{
		$fname = "Kumar";
		$lname = "varman";
		global $title;
		print ("$title $fname  $lname");
		
	}
	
	printName();
	echo "<br> <br>";
	
	echo "$title";
	echo "<br>============================<br>";
	
	$a =8 ;
	$b = 10;
	//$sum =0;
	function add(){
		global $b; 
		static $sum =0;
		$sum =$sum+$b;
		return $sum;
		//echo "$sum";
	}
	
	echo add(),"<br>";
	echo add(),"<br>";
	echo add();
	
	echo "<br>============================<br>";
	
	for ($i=1;$i<31;$i++)
	{
		static $evensum =0;
		static $oddsum = 0;
		if($i%2==0)
		{
			$evensum = $evensum +$i;
		}
		else 
			$oddsum = $oddsum+$i;
	}
	
	echo "evensum : ","$evensum <br>";
	echo "oddsum : ","$oddsum";
	
	echo "<br>============================<br><br>";
	
	for($i=1;$i<=50;$i++)
	{	
		if($i%3==0&&$i%5==0) 
		{
			echo "FizzBuzz<br>";
		}
		elseif($i%3==0)
		{
			echo  "Fizz<br>";
		}
		elseif($i%5==0)
		{
			echo "Buzz<br>";
		}
		else
		{
			echo "$i<br>";
		}
			
	}
	
	
?>
