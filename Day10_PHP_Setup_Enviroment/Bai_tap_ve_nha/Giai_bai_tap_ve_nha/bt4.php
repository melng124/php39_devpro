<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>BT4</title>
</head>
<body>
<?php
$name = 'Nguyễn Viết Mạnh';
$age = 29;
$birthDay = '05/01/1990';
$sex = 'Nam';
$address = 'Sơn Đồng - Hoài Đức - Hà Nội';
?>
<table border="1" cellpadding="4" cellspacing="0">
    <thead>
        <tr>
            <th>Họ tên</th>
            <th>Tuổi</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $name?></td>
            <td><?php echo $age?></td>
            <td><?php echo $birthDay?></td>
            <td><?php echo $sex?></td>
            <td><?php echo $address?></td>
        </tr>
    </tbody>
</table>
</body>
</html>