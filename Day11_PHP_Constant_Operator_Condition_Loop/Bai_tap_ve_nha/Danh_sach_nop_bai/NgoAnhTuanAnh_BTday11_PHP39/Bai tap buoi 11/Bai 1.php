<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai 1</title>
</head>
<body>
<p>Bai 1</p>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/6/2019
 * Time: 11:45 AM
 */
$chieu_dai = 10;
$chieu_rong = 5;
$chuvi = ($chieu_dai + $chieu_rong)*2;
$dientich = $chieu_dai * $chieu_rong;
echo "chiều dài hình chữ nhật là: ".$chieu_dai."m"."<br>";
echo "chiều rộng hình chữ nhật là: ".$chieu_rong."m"."<br>";
echo "Diện tích hình chữ nhật là: ".$dientich."m<sup>2</sup><br>";
echo "Chu vi hình chữ nhật là: ".$chuvi."m";
?>

<p>Bai 2</p>
<?php
$canh = 12;
$chuvi_hv = $canh*4;
$dientich_hv = $canh*$canh;
echo "Cạnh hình vuông = ".$canh."<br>";
echo "chu vi hình vuông = ".$chuvi_hv."m<br>";
echo "Diện tích hình vuông = ".$dientich_hv."m<sup>2</sup><br>";
?>

<p>Bai 3</p>
<?php
$duong_kinh = 6;
$ban_kinh = $duong_kinh/2;
$cv_htron = $ban_kinh * 2 * 3.14;
$dt_htron = $ban_kinh * $ban_kinh * 3.14;
echo "Đường kính hình tròn bằng: ".$duong_kinh."cm<br>";
echo "Chu vi hình tròn là: ".$cv_htron."cm<br>";
echo "Diện tích hình tròn là: ".$dt_htron."cm<sup>2</sup><br>";
?>
</body>
</html>
