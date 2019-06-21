<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		table{
			border: 1px solid black;
			border-collapse: collapse;
		}
		td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php $arrs = ['PHP', 'HTML', 'CSS', 'JS']; ?>
	<table>		
		<tr><td style="font-weight: bold;">Tên khóa học</td></tr>
		<tr><td><?php echo $arrs[0]; ?></td></tr>
		<tr><td><?php echo $arrs[1]; ?></td></tr>
		<tr><td><?php echo $arrs[2]; ?></td></tr>
		<tr><td><?php echo $arrs[3]; ?></td></tr>

	</table>
</body>
</html>