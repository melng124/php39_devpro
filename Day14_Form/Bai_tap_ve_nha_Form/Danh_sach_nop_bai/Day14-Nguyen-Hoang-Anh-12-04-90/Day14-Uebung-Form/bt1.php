<!--1.	Tạo form như hình sau, với các yêu cầu validate dữ liệu như sau
•	Name không được để trống
•	Email không được để trống, phải có định dạng email
•	Các trường Specific Time, Class details không được để trống
Sau khi xử lý validate hãy hiển thị các thông tin mà user vừa nhập, có dạng sau:
Your Given details are as:
Name: <giá-trị>
    Email: <giá-trị>
        Specific Time: <giá-trị>
            Class details: <giá-trị>
                Gender: <giá-trị>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-1.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
<body>
<div class="container">
    <form action="" method="POST">
        <div class="row">
            <div class="col-12">
                <h1>Tutorials Point Absolute classes registration</h1>
            </div>
            <div class="col-md-2 col-12">
                <label for="userName">Name:</label>
            </div>
            <div class="col-md-10 col-12">
                <input type="text" class="form-control" name="userName" id="userName"
                       value="<?php echo isset($_POST['userName']) ? $_POST['userName'] : '' ?>">
            </div>
            <div class="col-md-2 col-12">
                <label for="email">Email:</label>
            </div>
            <div class="col-md-10 col-12">
                <input type="email" class="form-control" name="email" id="email"
                       value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </div>
            <div class="col-md-2 col-12">
                <label for="time">Specific Time:</label>
            </div>
            <div class="col-md-10 col-12">
                <input type="text" class="form-control" name="time" id="time"
                       value="<?php echo isset($_POST['time']) ? $_POST['time'] : '' ?>">
            </div>
            <div class="col-md-2 col-12">
                <label for="details">Class details:</label>
            </div>
            <div class="col-md-10 col-12">
                <textarea name="details" id="details" cols="30" rows="10"
                          value="<?php echo isset($_POST['details']) ? $_POST['details'] : '' ?>"></textarea>
            </div>
            <div class="col-md-2 col-12">
                <p>Gender:</p>
            </div>
            <div class="col-md-10 col-12">
                <input type="radio" name="gender" value="1"> Female
                <input type="radio" name="gender" value="2"> Male
            </div>
            <div class="col-12">
                <input type="submit" name="submit-form" value="Submit">
            </div>
            <div class="col-12" id="info">
                <?php
                require 'validate-1.php';
                ?>
            </div>
        </div>
    </form>
</div>
</body>
</html>