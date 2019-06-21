<?php
if(isset($_POST['btnSubmit'])){
    $error = array();
    if(empty($_POST['txtFirst'])){
        $error['txtFirst'] = "Please enter your firstname";
    }else{
        $first = $_POST['txtFirst'];
    }
    if(empty($_POST['txtLast'])){
        $error['txtLast'] = "Please enter your lastname";
    }else{
        $last = $_POST['txtLast'];
    }
    if(empty($_POST['txtUser'])){
        $error['txtUser'] = "Please enter your user";
    }else{
        $user = $_POST['txtUser'];
    }
    if(empty($_POST['txtEmail'])){
        $error['txtEmail'] = "Please enter your email";
    }else{
        $email = $_POST['txtEmail'];
    }
    if(empty($_POST['txtPass']) || empty($_POST['txtConfirm'])){
        $error['txtPass'] = "Please enter your password or confirm password";
    }else{
        $pass = $_POST['txtPass'];
        $confirm = $_POST['txtConfirm'];
    }
    if($pass != $confirm){
        $error['error'] = "Please provide a password";
    }
    if(empty($error)){
        $show = "<span style='color: deepskyblue'>Đăng ký thành công!</span><br/>
        <span style='color: deepskyblue'>Thông tin của bạn:</span><br/>
        <b>FirstName: $first</b><br/>
        <b>LastName: $last</b><br/>
        <b>Username: $user</b><br/>
        <b>Email: $email</b><br/>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <style type="text/css">
        .container{
            width: 60%;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Firstname:</label>
            <input type="text" class="form-control col-sm-9" name="txtFirst" value="<?php echo isset($_POST['txtFirst'])? $_POST['txtFirst'] : '';?>" placeholder="First name"/>
            <span>
                <?php
                if(isset($error['txtFirst'])){
                    echo $error['txtFirst'];
                }
                ?>
            </span>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lastname:</label>
            <input type="text" class="form-control col-sm-9" name="txtLast" value="<?php echo isset($_POST['txtLast'])? $_POST['txtLast'] : '';?>" placeholder="Last name"/>
            <span>
                <?php
                if(isset($error['txtLast'])){
                    echo $error['txtLast'];
                }
                ?>
            </span>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Username:</label>
            <input type="text" class="form-control col-sm-9" name="txtUser" value="<?php echo isset($_POST['txtUser'])? $_POST['txtUser'] : '';?>" placeholder="User name"/>
            <span>
                <?php
                if(isset($error['txtUser'])){
                    echo $error['txtUser'];
                }
                ?>
            </span>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email address:</label>
            <input type="email" class="form-control col-sm-9" name="txtEmail" value="<?php echo isset($_POST['txtEmail'])? $_POST['txtEmail'] : '';?>" placeholder="name@example.com">
            <span>
                <?php
                if(isset($error['txtEmail'])){
                    echo $error['txtEmail'];
                }
                ?>
            </span>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password:</label>
            <input type="password" class="form-control col-sm-9" name="txtPass" value="" placeholder="Password">
            <span>
                <?php
                if(isset($error['error'])){
                    echo $error['error'];
                }
                ?>
            </span>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Confirm Password:</label>
            <input type="password" class="form-control col-sm-9" name="txtConfirm" value="" placeholder="Password">
            <span>
                <?php
                if(isset($error['txtPass'])){
                    echo $error['txtPass'];
                }
                if(isset($error['error'])){
                    echo $error['error'];
                }
                ?>
            </span>
        </div>
        <div class="form-group">
            <div class="col-sm-3"></div>
            <button type="submit" name="btnSubmit" class="btn btn-primary">Save</button>
        </div>
    </form>
    <div class="show">
        <?php echo $show; ?>
    </div>
</div>
</body>
</html>