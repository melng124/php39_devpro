<?php 
	$n = 20;
	$tong = (float)0;
	for($i=1;$i<=$n;$i++){
		$tong = $tong + 1/$i;
	}
	echo "S(n) = ".$tong;

 ?>