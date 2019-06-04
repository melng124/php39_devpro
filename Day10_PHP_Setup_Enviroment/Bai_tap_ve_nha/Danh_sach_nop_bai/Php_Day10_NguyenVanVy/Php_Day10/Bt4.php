<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{margin: 0;
        padding: 0;}
        table{
            border-collapse: collapse;
        }
        table tr td{

            border: 2px solid grey;
            text-align: center;
            padding: 0px 5px;
        }

    </style>
</head>

<body>
<table>
    <tr>
        <td><b>Họ tên</b></td>
        <td><b>Tuổi</b></td>
        <td><b>Ngày sinh</b></td>
        <td><b>Giới tính</b></td>
        <td><b>Quê quán</b></td>
    </tr>
    <tr>
        <td><?php echo ('Nguyễn Văn Vỹ')?></td>
        <td><?php echo ('23')?></td>
        <td><?php echo ('30/01/1997')?></td>
        <td><?php echo ('Nam')?></td>
        <td><?php echo ('Thái Bình')?></td>
    </tr>
</table>
</body>

</html>
