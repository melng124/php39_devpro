<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 4</title>

</head>
<body>
<?php
$name = "Đặng Thọ Bình";
$age = 22;
$birth = "6/2/1997";
$gender = "Nam";
$adress = "Hoàng Mai - Hà Nội";
?>
<table align="center"; cellpadding="10"; border="1px"; cellspacing="0px" style="text-align: center">
    <tr >
        <td>Họ tên</td>
        <td>Tuổi</td>
        <td>Ngày sinh</td>
        <td>Giới tính</td>
        <td>Quê quán</td>
    </tr>
    <tr>
        <td><?php echo($name)?></td>
        <td><?php echo($age)?></td>
        <td><?php echo($birth)?></td>
        <td><?php echo($gender)?></td>
        <td><?php echo($adress)?></td>

    </tr>
</table>

</body>
</html>