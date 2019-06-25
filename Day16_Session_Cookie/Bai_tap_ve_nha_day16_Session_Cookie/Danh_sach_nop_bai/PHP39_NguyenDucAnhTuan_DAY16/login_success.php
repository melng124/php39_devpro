<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login_success</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('d/m/Y H:i:s', time());
if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
    echo '<p>Đăng nhập thành công!!!!!!!!</p>';
    echo '<p>Chào mừng bạn, <b>'.$_COOKIE['user'].'</b></p>';
    echo '<p>Thời gian hiện tại đang login: <b>'.$date.'</b></p>';
    ?>
    <form action="login.php" method="post">
        <button type="submit" name="btnLogout" class="btn btn-link"><b>Logout</b></button>
    </form>
    <?php
}
elseif(isset($_SESSION['user'])){
    echo '<p>Đăng nhập thành công!</p>';
    echo '<p>Chào mừng bạn, <b>'.$_SESSION['user'].'</b></p>';
    echo '<p>Thời gian hiện tại đang login: <b>'.$date.'</b></p>';
    ?>
    <form action="login.php" method="post">
        <button type="submit" name="btnLogout" class="btn btn-link"><b>Logout</b></button>
    </form>
    <?php
}
else{
    echo "<script>alert('Bạn cần đăng nhập để sử dụng trang này');window.location='login.php'</script>";
}
?>
</body>
</html>