<!DOCTYPE html>
<html>
<head>
	<title>ex3</title>
	<meta charset="utf-8">
	<style type="text/css">
		table{
			border: 1px solid black;			
			border-collapse: collapse;
		}
		td{
			border: 1px solid black;
			width: 30px; 
			height: 30px;
			margin: -1px;
			text-align: center;
		}
		.xanh{
			background-color: #99d448;
		}
		.trang{
			background-color: white;
		}
	</style>
</head>
<body>
	<?php 

	function isPrime($number){
		if($number >=1 && $number <=2){
			return true;
		}
		for($i = 2; $i<=sqrt($number); $i++){
			if($number % $i == 0){
				return false;
			}
		}
		return true;
	}

 ?>
	<div>
		<table>
			<?php   
				for($i=1;$i<=10;$i++){
					echo "<tr>";
					for($j=1;$j<=10;$j++){
						$number = ($i-1)*10 + $j;
						if($number == 1){
							echo "<td class=\"trang\">".$number."</td>";
						}else if(isPrime($number)){
							echo "<td class=\"xanh\">".$number."</td>";
						}else{
							echo "<td class=\"trang\">".$number."</td>";
						}
					}

					echo "</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>

