<!DOCTYPE html>
<html>
<head>
	<title>bai4</title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		table,td{
			text-align: : center;
			border: 1px solid black;
		}		
	</style>
	<?php 

		$hoten = "Nguyễn viết mạnh";
		$tuoi = 29;
		$ngaysinh = "05/01/1990";
		$gioitinh = "Nam";
		$quequan = "Sơn Đồng - Hoài Đức - Hà Nội ";

		echo "<table>";
		echo "<tr>";
		echo "<td>Họ tên</td>";
		echo "<td>Tuổi</td>";
		echo "<td>Năm sinh</td>";
		echo "<td>Giới tính</td>";
		echo "<td>Quê quán</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$hoten."</td>";
		echo "<td>".$tuoi."</td>";
		echo "<td>".$ngaysinh."</td>";
		echo "<td>".$gioitinh."</td>";
		echo "<td>".$quequan."</td>";
		echo "</tr>";
		echo "</table>";

	 ?>
</body>
</html>






