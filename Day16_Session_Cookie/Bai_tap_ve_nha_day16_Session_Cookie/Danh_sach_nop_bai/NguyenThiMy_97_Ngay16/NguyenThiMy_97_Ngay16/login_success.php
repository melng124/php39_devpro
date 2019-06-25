
<?php
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)||empty($password)) {
        echo '<p style="color: red;">Không được để trống username hoặc password</p>';
    }
    elseif ($username = 'admin' || $password = '123456') {
        echo '<p style="color: blue;">Đăng nhập thành công</p>';
        //Tiến hành lưu thông tin đăng nhập vào session để tiện sử lý sau này
        $_SESSION['user'] = $username;
        echo 'Tên của bạn là: ' . $_POST['username'] . '<br>';
        $date = date('d/m/Y H:i:s', time());
        //print_r($date);
        echo 'Thời gian hiện tại là: ' . $date;
        //Thực thi hành động sau khi lưu thông tin vào session
        //ở đây mình chuyển hướng trang web sang một trang gọi là login_success.php
        //header('Location:login_success.php',true,null);
        //lưu cookie khi user check vào nút ghi nhớ
        if (isset($_POST['checkbox'])) {
            setcookie("username", $_POST['username'], time() + 60);
            setcookie("password", $_POST['password'], time() + 60);
        }
    }

    else{
        echo '<p style="color: red;">Đăng nhập thất bại, tài khoản hoặc mật khẩu không chính xác</p>';
    }
}
?>
