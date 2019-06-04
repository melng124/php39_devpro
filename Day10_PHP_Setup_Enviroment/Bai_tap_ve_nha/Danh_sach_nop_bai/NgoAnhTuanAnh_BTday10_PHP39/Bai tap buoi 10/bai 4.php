<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai 2</title>
</head>
<body>
<form method="post" name="form1" action="">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td>Họ tên</td>
            <td>Tuổi</td>
            <td>Ngày sinh</td>
            <td>Giới tính</td>
            <td>Quê quán</td>
        </tr>
        <tr>
            <td>Ngô Anh Tuấn Anh</td>
            <td>21</td>
            <td>19/07/1998</td>
            <td>Nam</td>
            <td>Phúc yên - Vĩnh phúc</td>
        </tr>
    </table>
</form>
<?php
$name = "Ngô Anh Tuấn Anh";
$age = 21;
$date = "19/07/1998";
$gender = "Nam";
$address = "Phúc Yên - Vĩnh Phúc";
echo "Tên của bạn là: ".$name."<br>";
echo "Tuổi bạn là: ".$age."<br>";
echo "ngày sinh của bạn là: ".$date."<br>";
echo "Giới tính của bạn là: ".$gender."<br>";
echo "quê quán của bạn là: ".$address."<br>";
?>
</body>
</html>