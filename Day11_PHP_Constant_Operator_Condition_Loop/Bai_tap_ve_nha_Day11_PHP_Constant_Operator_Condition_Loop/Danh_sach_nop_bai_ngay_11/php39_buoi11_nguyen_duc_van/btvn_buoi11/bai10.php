<!DOCTYPE html>
<html>
<head>
	<title>bai10</title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		table, td{
			border: 1px solid black;			
		}
		.td{
			background-color: #ccfeff;
		}
	</style>
	<table>
		<tr>
			<td class="td">1</td>
			<td class="td">2</td>
			<td class="td">3</td>
			<td class="td">4</td>
			<td class="td">5</td>
		</tr>
		<tr>
			<td><?php for ($i1=1;$i1<=10;$i1++){ echo $i1."x1 = ".$i1*1; echo "<br />";}?></td>
			<td><?php for ($i2=1;$i2<=10;$i2++){ echo $i2."x2 = ".$i2*2; echo "<br />";}?></td>
			<td><?php for ($i3=1;$i3<=10;$i3++){ echo $i3."x3 = ".$i3*3; echo "<br />";}?></td>
			<td><?php for ($i4=1;$i4<=10;$i4++){ echo $i4."x4 = ".$i4*4; echo "<br />";}?></td>
			<td><?php for ($i5=1;$i5<=10;$i5++){ echo $i5."x5 = ".$i5*5; echo "<br />";}?></td>
		</tr>
		<tr>
			<td class="td">6</td>
			<td class="td">7</td>
			<td class="td">8</td>
			<td class="td">9</td>
			<td class="td">10</td>
		</tr>
		<tr>
			<td><?php for ($i6=1;$i6<=10;$i6++){ echo $i6."x6 = ".$i6*6; echo "<br />";}?></td>
			<td><?php for ($i7=1;$i7<=10;$i7++){ echo $i7."x7 = ".$i7*7; echo "<br />";}?></td>
			<td><?php for ($i8=1;$i8<=10;$i8++){ echo $i8."x8 = ".$i8*8; echo "<br />";}?></td>
			<td><?php for ($i9=1;$i9<=10;$i9++){ echo $i9."x9 = ".$i9*9; echo "<br />";}?></td>
			<td><?php for ($i10=1;$i10<=10;$i10++){ echo $i10."x10 = ".$i10*10; echo "<br />";}?></td>
		</tr>
	</table>
</body>
</html>
