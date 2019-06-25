<?php
session_start();
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    echo 'Đăng nhập thành công';
    header("Location: login_success.php");
    return;
}
$success = '';
$error = '';
$username = '';
$password = '';
if (isset($_POST['submit'])) {
//    echo '<pre>';
//    print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == 123456) {
        $_SESSION['username'] = $username;
        //lưu cookie khi user check vào nút ghi nhớ đăng nhập
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + 3600);
            setcookie('password', $password, time() + 3600);
        }
        $success = 'Đăng nhập thành công';
    } else {
        $error = 'Không được để trống username hoặc password';
    }
    echo 'chào mừng bạn :' . $_POST['username'].'<br/>' ;

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bt1</title>
</head>
<body>
<form method="post" action="">
    Username <input type="text" name="username" value="<?php echo $username ?>"/> <br/>
    Password <input type="password" name="password" value="<?php echo $password ?>" <br/>
    <input type="checkbox" name="remember" value="1"> Remember Me <br />
    <input type="submit" value="Login" name="submit"/>
</form>
<p style="color: red"><?php echo $error ?></p>
<p style="color: blue"><?php echo $success ?></p>
</body>
</html>
