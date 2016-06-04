<?php
//Big O notation test

// Finding the lowest number in an array of numbers.


Class BigOnotation {


	public function getMinNums($arrayofnums)
	{
		$curmin = $arrayofnums[0];

		for($x=1; $x <10; $x++)
		{
			if($arrayofnums[$x] < $curmin)
			{
				$curmin = $arrayofnums[$x];
			}
		}
		return $curmin;
	}

}



$bigo = new BigOnotation();

$arraynums = [23,34,8,4,90,67,73,28,39,28,7,5,83];

$min_nums = $bigo->getMinNums($arraynums);

echo "The lowest number in the array is: ".$min_nums;




?>