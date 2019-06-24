<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/styleb3.css">
    <title>Document</title>
</head>

<body>

    <div class="row">
        <div class="col-md-3 col-12"></div>
        <div class="col-md-6 col-12 formb3">

            <form action="" method="post" enctype="multipart/form-data">
                <p class="p1">Create an account</p>
                <input type="text" name="username" class="form-control ipb3" id="ip1b3" placeholder="User Name">
                <input type="email" name="email" class="form-control ipb3" id="ip2b3" placeholder="Email">

                <input type="password" name="pass" class="form-control ipb3" id="ip3b3" placeholder="Password">

                <input type="password" name="pass1" class="form-control ipb3" id="ip3b3" placeholder="Cofirm Password">

                <div class="file">
                    <span>Select your avatar : </span>
                    <input type="file" name="upload" id="" class="ipupload"><br />
                </div>


                <button type="submit" name="submit" class="btn btn-primary btb3">Register</button>


            </form>
            <?php
            $allowtypes    = ['jpg', 'png', 'jpeg', 'gif'];
            if (isset($_POST['submit'])) {
                if (empty($_POST['username'])) echo "<p style='color:red'>Username không được để trống</p>";
                elseif (empty($_POST['email'])) echo "<p style='color:red'>Email không được để trống</p>";
                elseif (empty($_POST['pass'])) echo "<p style='color:red'>Password không được để trống</p>";
                elseif (empty($_POST['pass1'])) echo "<p style='color:red'>Confirm Password không được để trống</p>";
                elseif ($_POST['pass'] != $_POST['pass1']) echo "<p style='color:red'>Trường Confirm Password phải giống trường Password</p>";
                elseif(isset($_FILES['upload'])) {
                    $file = $_FILES['upload'];
                    $extension = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));

                    if (!in_array($extension, $allowtypes)) {
                        echo "<p style='color:red'>Cần upload file ảnh</p>";
                    } else {
                        if ($file['error'] == 0) {
                            //tạo thư muc chứa file upload nếu chưa tồn tại
                            $directoryUpload = __DIR__ . '/Uploads';
                            if (!file_exists($directoryUpload)) {
                                mkdir($directoryUpload);
                            }
                            move_uploaded_file($file['tmp_name'], $directoryUpload . '/' . $file['name']);
                            echo '<p>Upload thành công</p>';
                            echo '<p>Username : '.$_POST['username'].'</p>';
                            echo '<p>Email    : '.$_POST['email'].'</p>';
                            echo '<p>Avatar   : </p>';
                            echo "<img src='Uploads/" . $file['name'] . "' alt='Image'>";

                        } else {
                            echo 'upload file không thành công';
                        }
                    }
                }
                else echo "<p style='color:red'> Bạn chưa upload file</p>";
            }
            ?>
        </div>
    </div>



</body>

</html>