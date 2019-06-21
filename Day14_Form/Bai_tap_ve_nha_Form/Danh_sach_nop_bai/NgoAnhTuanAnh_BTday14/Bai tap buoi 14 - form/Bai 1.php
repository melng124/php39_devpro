<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai tap 1</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<h2>Tutorials Point Absolute classed registration</h2>
<form method="post" name="form1" action="" enctype="multipart/form-data">
    <table border="0" cellspacing="3" cellpadding="0">
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''?>"> </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''?>"> </td>
        </tr>
        <tr>
            <td>Spectific Time:</td>
            <td><input type="text" name="time" value="<?php echo isset($_POST['time']) ? $_POST['time'] : ''?>"> </td>
        </tr>
        <tr>
            <td>Class detail: </td>
            <td><textarea name="note" cols="40" rows="10"></textarea> </td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td><input type="radio" name="gender" value="1">Female
                <input type="radio" name="gender" value="2">Male
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="ok" value="submit"> </td>
        </tr>
    </table>
</form>
<h2>Your Given details are as: </h2>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 15/6/2019
 * Time: 11:57 AM
 */
if(isset($_POST['ok'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $note = $_POST['note'];
    $gender = $_POST['gender'];
    if(empty($name) || empty($email)){
        echo "Các trường không được để trống.";
    }
    else if(empty($time) || empty($note)){
        echo "Các trường ko được để trống";
    }
    else{
        echo "Name: ".$name."<br>";
        echo "Email: ".$email."<br>";
        echo "Specific Time: ".$time."<br>";
        echo "class details: ".$note."<br>";
        if($gender == 1){
            echo "gender: Female";
        }
        else{
            echo "gender: Male";
        }
    }
}
?>
</body>
</html>
