<!DOCTYPE html>
<html>
<head>
	<title>Bài 5</title>
</head>
<body>
	<b>
		<?php 
			$n = 10;
			$S = 0;
			for ($i = 1; $i <= $n; $i++){
			    $S += 1/$i;

			}
			echo "Khởi tạo giá trị = $n";
			echo "<br/>";
			echo "Tổng S(n) = " . $S;
			
		?>
</b>
</body>
</html>