<html>
<head>
    <meta charset="utf-8"/>
    <title>Bai4</title>
</head>
<body>
<?php
$name = 'Bùi Minh Tuấn';
$age = 23;
$ngaysinh = '25/09/1996';
$gioitinh = 'Nam';
$address = 'Tả Thanh Oai - Thanh Trì - Hà Nội';
?>
<table border="1" cellpadding="4" cellspacing="0" align="center">
    <thead>
    <tr style="background: #ffc019">
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
        <td><?php echo $ngaysinh?></td>
        <td><?php echo $gioitinh?></td>
        <td><?php echo $address?></td>
    </tr>
    </tbody>
</table>
</body>
</html>