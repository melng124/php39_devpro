<?php
session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
    echo '<p style="color: #007bff">Bạn đã đăng xuất khỏi hệ thống</p>';
}
elseif (isset($_COOKIE['username'])) {
    header('Location: login_success.php');
    return;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = '';
    $result = '';
    if (empty($username) || empty($password)) {
        $error = '<p style="color: red">Không được để trống username hoặc password</p>';
    }
    elseif ($username != 'admin' || $password != '123456') {
        $error = '<p style="color: red">Đăng nhập thất bại. Username hoặc Password ko đúng</p>';
    }
    else {
        $_SESSION['username'] = $username;
        if (isset($_POST['checkbox'])) {
            setcookie('username', $username, time() + 30);
        }
        else {
            setcookie('username', $username, time() - 1);
        }
        header('Location: login_success.php');
    }

    echo $error;
    echo $result;
}