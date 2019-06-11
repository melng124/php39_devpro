<?php 
	

	function ptBacnhat($a,$b){
		if($a == 0 && $b == 0){
			echo "Phương trình có vô số nghiệm <br />";
		}else if($a == 0 && $b != 0){
			echo "Phương trình vô nghiệm <br />";
		}else {
			$c = $b/$a;
			echo "Phương trình có nghiệm là x = ".$c."<br />";
		}
	}

	echo "Giải phương trình bậc nhất có dạng ax + b = 0<br />";
	echo "a = 0, b = 5 .";ptBacnhat(0,5);
	echo "a = 2, b = -2 .";ptBacnhat(2,-2);
	echo "a = 0, b = 0 .";ptBacnhat(0,0);


 ?>