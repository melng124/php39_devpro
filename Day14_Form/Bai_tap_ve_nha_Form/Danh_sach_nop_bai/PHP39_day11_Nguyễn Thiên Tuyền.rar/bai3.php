<!DOCTYPE html>
<html>
<head>
	<title>Bài 3</title>
</head>
<body>
	<b>
<?php 
    $duong_kinh = 6;
    $ban_kinh = $duong_kinh /2;
    $PI = 3.14;
    $chu_vi= 2 * $PI * $ban_kinh;
    $dien_tich= $PI * pow($ban_kinh,2);
    echo "Đường kính hình tròn = " . ($duong_kinh) . "m";
    echo '<br />';
    echo "Chu vi hình tròn = " . ($chu_vi) . "m";
    echo '<br />';
    echo "Diện tích hình tròn = " . ($dien_tich) . "m2";
    echo '<br />';
 ?>
 </b>
</body>
</html>