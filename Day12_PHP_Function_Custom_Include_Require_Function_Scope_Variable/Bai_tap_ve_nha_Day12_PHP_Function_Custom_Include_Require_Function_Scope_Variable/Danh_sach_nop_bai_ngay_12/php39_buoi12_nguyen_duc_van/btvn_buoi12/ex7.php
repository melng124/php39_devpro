<?php 

	function hienthi($n){
		if($n < 0){
			echo "Không thể hiển thị các ký tự * với số âm. <br />";
		}
		if($n == 0){
			echo "<br />";
		}
		if($n > 0){
			for($i = 1;$i <= $n;$i++){
				for($j = 1;$j <= $i;$j++){
					echo "*";
				}
				echo "<br />";
			}
			echo "<br />";
		}
	}

	echo "n = -3 <br />"; hienthi(-3);

	echo "n = 0 <br />"; hienthi(0);

	echo "n = 2 <br />"; hienthi(2);

	echo "n = 5 <br />"; hienthi(5);

	echo "n = 10 <br />"; hienthi(10);

 ?>