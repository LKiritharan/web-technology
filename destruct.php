<?php 
   class Fruit
   {
	   public $name;
	   public $color;
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	   function __destruct()
	   {
		   echo "The fruit is {$this->name}.";
	   }
	   function message()
	   {
		   echo "I am fruit class<br>";
	   }
   }
   $apple =new Fruit("Apple");
   $apple->message();
?>