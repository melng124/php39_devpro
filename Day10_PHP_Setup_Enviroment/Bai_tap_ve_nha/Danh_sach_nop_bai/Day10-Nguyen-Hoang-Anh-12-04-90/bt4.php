<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai Tap 4</title>
</head>
<body>
    <h1>Thông tin căn bản về bạn:</h1>
    <table border="2px solid black" style="border-collapse: collapse">
        <tr>
            <th>Họ và Tên</th>
            <th>Tuổi</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
        </tr>
        <tr>
            <td>
                <?php
                $name = 'Nguyễn Hoàng Anh';
                echo $name;
                ?>
            </td>
            <td>
                <?php
                $age = 29;
                echo $age;
                ?>
            </td>
            <td>
                <?php
                $dob = '12/04/1990';
                echo $dob;
                ?>
            </td>
            <td>
                <?php
                $gender = 'Nam';
                echo $gender;
                ?>
            </td>
            <td>
                <?php
                $country = 'Hà Nội - Việt Nam';
                echo $country;
                ?>
            </td>
        </tr>
    </table>
</body>
</html>