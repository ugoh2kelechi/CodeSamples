<?php

Class Sumofproducts{


	public function sumall($arrayitems)
	{
		$sum = 0;
		$products = 1;

		for($i = 0; $i < count($arrayitems); $i++)
		{
			$sum += $arrayitems[$i];
		}

		for($i=0; $i < count($arrayitems); $i++)
		{
			$products *= $arrayitems[$i];
		}

		return "The Sum is: ".$sum." And the product is: ".$products;

	}



}


$sump = new Sumofproducts();

$items = [6,3,4,1,9,2,20,50];

$result = $sump->sumall($items);

echo $result;


?>