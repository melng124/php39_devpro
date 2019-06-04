<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Bài 1</title>
</head>
<body>
<?php
	$variable1 = '1.23';
	$variable2 = 28;
	$variable3 = 'null';
	$variable4 = [123, false, null, 1.23, FALSE, [], TRUE];
	$variable5 = (float)-123;
	$variable6 = 'false';
	$variable7 = 'php39';
	echo 'Biến $variable1 có kiểu dữ liệu là: ' . gettype($variable1) . '<br />';
	echo 'Biến $variable2 có kiểu dữ liệu là: ' . gettype($variable2) . '<br />';
	echo 'Biến $variable3 có kiểu dữ liệu là: ' . gettype($variable3) . '<br />';
	echo 'Biến $variable4 có kiểu dữ liệu là: ' . gettype($variable4) . '<br />';
	echo 'Biến $variable5 có kiểu dữ liệu là: ' . gettype($variable5) . '<br />';
	echo 'Biến $variable6 có kiểu dữ liệu là: ' . gettype($variable6) . '<br />';
	echo 'Biến $variable7 có kiểu dữ liệu là: ' . gettype($variable7) . '<br />';
?>
</body>
</html>

