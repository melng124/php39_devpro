<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wall">
    <div class="container">
        <div id="form">
            <form class="form1" action="index.php" method="post">
                <div id="user">
                    <p>UserName</p>
                    <input type="text" id="user" name="user"
                           value="<?php echo isset($_POST['user']) ? $_POST['user'] : '' ?>">
                    <p style="color: red"><?php echo (isset($_POST['submit']) && empty($_POST['user'])) ? 'Không để username trống' : '' ?></p>
                </div>
                <div id="pass">
                    <p>Password</p>
                    <input type="password" id="pass" name="pass" value="">
                    <p style="color: red"><?php echo (isset($_POST['submit']) && empty($_POST['pass'])) ? 'Không để password trống' : '' ?></p>
                </div>
                <div id="check">
                    <input type="checkbox" value="1" name="check"> Remember me
                </div>
                <p style="color: red"><?php echo (isset($_POST['submit']) && ($_POST['user'] != 'admin' || $_POST['pass'] != '123456')) ? 'đăng nhập thất bại' : '' ?></p>
                <button type="submit" name="submit" class="btn btn-success">Login</button>
            </form>
        </div>
    </div>
</div>
<?php

if (isset($_COOKIE['username'])) {
    header('Location:Login.php');
}

if (isset($_POST['submit'])) {
    $erorr = '';
    if ($_POST['user'] == 'admin' && $_POST['pass'] == '123456') {
        $_SESSION['user'] = $_POST['user'];
        header('Location: Login.php');
        if ($_POST['check'] == 1) {
            setcookie('username', $_SESSION['user'], time() + 3600);
        }
    }
}

print_r($_SESSION);
?>
</body>
</html>