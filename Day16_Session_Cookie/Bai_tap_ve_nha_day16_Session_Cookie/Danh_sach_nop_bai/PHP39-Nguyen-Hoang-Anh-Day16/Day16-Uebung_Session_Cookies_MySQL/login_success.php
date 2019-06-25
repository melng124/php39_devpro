<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login_success</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body style="text-align: center">
<?php
session_start();
if (isset($_SESSION['username'])) {
    $date = date('d/m/Y H:i:s', time());
    echo '<p style="color: #b3b7bb">Đăng nhập thành công!</p>';
    echo '<p style="color: #b3b7bb">Chào mừng bạn, ' . $_SESSION['username'] . '</p>';
    echo '<p style="color: #b3b7bb">Thời gian hiện tại đang login: ' . $date . '</p>';
}
elseif (isset($_COOKIE['username'])) {
    $date = date('d/m/Y H:i:s', time());
    if (!isset($_SESSION['username'])) {
        echo '<p style="color: #007bff">Bạn đã đăng nhập rồi, cần logout tài khoản nếu muốn quay trở lại màn hình login form</p>';
    }
    echo '<p style="color: #b3b7bb">Đăng nhập thành công!</p>';
    echo '<p style="color: #b3b7bb">Chào mừng bạn, ' . $_COOKIE['username'] . '</p>';
    echo '<p style="color: #b3b7bb">Thời gian hiện tại đang login: ' . $date . '</p>';
}
else {
    echo '<p style="color: red">Bạn cần đăng nhập để có thể truy cập trang này</p>';
    return;
}
?>
<a class="nav-link" href="index.php">Logout</a>
</body>
</html>