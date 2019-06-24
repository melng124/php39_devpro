<style>
    form {
        text-align: center;
        color: white;
        background: #173750;
    }

    input {
        background: #0a1823;
    }
</style>

<form action="" method="post" enctype="multipart/form-data">
    <p style="font-size: 30px">Create an account</p>
    <input type="text" name="username" size="47px" placeholder="User Name"
           value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"/><br/><br/>
    <input type="email" name="email" size="47px" placeholder="Email"
           value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/><br/><br/>
    <input type="text" name="password" size="47px" placeholder="Password"/><br/><br/>
    <input type="text" name="confirm" size="47px" placeholder="Confirm Password"/><br/><br/>
    <label>Select your avatar : </label><input type="file" name="UpLoad"/><br/><br/>
    <button type="submit" name="submit">Register</button>


</form>
<?php
if (isset($_POST['submit'])) {
    $fileName = $_FILES['UpLoad']['name'];
    $fileType = $_FILES['UpLoad']['type'];
    $fileTmpName = $_FILES['UpLoad']['tmp_name'];
    $fileError = $_FILES['UpLoad']['error'];
    $fileSize = $_FILES['UpLoad']['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ['jpg', 'png', 'jpeg'];
    $uploadDirectory = __DIR__ . '/uploads';
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory);
    }
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) {
            if (empty($_POST['username'])) {
                echo "<p style='color: red'>Tên không được để trống</p>";
            }
            if (empty($_POST['email'])) {
                echo "<p style='color: red'>Email không được để trống</p>";
            }
            if (empty($_POST['password'])) {
                echo "<p style='color: red'>Password không được để trống</p>";
            }
            if (empty($_POST['confirm'])) {
                echo "<p style='color: red'>Confirm Password không được để trống</p>";
            }
            if ($_POST['password'] != $_POST['confirm']) {
                echo "<p style='color: red'>Confirm Password và Password không giống nhau</p>";
            } else {
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = $uploadDirectory . "/" . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "<p style='color: blue'>Thành công</p>";
                echo '<p>Tên bạn là ' . $_POST['name'] . '</p>';
                echo "<img src='uploads/$fileNewName'/>";
                echo "<p>Tên File : $fileNewName</p>";
                echo "<p>Kiểu : $fileType</p>";
                echo "<p>Kích thước : $fileSize</p>";
            }

        } else {
            echo "<p style='color: red'>Có Lỗi sảy ra trong quá trình upload</p>";
        }
    } else {
        echo "<p style='color: red'>File Không có định dạng ảnh</p>";
    }
}
?>
