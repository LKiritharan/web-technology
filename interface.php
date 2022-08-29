<?php

    interface Sellable{
		public function addStock($num);
		public function sellItem($num);
		public function getStockCount();
		
	} 
	class Television implements Sellable
	{
		private $Screensize;
		private $Stockcount;
		
		public function getScreensize()
		{
			return $this->Screensize;
		}
		public function  setScreensize($Screensize)
		{
			$this->Screensize=$Screensize;
		}
		public function addStock($num)
		{
			$this->Stockcount+=$num;
		}
		public function sellItem($num)
		{
			$this->Stockcount-=$num;
		}
		public function getStockCount()
		{
			return $this->Stockcount;
		}
	}
	
	class Tenisball
	{
		private $Count;
		private $Color;
		
		public function setColor($col)
		{
			$this->Color=$col;
		}
		public function getColor()
		{
			return $this->Color;
		}
	} 
	
	$tv1 = new Television();
	$tv1->setScreensize("14");
	$tv1->addStock(50);
	print($tv1->getStockCount());
	echo "<br>";
	$tv1->sellItem(5);
	print($tv1->getStockCount());
	
?>