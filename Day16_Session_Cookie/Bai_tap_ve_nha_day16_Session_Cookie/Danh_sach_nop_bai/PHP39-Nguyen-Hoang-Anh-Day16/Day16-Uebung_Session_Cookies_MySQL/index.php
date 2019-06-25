<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-index.css" type="text/css">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username"
           value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"
    <label for="password">Pasword</label>
    <input type="password" class="form-control" name="password" id="password"
           value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
    <input type="checkbox" name="checkbox"> Remember me <br>
    <button type="submit" name="login" class="btn btn-success">Login</button>
    <div id="info">
        <?php
        require 'validate.php';
        ?>
    </div>
</form>
</body>
</html>