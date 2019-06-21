<?php 

	$variable1 = "1.23";
	$variable2 = 28;
	$variable3 = "null";
	$variable4 = array(123, FALSE, "null", 1.23, FALSE, [], TRUE,);
	$variable5 = (float)-123;
	$variable6 = "false";
	$variable7 = "php39";

	echo $variable1 ."<br />".$variable2."<br />".$variable3."<br />";
	echo "\$variable4 = ";
	for($i=0;$i<7;$i++){
	 	var_dump($variable4[$i]);
	}

	echo "<br />".$variable5 ."<br />" .$variable6 ."<br />" .$variable7 ."<br />";



 ?>