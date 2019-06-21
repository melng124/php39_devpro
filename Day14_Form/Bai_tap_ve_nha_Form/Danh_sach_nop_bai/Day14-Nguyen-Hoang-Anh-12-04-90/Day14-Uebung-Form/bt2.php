<!--2.	Tạo form như hình sau, với các yêu cầu validate:
•	Tất cả các trường không được để trống
•	Trường display name không được vượt quá 24 ký tự
•	Trường email phải có định dạng email
Sau khi xử lý xong validate, hãy hiển thị tất cả các thông tin mà user vừa nhập, có dạng sau:
Username: <giá-trị>
    Password: <giá-trị>
        User type: <giá-trị>
            Display name: <giá-trị>
                Address: <giá-trị>
                    Email: <giá-trị>
                        Gender: <giá-trị>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-2.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<form action="" method="post">
    <table border="2px solid #ffffff">
        <tr>
            <th colspan="2">Registration Form</th>
        </tr>
        <tr>
            <td><label for="userName">User Name</label></td>
            <td><input type="text" name="userName" id="userName"
                       value="<?php echo isset($_POST['userName']) ? $_POST['userName'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td><label for="pass">Password</label></td>
            <td><input type="password" name="pass" id="pass"
                       value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>"></td>
        </tr>
        <tr>
            <td><label for="type">User Type</label></td>
            <td><select name="type" id="type">
                    <option value="1">--Select--</option>
                    <option value="2">--Select2--</option>
                    <option value="3">--Select3--</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="display">Display Name</label></td>
            <td><input type="text" name="display" id="display"
                       value="<?php echo isset($_POST['display']) ? $_POST['display'] : '' ?>"></td>
        </tr>
        <tr>
            <td><label for="address">Address</label></td>
            <td><textarea type="text" name="address" id="address" value="" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" name="email" id="email"
                       value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td>
                <input type="radio" name="gender" id="gender" value="1"> Male
                <input type="radio" name="gender" id="gender" value="2"> Female
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="checkbox" name="checkbox[]" value="1">
                I accept Terms and Conditions
            </td>
        </tr>
        <tr>
            <td colspan="2" id="submit">
                <input type="submit" name="submit-form" value="Submit">
            </td>
        </tr>
    </table>
    <div id="info">
        <?php
        require 'validate-2.php';
        ?>
    </div>
</form>
</body>
</html>