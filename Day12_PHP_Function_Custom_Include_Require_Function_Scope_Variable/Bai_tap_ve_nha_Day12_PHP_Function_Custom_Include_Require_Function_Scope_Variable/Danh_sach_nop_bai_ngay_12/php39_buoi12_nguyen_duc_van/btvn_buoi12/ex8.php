<?php 
	
	function Tong($n){
		if($n < 0){
			echo "Không cho phép tính toán với số âm. <br />";
		}
		if($n == 0){
			echo "Giá trị không tồn tại<br />";
		}
		if($n > 0){
			$tong = 0;
			echo "S(".$n.") = ";
			for($i = 1;$i <= $n;$i++){
				if($i == 1){
					echo "1 ";
				}else{
					echo "+ 1/".$i;
					$tong = $tong + 1/$i;
				}
			}
			echo " = ".$tong. "<br ?>";
			
		}
	}
	
	echo "n = -3 <br />";
	Tong(-3);

	echo "n = 0 <br />";
	Tong(0);

	echo "n = 4 <br />";
	Tong(4);

	echo "n = 10 <br />";
	Tong(10);

	echo "n = 120 <br />";
	Tong(120);

 ?>