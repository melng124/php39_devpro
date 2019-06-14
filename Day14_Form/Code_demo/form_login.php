<form action="" method="post">
    Username: <input type="email" name="username"
                     value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" /> <br />
    Password: <input type="password" name="password"
                     value="" /> <br />
    <input type="submit" name="ok" value="Login">
    <input type="reset" name="reset" value="Reset form">
</form>

<?php
//nếu user click submit thì mới xử lý
if (isset($_POST['ok'])) {
    echo '<pre>';
//    print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];
    //kiểm tra validate dữ liệu
//    1 - Username, password không được để trống
    if (empty($username) || empty($password)) {
        echo '<p style="color: red">
        Username, password không được để trống</p>';
    }
//    2- Password cần lớn hoặc bằng hơn 6 ký tự
    else if (strlen($password) < 6) {
        echo '<p style="color: red">
        Password cần lớn hoặc bằng hơn 6 ký tự</p>';
    }
//    3 - Nếu username = ‘nguyenvietmanhit@gmail.com’ và
//    password = 123456 thì thông báo Đăng nhập thành công,
//    ngược lại là Sai username hoặc password
    else if($username == 'nguyenvietmanhit@gmail.com' &&
            $password == 123456
    ) {
        echo '<p style="color: blue">
        Đăng nhập thành công</p>';
    }
    else {
        echo '<p style="color: red">
        Sai username hoặc password</p>';
    }

}
?>