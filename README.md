# web-technology
<?php 
 $temp = array(1,5,3,4,6,9,10,7,8,2);
 print_r($temp);
 #print($temp.length());
 function findAvarage($arr){
	 $sum=0;
	 $arrlength = count($arr);
	 for($i=0;$i<$arrlength;$i++)
	 {
		 $sum =$sum +$arr[$i];
	 }
	
	echo "<br> Avarage is ",$sum/$arrlength;
 }
 findAvarage($temp);
 function lower($arr,$num){
	 $arrlength = count($arr);
	 $a ;
	 $b ;
	 sort($arr);
	 print_r($arr);
	 echo "<br>";
	// $arr1 = array_slice($arr,0,$num);
	// print_r($arr1);
	 
	for($i=0;$i<$num;$i++)
	 {
		 echo $arr[$i]," ," ;
	 }
	/* for($i=0;$i<$arrlength;$i++){
		 if($arr[i]<$arr[i+1])
		 {
			 $tem = $arr[i];
			 $arr[i] = $arr[i+1];
			 $arr[i+1] = $tem;
		 }
		
	 }
	 print_r($arr);
	 for($i=0;$i<$num;$i++)
	 {
		 echo  $arr[$i]," , ";
	 }*/
	
 }
 lower($temp,2);
 
 function Higher($arr,$num)
 {
	ssort($arr);
	$arrlength = count($arr);
	
	//$arr1 =array_slice($arr,$arrlength - $num,$arrlength);
	//print_r($arr1);
	for($i=$arrlength;$i>=$arrlength- $num;$i--)
	 {
		echo $arr[$i]," ," ;
	 }
 }
 
 Higher($temp,5);
 
 //2022.06.29
 <?php

$temp = array(4,5,6,7,8,9);
echo current($temp),"<br>";
echo key($temp),"<br>";
echo next($temp),"<br>";
echo key($temp),"<br>";
echo end($temp),"<br>";
reset($temp);

echo  "<br>----------------------------------------------------------------------------------------------------------------<br>";
$mul = array(array("a"=> "apple","b" => "bag"), array("a"=>"ant","b"=>"ball"),array("a"=>"aim"));
print_r($mul);
echo  "<br>----------------------------------------------------------------------------------------------------------------<br>";
echo "time is".date("y/m/d")."<br>";
echo "time is".date("y-m-d")."<br>";
echo "time is".date("y.m.d")."<br>";
echo "time is".date("/")."<br>";
echo  "<br>----------------------------------------------------------------------------------------------------------------<br>";
?><form method ="_post">
	fname : <input type ="text"  name ="fname">
	lname : <input type ="text"  name ="lname">
	<input type ="submit" 
</form>

 ?>
