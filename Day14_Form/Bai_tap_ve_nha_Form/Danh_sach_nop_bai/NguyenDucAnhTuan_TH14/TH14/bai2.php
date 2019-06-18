<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai 2</title>
    <style type="text/css">
        table{
            color: #fff;
        }
        .t1{
            background-color: dodgerblue;
        }
        .t2{
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <table align="center">
        <tr class="t1">
            <th colspan="2">Registration Form</th>
        </tr>
        <tr class="t2">
            <td>Username</td>
            <td>
                <input type="text" name="txtUser" value="<?php echo isset($_POST['txtUser'])? $_POST['txtUser'] : '';?>"/>
            </td>
        </tr>
        <tr class="t2">
            <td>Password</td>
            <td>
                <input type="password" name="txtPass" value="<?php echo isset($_POST['txtPass'])? $_POST['txtPass'] : '';?>"/>
            </td>
        </tr>
        <tr class="t2">
            <td>User Type</td>
            <td>
                <select name="select">
                    <option value="" selected>----Select----</option>
                    <option value="1" <?php if(isset($_POST['select']) && $_POST['select'] == 1):?>selected<?php endif; ?>>Teacher</option>
                    <option value="2" <?php if(isset($_POST['select']) && $_POST['select'] == 2):?>selected<?php endif; ?>>Student</option>
                </select>
            </td>
        </tr>
        <tr class="t2">
            <td>Display name</td>
            <td>
                <input type="text" name="txtDisplay" value="<?php echo isset($_POST['txtDisplay'])? $_POST['txtDisplay'] : '';?>"/>
            </td>
        </tr>
        <tr class="t2">
            <td>Address</td>
            <td>
                <textarea rows="5" cols="30" name="txtAddress"><?php echo isset($_POST['txtAddress'])? $_POST['txtAddress'] : '';?></textarea>
            </td>
        </tr>
        <tr class="t2">
            <td>Email</td>
            <td>
                <input type="email" name="txtEmail" value="<?php echo isset($_POST['txtEmail'])? $_POST['txtEmail'] : '';?>"/>
            </td>
        </tr>
        <tr class="t2">
            <td>Gender</td>
            <td>
                <input type="radio" name="rdGender" value="0" <?php if(isset($_POST['rdGender']) && $_POST['rdGender'] == 0):?> checked <?php endif;?>/>Male
                <input type="radio" name="rdGender" value="1" <?php if(isset($_POST['rdGender']) && $_POST['rdGender'] == 1):?> checked <?php endif;?>/>Female
            </td>
        </tr>
        <tr class="t2">
            <td></td>
            <td>
                <input type="checkbox" name="ckAccept" value="1"/>I accept Terms and Conditions
            </td>
        </tr>
        <tr class="t1">
            <td colspan="2" align="center">
                <input type="submit" name="btnSubmit" value="Submit"/>
            </td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['btnSubmit'])){
    $user = $_POST['txtUser'];
    $pass = $_POST['txtPass'];
    $display = $_POST['txtDisplay'];
    $address = $_POST['txtAddress'];
    $email = $_POST['txtEmail'];
    $check = $_POST['ckAccept'];
    if(isset($_POST['select'])) {
        $type = $_POST['select'];
    }
    else{
        $type = "";
    }
    if(isset($_POST['rdGender'])) {
        $gender = $_POST['rdGender'];
    }
    else{
        $gender = "";
    }
    if(empty($user)){
        echo "<p style='color: red'>Username không được để trống</p>";
    }
    elseif(empty($pass)){
        echo "<p style='color: red'>Password không được để trống</p>";
    }
    elseif($type == ""){
        echo "<p style='color: red'>User type không được để trống</p>";
    }
    elseif(empty($display)){
        echo "<p style='color: red'>Display name không được để trống</p>";
    }
    elseif(strlen($display) > 24){
        echo "<p style='color: red'>Display name không vượt quá 24 kí tự</p>";
    }
    elseif(empty($address)){
        echo "<p style='color: red'>Address không được để trống</p>";
    }
    elseif(empty($email)){
        echo "<p style='color: red'>Email không được để trống</p>";
    }
    elseif($gender == ""){
        echo "<p style='color: red'>Gender không được để trống</p>";
    }elseif(empty($check)){
        echo "<p style='color: red'>Bạn phải đồng ý điều khoản</p>";
    }
    else{
        echo "<span style='color: deepskyblue'>Đăng ký thành công!</span><br/>";
        echo "<span style='color: deepskyblue'>Thông tin của bạn:</span><br/>";
        echo "<b>Username: " .$user. "</b><br/>";
        echo "<b>Password: " .$pass. "</b><br/>";
        echo "<b>User type: " .($type == 1 ? 'Teacher' : 'Student'). "</b><br/>";
        echo "<b>Display name: " .$display. "</b><br/>";
        echo "<b>Address: " .$address. "</b><br/>";
        echo "<b>Email: " .$email. "</b><br/>";
        echo "<b>Gender: " .($gender == 0 ? 'Male' : 'Female')."</b><br/>";
    }
}
?>
</body>
</html>