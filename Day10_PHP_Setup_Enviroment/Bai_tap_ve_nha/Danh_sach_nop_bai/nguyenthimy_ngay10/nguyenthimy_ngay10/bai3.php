<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai4</title>
</head>
<body>
    <form>
        <table border="1" cellpadding="6" cellspacing="0">
            <thead>
            <tr>
                <th>Họ Và Tên</th>
                <th>Tuổi</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Quê quán</th>
            </tr>
            <tr>
                <td>
                    <?php
                    $hoten = 'Nguyễn Thị Mỹ';
                    echo $hoten;
                    ?>
                </td>
                <td>
                    <?php
                    $tuoi = '22';
                    echo $tuoi;
                    ?>
                </td>
                <td>
                    <?php
                    $ngaysinh = '18/02/1997';
                    echo $ngaysinh;
                    ?>
                </td>
                <td>
                    <?php
                    $gioitinh = 'Nữ';
                    echo $gioitinh;
                    ?>
                </td>
                <td>
                    <?php
                    $quequan = 'Mão Điền, Thuận Thành, Bắc Ninh';
                    echo $quequan;
                    ?>
                </td>
            </tr>
            </thead>
        </table>
    </form>
</body>
</html>