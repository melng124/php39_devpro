<?php 
	$n = 20;
	$x = 2;
	$lt = 0;
	$tong = 0;
	for ($i=1; $i <= $n ; $i++) { 
			if ($i !=2) {
			$lt= $x*$i;	
		}
		$tong += $lt;			
	}
	echo "Tong là: $tong";
 ?>	