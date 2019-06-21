<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai tap 2</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        table {
            width: 450px;
            background-color: deepskyblue;
            color: white;
        }

        .align {
            text-align: right;
        }
    </style>
</head>
<body>
<form method="post" name="form2" action="" enctype="multipart/form-data">
    <table border="1" cellpadding="0" cellspacing="2">
        <tr>
            <td colspan="2" align="center"><h3>Registration Form</h3></td>
        </tr>
        <tr>
            <td class="align">Username:</td>
            <td><input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>"></td>
        </tr>
        <tr>
            <td class="align">Password:</td>
            <td><input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''?>"></td>
        </tr>
        <tr>
            <td class="align">User Type:</td>
            <td><select name="select">
                    <option value="1">Single</option>
                    <option value="2">Wedding</option>
                </select></td>
        </tr>
        <tr>
            <td class="align">Display Name</td>
            <td><input type="text" name="display" value="<?php echo isset($_POST['display']) ? $_POST['display'] : ''?>"></td>
        </tr>
        <tr>
            <td class="align">Address:</td>
            <td><textarea name="address" cols="20" rows="5"></textarea></td>
        </tr>
        <tr>
            <td class="align">Email:</td>
            <td><input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''?>"></td>
        </tr>
        <tr>
            <td class="align">Gender:</td>
            <td><input type="radio" name="gender" value="1">Male
                <input type="radio" name="gender" value="2">Female
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="checkbox" name="check[]">I accept Tems and Condition</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="ok" value="submit"></td>
        </tr>
    </table>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 15/6/2019
 * Time: 12:35 PM
 */
if (isset($_POST['ok'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['select'];
    $displayName = $_POST['display'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    if (empty($username) || empty($password) || empty($type) || empty($displayName || empty($address) || empty($email))) {
        echo "không được để trống dữ liệu";
    } else if (strlen($displayName) > 24) {
        echo "Chỉ tối đa 24 kí tự";
    }
    else {
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";
        if ($type == 1) {
            echo "User type: Single" . "<br>";
        } else {
            echo "User type: Wedding" . "<br>";
        }
        echo "Display Name: " . $displayName . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Email: " . $email . "<br>";
        if (isset($_POST['gender'])) {
            if ($gender == 1) {
                echo "Gender: Male";
            } else {
                echo "Gender: Famale";
            }
        }
    }
}
?>
</body>
</html>
