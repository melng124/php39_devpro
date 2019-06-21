<?php 

	function giaithua($var){
		if($var < 0){
			echo "Không cho phép tính giai thừa trên số âm!<br />";
			
		}
		if($var == 0){
				echo "0! = 1 <br />";
			}
		if($var == 1){
				echo "1! = 1 <br />";
			}
		if($var > 1){
					$j = 1;
					echo $var."! = 1";
					for ($i = 1;$i <=$var;$i++){
						$j = $j*$i;
						echo " x ".$i;
					}
					echo  " = ".$j."<br />";
				}
	}
		
	
	giaithua(-5);
	giaithua(0);
	giaithua(5);
	giaithua(8);




 ?>