<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai tap 5</title>
</head>
<body>
<form method="post" name="form5" action="" enctype="multipart/form-data" >
    <h3>Register</h3>

    <!--    firstname-->
    Firstname: <input type="text" name="firstname" placeholder="Janobe"><br>

    <!--    Lastname-->
    Lastname: <input type="text" name="lastname" placeholder="lastname"><br>
    <?php if (isset($_POST['lastname'])):
        if (empty($lastname)) {
            echo "<p class='error'>Please enter your lastname</p>";
        }
        ?>
    <?php endif; ?>

    <!--    Username-->
    Username: <input type="text" name="username" placeholder="janobe"><br>

    <!--    Email-->
    Email: <input type="email" name="email" placeholder="janobe@gmail.com"><br>

    <!--    Password-->
    Password: <input type="password" name="password" placeholder="password"><br>
    <?php if (empty($pass)) :
        echo "<p class='error'>Please provide a password</p>";
        ?>
    <?php endif; ?>

    <!--    Repass-->
    Confirm Password: <input type="password" name="repass" placeholder="password"><br>
    <?php if (empty($repass)) :
        echo "<p class='error'>Please provide a password</p>";
        ?>
    <?php endif; ?>
    <!--    Submit-->
    <input type="submit" name="ok" value="Save">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 17/6/2019
 * Time: 9:20 PM
 */
if (isset($_POST['ok'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $repass = $_POST['repass'];
}
?>
</body>
</html>
