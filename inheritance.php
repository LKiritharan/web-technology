<?php 
	abstract class Shape
	{
		protected $color;
		protected $isFilled;
		
		public function __construct($col, $isFilled)
		{
			$this->color=$col;
			$this->isFilled=$isFilled;
		}
		
		abstract public function getArea();//if the getArea() is abstract then in child class getArea() method is compulsary as same as cannot make object for the parent class
 		public function setColor($col)
		{
			echo "<br> I am from Parent class";
			$this->color=$col;
		}
		public function getColor()
		{
			return $this->color;
		}
		public function isFilled()
		{
			return $this->isFilled;
		}
		public function makeHollow()
		{
			$this->isFilled=false;
		}
		public function fill()
		{
			$this->isFilled=true;
		}
	}	
	
	
	
	class Square extends Shape
	{
		private $length;
		public function __construct($col,$isFilled,$l)
		{
			parent::__construct($col,$isFilled);
			$this->length=$l;
		}
		/*public function setColor($col)
		{
			echo "<br> i am from  a Square child class";
		}*/
		public function steLength($len)
		{
			$this->length=$len;
		}
		public function getLength()
		{
			return $this->length;
		}
		public function getArea()
		{
			return pow($this->length);
		}
	}
	
	class Circle extends Shape
	{
		private $radious;
		public function getRadious()
		{
			return $this->radious;
		}
		public function setRadious($rad)
		{
			$this->radious=$rad;
		}
		public function getArea()
		{
			//return (3.14*$this->radious*$this->radious);
			return M_PI*pow($this->radious,2);
		}
	}
	$c1 = new Circle("white",true);
	$c1->setRadious(9);
	$shape1 = new shape("Red",true);
	print_r($shape1);
	echo "<br>".$shape1->getColor()."<br>";
	print_r($c1);
	echo "<br>";
	print($c1->getArea());
	$c2=new Square("Blue",false,10);
	$c2->setColor("Purple");
	echo "<br>";
	print_r($c2);
?>