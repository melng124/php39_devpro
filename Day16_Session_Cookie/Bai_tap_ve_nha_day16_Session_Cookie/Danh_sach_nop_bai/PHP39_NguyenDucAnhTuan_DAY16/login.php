<?php
session_start();
?>
<?php
$error = [];
$name = '';
$pass = 0;
$show = '';
if(isset($_POST['btnLogout'])){
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
        setcookie('user', $name, time() - 1);
        setcookie('password', $pass, time() - 1);
    }
    $show = 'Bạn đã đăng xuất khỏi hệ thống';
}
elseif (isset($_COOKIE['user']) && isset($_COOKIE['password'])) {
    header("Location: login_success.php");
    return;
}
if(isset($_POST['btnSubmit'])){
    if(empty($_POST['txtUser'])){
        $error['txtUser'] = '*Username không được để trống';
    }else{
        $name = $_POST['txtUser'];
    }
    if(empty($_POST['txtPass'])){
        $error['txtPass'] = '*Password không được để trống';
    }else{
        $pass = $_POST['txtPass'];
    }
    if(!$error){
        if($name == 'admin' && $pass == 123456){
            $_SESSION['user'] = $name;
            if(isset($_POST['check'])){
                setcookie('user', $name, time()+30);
                setcookie('password', $pass, time()+30);
            }
            else {
                setcookie('user', $name, time() - 1);
                setcookie('password', $pass, time() - 1);
            }
            header('Location: login_success.php');
        }
        else{
            $error['err'] = '*Username hoặc Password không chính xác';
        }
    }
}
?>
<?php
if(isset($_SESSION['user'])){
    echo "<script>alert('Bạn đã đăng nhập rồi, cần logout tài khoản nếu muốn quay trở lại màn hình login form');window.location='login_success.php'</script>";
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <style type="text/css">
        .container{
            width: 50%;
            background-color: #d6d8d9;
        }
        .error{
            color: red;
        }
        .show{
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for ="idUser">Username</label>
            <input type="text" class="form-control" name="txtUser" id="idUser" value="<?php echo $name ?>"/>
            <div class="error">
                <?php
                if(isset($error['txtUser'])){
                    echo $error['txtUser'];
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="txtPass" id="exampleInputPassword1"/>
            <div class="error">
                <?php
                if(isset($error['txtPass'])){
                    echo $error['txtPass'];
                }
                ?>
            </div>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" value="0">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" name="btnSubmit" class="btn btn-success">LOGIN</button>
    </form>
    <div class="error">
        <div class="error">
            <?php
            if(isset($error['err'])){
                echo $error['err'];
            }
            ?>
        </div>
    </div>
    <div class="show">
        <?php echo $show; ?>
    </div>
</div>
</body>
</html>