<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-5.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="row" id="header">
            <div class="col-12">
                <h1>Register</h1>
            </div>
        </div>
        <div class="row" id="content">
            <div class="col-md-3 col-12">
                <label for="firstName">Firstname: </label>
            </div>
            <div class="col-md-9 col-12">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="1stName"
                       value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
            </div>
            <div class="col-md-3 col-12">
                <label for="lastName">Lastname: </label>
            </div>
            <div class="col-md-9 col-12">
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Lastname"
                       value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                <div class="notice-lastname">
                    <?php
                    require 'validate-5.php';
                    validateLastname();
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <label for="userName">Username: </label>
            </div>
            <div class="col-md-9 col-12">
                <input type="text" class="form-control" id="userName" name="userName" placeholder="janobe"
                       value="<?php echo isset($_POST['userName']) ? $_POST['userName'] : '' ?>">
            </div>
            <div class="col-md-3 col-12">
                <label for="email">Email Address: </label>
            </div>
            <div class="col-md-9 col-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="janobe@gmail.com"
                       value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </div>
            <div class="col-md-3 col-12">
                <label for="pass">Password: </label>
            </div>
            <div class="col-md-9 col-12">
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password"
                       value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>">
                <div class="notice-password">
                    <?php
                    validatePassword();
                    ?>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <label for="pass">Confirm Password: </label>
            </div>
            <div class="col-md-9 col-12">
                <input type="password" class="form-control" id="conPass" name="conPass" placeholder="Password" value="">
                <div class="notice-confirm">
                    <?php
                    validateConfirmPassword();
                    ?>
                </div>
                <button type="submit" class="btn btn-primary" name="submit-form">Save</button>
            </div>
        </div>
    </form>
    <div class="col-12" id="info">
        <?php
        validateForm();
        ?>
    </div>
</div>
</body>
</html>