<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<style type="text/css">
    .a {
        margin-top: 30px;
    }
</style>
<div class="container">
    <form action="#" method="post">
        <div class="row">
            <h1 style="color: blue">Register</h1>
            <p class="a" style="border-bottom: 1px solid;width: 100%"></p>
        </div>
        <div class="row">
            <div style="text-align: right" class=" a col-md-4">
                First Name :
            </div>
            <div class=" a col-md-8">
                <input style="width: 80%" type="text" name="first" value="<?php echo isset($_POST['first'])?$_POST['first'] : '' ?>">
            </div>
            <br/>
            <div style="text-align: right" class=" a col-md-4">
                Last Name :
            </div>
            <div class=" a col-md-8">
                <input style="width: 80%" type="text" name="last" value="<?php echo isset($_POST['last'])?$_POST['last'] : '' ?>">
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <p id="err"
                   style="color: red"><?php echo (isset($_POST['submit']) && empty($_POST['last'])) ? "Không được để trống" : '' ?></p>
            </div>
            <div style="text-align: right" class=" a col-md-4">
                User Name :
            </div>
            <div class=" a col-md-8">
                <input style="width: 80%" type="text" name="user" value="<?php echo isset($_POST['user'])?$_POST['user'] : '' ?>">
            </div>

            <div style="text-align: right" class=" a col-md-4">
                Email Address :
            </div>
            <div class=" a col-md-8">
                <input style="width: 80%" type="email" name="mail" value="<?php echo isset($_POST['mail'])?$_POST['mail'] : '' ?>">
            </div>

            <div style="text-align: right" class=" a col-md-4">
                Password :
            </div>
            <div class=" a col-md-8">
                <input style="width: 80%" type="password" name="pass" value="<?php echo isset($_POST['pass'])?$_POST['pass'] : '' ?>">
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <p id="err"
                   style="color: red"><?php echo (isset($_POST['submit']) && empty($_POST['pass'])) ? "Không được để trống" : '' ?></p>
            </div>

            <div style="text-align: right" class=" a col-md-4">
                Confirm Password :
            </div>
            <div class=" a col-md-8">
                <input style="width: 80%" type="password" name="confirm" value="<?php echo isset($_POST['confirm'])?$_POST['confirm'] : '' ?>">
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <p id="err"
                   style="color: red"><?php echo (isset($_POST['submit']) && empty($_POST['confirm'])) ? "Không được để trống" : '' ?></p>
            </div>
            <button style="margin-top: 20px;margin-left:250px " name="submit" type="submit" class="btn btn-primary">Save
                Record
            </button>
        </div>
    </form>
</div>
<?php
if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $pass= $_POST['pass'];
    $confirm=$_POST['confirm'];

    if (empty($_POST['first']) == false && empty($_POST['last'])==false && empty($_POST['user'])==false && empty($_POST['mail'])==false && empty($_POST['pass'])==false) {
        if ($_POST['confirm'] == $_POST['pass']) {
            echo "<p style='color: blue'>Đăng Kí Thành Công</p> 
                       <p>Thông Tin của bạn là :</p>
                       First Name : $first <br>
                       Last Name  :$last <br>
                       User Name  :$user <br>
                       Email      :$mail";
        } else {
            echo "<p style='color: red'>Đăng Kí Thất Bại</p> ";
        }

    }
    elseif(empty($first)){
        echo"để trống first Name";
    }
    elseif (empty($user)){
        echo "để trống user";
    }
    else{
        echo "để trống mail";
    }
}
?>
</body>
</html>