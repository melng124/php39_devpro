<?php 

	function gtnn2so($a,$b){
		if($a <= $b){
			return $a;
		}else{
			return $b;
		}
	}
	function gtln2so($a,$b){
		if($a <= $b){
			return $b;
		}else{
			return $a;
		}
	}


	function gtnn4so($a,$b,$c,$d){
		$min1 = gtnn2so($a,$b);
		$min2 = gtnn2so($c,$d);
		$minNumber = gtnn2so($min1,$min2);
		echo ", Min = ".$minNumber."<br />";
	}
	function gtln4so($a,$b,$c,$d){
		$max1 = gtln2so($a,$b);
		$max2 = gtln2so($c,$d);
		$maxNumber = gtln2so($max1,$max2);
		echo "Max = ".$maxNumber;

	}

	echo "a = 0, b = 0, c = 2, d = 6<br />";
	gtln4so(0,0,2,6);
	gtnn4so(0,0,2,6);	

	echo "a = 2, b = 4, c = -6, d = -10<br />";
	gtln4so(2,4,-6,-10);
	gtnn4so(2,4,-6,-10);

	echo "a = 0, b = 5, c = 5, d = 2<br />";
	gtln4so(0,5,5,2);
	gtnn4so(0,5,5,2);
	
	echo "a = 5, b = 0, c = 5, d = 4<br />";
	gtln4so(5,0,5,4);
	gtnn4so(5,0,5,4);

 ?>