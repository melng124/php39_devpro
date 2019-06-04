<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bài 4</title>
</head>
<body>
    <?php
    $hoten = "Nguyễn Thiên Tuyền";
    $tuoi = 23;
    $ngaysinh = "7/11/1996";
    $gioitinh = "Nam";
    $quequan = "Minh Đức - Tứ Kỳ - Hải Dương";
    ?>
<table cellpadding="0"; border="1"; cellspacing="0" 
        style="text-align: center;" ; width="700px"; />
    <tr >
        <td>Họ tên</td>
        <td>Tuổi</td>
        <td>Ngày sinh</td>
        <td>Giới tính</td>
        <td>Quê quán</td>
    </tr>
    <tr>
        <td><?php echo $hoten ?></td>
        <td><?php echo $tuoi ?></td>
        <td><?php echo $ngaysinh ?></td>
        <td><?php echo $gioitinh ?></td>
        <td><?php echo $quequan ?></td>
    </tr>
</table>
</body>
</html>