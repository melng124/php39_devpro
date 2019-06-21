<?php 

	function tong($n){
		if($n < 0){
			echo "Không cho phép tính toán với số âm<br />";
		}
		if($n == 0){
			return 0;
		}
		$tong = 0;
		if($n > 0){
			for($i = 1;$i <=$n;$i++){
				if($i ==1){
					echo $n."*2";
				}
				else{
					$tong = $tong + pow($n, 2*$i);
					echo " + ".$n."*".$i*2;
				}
			}
			echo " = ".$tong."<br />";
		}
	}


	echo "n = -3<br />";
	tong(-3);

	echo "n = 0<br />";
	tong(0);

	echo "n = 4<br />";
	tong(4);

	echo "n = 10<br />";
	tong(10);

	echo "n = 120<br />";
	tong(120);




 ?>