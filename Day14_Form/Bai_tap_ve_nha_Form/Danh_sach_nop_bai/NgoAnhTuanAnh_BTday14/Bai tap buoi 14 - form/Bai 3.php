<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai tap 3</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<form method="post" name="form3" action="" enctype="multipart/form-data">
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>Enter email address:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Enter password:</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td>Select academi level:</td>
            <td><select name="select">
                    <option value="1">Freshman</option>
                    <option value="2">InternShip</option>
                </select></td>
        </tr>
        <tr>
            <td>Indentify courses taken</td>
            <td><input type="checkbox" name="check[]">CSCI 1710 <br>
                <input type="checkbox" name="check[]" value="1">CSCI 1710 <br>
                <input type="checkbox" name="check[]" value="2">CSCI 1800<br>
                <input type="checkbox" name="check[]" value="3">CSCI 2800<br>
                <input type="checkbox" name="check[]" value="4">CSCI 2150<br>
                <input type="checkbox" name="check[]" value="5">CSCI 2910
            </td>
        </tr>
        <tr>
            <td>Select concentration:</td>
            <td><input type="radio" name="chosse" value="1">Computer (CS) <br>
                <input type="radio" name="chosse" value="2">Information Science (IS)<br>
                <input type="radio" name="chosse" value="3">Information Technology (IT)
            </td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="note" cols="60" rows="5" placeholder="Enter any comment you..."></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="ok" value="Submit Data"></td>
        </tr>
    </table>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 15/6/2019
 * Time: 1:29 PM
 */
if(isset($_POST['ok'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $select = $_POST['select'];
    $chosse = $_POST['chosse'];
    $note = $_POST['note'];
    if(empty($email)){
        echo "<p style='color: red'>Username không được để trống</p>";
    }
    else if(empty($password) || strlen($password) < 8){
        echo "<p style='color: red'>Password không được để trống và phải tối thiểu 8 kí tự</p>";
    }
    else{
        echo "<p style='color: deepskyblue'>Đăng kí thành công !</p>";
        echo "<p style='color: deepskyblue'>Thông tin của bạn: </p>";
        echo "Username:".$email."<br>";
        echo "Password: ".$password."<br>";
        if($select == 1){
            echo "freshman"."<br>";
        }
        else{
            echo"Internship"."<br>";
        }
        if(isset($_POST['checkbox'])) {
            $check = $_POST['checkbox'];
            foreach ($check as $checkbox) {
                if ($checkbox == 1) {
                    echo "CSCI 1710" . "<br>";
                } else if ($checkbox == 2) {
                    echo "CSCI 1800" . "<br>";
                } else if ($checkbox == 3) {
                    echo "CSCI 2800" . "<br>";
                } else if ($checkbox == 4) {
                    echo "CSCI 2150" . "<br>";
                } else {
                    echo "CSCI 2910" . "<br>";
                }
            }
        }
        if($chosse == 1){
            echo "Your chosee: CS"."<br>";
        }
        else if($chosse == 2){
            echo "Your chosse: IS"."<br>";
        }
        else{
            echo "your chosse: IT"."<br>";
        }
        echo "Note: ".$note."<br>";
    }
}
?>
</body>
</html>
