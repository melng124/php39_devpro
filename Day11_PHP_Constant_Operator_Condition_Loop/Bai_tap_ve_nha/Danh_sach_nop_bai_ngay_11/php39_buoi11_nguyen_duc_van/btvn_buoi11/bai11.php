<!DOCTYPE html>
<html>
<head>
	<title>bai11</title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		table{
			border: 1px solid black;
			border-collapse: collapse;
		}
		td{
			width: 10px;
			height: 10px;
			margin: -1px;
			border: 1px solid black;
		}
		.trang{
			background-color: white;
		}
		.den{
			background-color: black;
		}
	</style>
	<div>
		<table>
			<?php 

				for($i=1;$i<=8;$i++){
					echo "<tr>";
					for ($j=1;$j<=8;$j++){
						if(($i + $j)%2==1){
							echo "<td class=\"trang\"></td>";
						}else echo "<td class=\"den\"></td>";
					}
				}

			 ?>
		</table>
	</div>
</body>
</html>