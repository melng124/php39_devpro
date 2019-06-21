<?php 

	function cv_dt_hinhtron($var){
		if($var < 0){
			echo "<b>Không cho phép tính toán với số âm</b><br />";
		}
		else if($var == 0){
			echo "<b>Chu vi = 0; Diện tích = 0</b><br />";
		}
		else{
			$cv = $var*3.14;
			$dt = 3.14*$var*$var/4;
			echo "<b>Chu vi hình tròn = ".$cv.",</b> ";
			echo "<b>Diện tích hình tròn = ".$dt."</b> <br />";

		}
	}
	echo "Đường kính hình tròn = -3 <br />";
	cv_dt_hinhtron(-3);
	echo "Đường kính hình tròn = 0<br />";
	cv_dt_hinhtron(0);
	echo "Đường kính hình tròn = 5<br />";
	cv_dt_hinhtron(5);
	echo "Đường kính hình tròn = 7.5<br />";
	cv_dt_hinhtron(7.5);
	echo "Đường kính hình tròn = 100<br />";
	cv_dt_hinhtron(100);

 ?>