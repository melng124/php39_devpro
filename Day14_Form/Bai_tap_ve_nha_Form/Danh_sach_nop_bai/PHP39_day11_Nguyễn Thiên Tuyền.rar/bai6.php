<!DOCTYPE html>
<html>
<head>
	<title>Bài 6</title>
</head>
<body>
<b>
	<?php
	$n = 15;
	$x = 1;
	$y = 0;
	$m = 2*$n;
	echo "Khởi tạo giá trị x = $x";echo '<br/>';
	echo "Khởi tạo giá trị n = $n"; echo '<br/>';
	echo 'S(n) = x*2 + x*4 + ⋯ + x*2n =  ';
	for ($i = 1; $i <$n; $i++){
	    $a = 2*$i;
	    echo $x.'*'.$a.' + ';
	    $y += $x*$a;
	}
	echo $x.'*'.$m;
	$y1 = $y + $x*2*$n;
	echo " = $y1";
?>
</b>
</body>
</html>