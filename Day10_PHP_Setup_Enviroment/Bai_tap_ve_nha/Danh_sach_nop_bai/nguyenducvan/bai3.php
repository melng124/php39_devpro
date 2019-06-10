<?php 

	$variable1 = '123abc';
	$variable2 = null;
	$variable3 ='';
	$variable4 = 'abc123';
	$variable5 = 'null';


	$bien11 = (int)$variable1;
	echo "Biến \$variable1 sau khi ép sang int có giá trị = 123."." thuc te ".$bien11."<br />";
	$bien12 = (float)$variable1;
	echo "Biến \$variable1 sau khi ép sang float có giá trị = 123."." thuc te ".$bien12."<br />";
	$bien13 = (string)$variable1;
	echo "Biến \$variable1 sau khi ép sang string có giá trị = 123abc."." thuc te ".$bien13."<br />";
	$bien14 = (boolean)$variable1;
	echo "Biến \$variable1 sau khi ép sang boolean có giá trị = 1."." thuc te ".$bien14."<br /><br />";

	$bien21 = (int)$variable2;
	echo "Biến \$variable2 sau khi ép sang int có giá trị = 0."." thuc te ".$bien21."<br />";
	$bien22 = (float)$variable2;
	echo "Biến \$variable2 sau khi ép sang float có giá trị = 0."." thuc te ".$bien22."<br />";
	$bien23 = (string)$variable2;
	echo "Biến \$variable2 sau khi ép sang string có giá trị = ."." thuc te ".$bien23."<br />";
	$bien24 = (boolean)$variable2;
	echo "Biến \$variable2 sau khi ép sang boolean có giá trị = ."." thuc te ".$bien24."<br /><br />";

	$bien31 = (int)$variable3;
	echo "Biến \$variable3 sau khi ép sang int có giá trị = 0."." thuc te ".$bien31."<br />";
	$bien32 = (float)$variable3;
	echo "Biến \$variable3 sau khi ép sang float có giá trị = 0."." thuc te ".$bien32."<br />";
	$bien33 = (string)$variable3;
	echo "Biến \$variable3 sau khi ép sang string có giá trị = ."." thuc te ".$bien33."<br />";
	$bien34 = (boolean)$variable3;
	echo "Biến \$variable3 sau khi ép sang boolean có giá trị = ."." thuc te ".$bien34."<br /><br />";

	$bien41 = (int)$variable4;
	echo "Biến \$variable4 sau khi ép sang int có giá trị = 0."." thuc te ".$bien41."<br />";
	$bien42 = (float)$variable4;
	echo "Biến \$variable4 sau khi ép sang float có giá trị = 0."." thuc te ".$bien42."<br />";
	$bien43 = (string)$variable4;
	echo "Biến \$variable4 sau khi ép sang string có giá trị = abc123."." thuc te ".$bien43."<br />";
	$bien44 = (boolean)$variable4;
	echo "Biến \$variable4 sau khi ép sang boolean có giá trị = 1."." thuc te ".$bien44."<br /><br />";

	$bien51 = (int)$variable5;
	echo "Biến \$variable5 sau khi ép sang int có giá trị = 0."." thuc te ".$bien51."<br />";
	$bien52 = (float)$variable5;
	echo "Biến \$variable5 sau khi ép sang float có giá trị = 0."." thuc te ".$bien52."<br />";
	$bien53 = (string)$variable5;
	echo "Biến \$variable5 sau khi ép sang string có giá trị = null."." thuc te ".$bien53."<br />";
	$bien54 = (boolean)$variable5;
	echo "Biến \$variable5 sau khi ép sang boolean có giá trị = 1."." thuc te ".$bien54."<br />";




 ?>