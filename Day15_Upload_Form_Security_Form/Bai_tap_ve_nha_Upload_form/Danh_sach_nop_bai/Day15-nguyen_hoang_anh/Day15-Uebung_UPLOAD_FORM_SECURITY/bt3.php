<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-3.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <h1>Create an account</h1>
    <input type="text" name="userName" id="userName" class="form-control" placeholder="User Name"
           value="<?php echo isset($_POST['userName']) ? $_POST['userName'] : '' ?>">
    <input type="email" name="email" id="email" class="form-control" placeholder="Email"
           value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password"
           value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>">
    <input type="password" name="confirmPass" id="confirmPass" class="form-control" placeholder="Confirm Password"
           value="<?php echo isset($_POST['confirmPass']) ? $_POST['confirmPass'] : '' ?>">
    Select your avatar:
    <input type="file" name="upload">
    <br>
    <button type="submit" name="submit-form" class="btn btn-primary">Register</button>
    <div id="info">
        <?php
        if (isset($_POST['submit-form'])) {
            $name = $_POST['userName'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $confirmPass = $_POST['confirmPass'];

            if (empty($name)) {
                echo '<p style="color: red">Username ko đc để trống</p>';
            } elseif (empty($email)) {
                echo '<p style="color: red">Email ko đc để trống</p>';
            } elseif (empty($pass)) {
                echo '<p style="color: red">Password ko đc để trống</p>';
            } elseif (empty($confirmPass)) {
                echo '<p style="color: red">Confirm Password ko đc để trống</p>';
            } elseif ($confirmPass != $pass) {
                echo '<p style="color: red">Trường confirm password phải giống trường Password</p>';
            } elseif (isset($_FILES['upload'])) {
                $picUpload = $_FILES['upload'];
                $type_file = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
                $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
                if ((!in_array(strtolower($type_file), $type_fileAllow))) {
                    echo '<p style="color: red">Cần upload anh</p>';
                } else {
                    $uploadDirectory = __DIR__ . '/uploads';
                    $path = $uploadDirectory . '/' . $picUpload['name'];
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory);
                    }
                    $isUploaded = move_uploaded_file($picUpload['tmp_name'], $path);
                    if ($isUploaded) {
                        echo "Username: $name <br>";
                        echo "Email: $email <br>";
                        echo 'Avatar: ';
                        echo '<img src="uploads/' . $picUpload['name'] . '" alt="" width="100px" height="100px">';
                    }
                }
            }
        }
        ?>
    </div>
</form>
</body>
</html>