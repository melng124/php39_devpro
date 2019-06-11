<?php 
	$n = 20;
	$x = 1.2;
	$tong = (float)0;
	for($i=1;$i<=$n;$i++){
		$tong = $tong + $x*$i*2;
	}
	echo "S(n) = ".$tong;

 ?>