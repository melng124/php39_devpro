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

	function ptBachai($a,$b,$c){

		if ($a == 0){
			ptBacnhat($b,$c);
		}else {
			$delta = $b*$b - 4*$a*$c;
			if($delta < 0){
				echo "Phương trình bậc hai vô nghiệm <br />";
			}else if($delta == 0){
				$x = -$b/(2*a);
				echo "Phương trình có nghiệm kép x<sub>1</sub> = x<sub>2</sub> = ".$x."<br />";
			}else{
				$x1 = (-$b + sqrt($delta))/(2*$a);
				$x2 = (-$b - sqrt($delta))/(2*$a);
				echo "Phương trình có 2 nghiệm x<sub>1</sub> = ".$x1.", x<sub>2</sub>".$x2."<br />";

			}
		}

	}
	echo "Giải phương trình bậc 2 dạng ax<sup>2</sup> + bx + c = 0";

	echo "<p>a = 0, b = 0, c = 2</p><br />";
	ptBachai(0,0,2);
	echo "<p>a = 2, b = 4, c = -6</p><br />";
	ptBachai(2,4,-6);
	echo "<p>a = 0, b = 5, c = 5</p><br />";
	ptBachai(0,5,5);
	echo "<p>a = 5, b = 0, c = 5</p><br />";
	ptBachai(5,0,5);



 ?>