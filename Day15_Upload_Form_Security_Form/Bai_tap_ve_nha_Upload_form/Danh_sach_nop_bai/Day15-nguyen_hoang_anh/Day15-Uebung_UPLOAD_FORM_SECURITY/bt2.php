<!--2.	Tạo form với các các thông tin như sau:-->
<!--•	1 trường input nhập tên của bạn, yêu cầu trường này không được để trống, nếu để trống hiển thị text màu đỏ “Không được để trống trường này”-->
<!--•	1 trường input cho phép chọn file ảnh upload avatar của bạn, yêu cầu chỉ cho phép upload các định dạng ảnh, dung lượng không quá 2 Mb.-->
<!--Khi upload không phải dạng ảnh, thì hiển thị lỗi màu đỏ “Cần upload file có định dạng ảnh”-->
<!--Khi upload dung lượng lớn hơn 2Mb, thì hiển thị lỗi màu đỏ “File upload không được > 2Mb”-->
<!--Sau khi submit form, hiển thị các thông tin như định dạng sau:-->
<!--Tên của bạn: <giá-trị>-->
<!--    Avatar của bạn : <hiển-thị-ảnh>-->
<!--        Tên file: <giá-trị>-->
<!--            Định dạng file: <giá-trị>-->
<!--                Đường dẫn file trên project của bạn: <giá-trị>-->
<!--                    Kích thước file (tính bằng Mb): <giá-trị>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-2.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="name">Nhập tên của bạn</label>
    <input type="text" name="name" id="name" class="form-control"
           value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
    <br>
    <input type="file" name="upload"> <br>
    <p>Only jpg, jpeg, png, and gif file with maximum size of 2 MB is allowed </p>
    <button type="submit" name="submit-form" class="btn btn-primary">Submit-Form</button>
    <div id="info">
        <?php
        if (isset($_POST['submit-form'])) {
            $name = $_POST['name'];
            $picUpload = $_FILES['upload'];
            if (empty($name)) {
                echo '<p style="color: red">Không được để trống trường này</p>';
            }
            elseif (isset($_FILES['upload'])) {
                $type_file = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
                $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
                if ($picUpload['size'] > 2097152) {
                    echo '<p style="color: red">File upload không được > 2Mb</p>';
                }
                elseif (!in_array(strtolower($type_file), $type_fileAllow)) {
                    echo '<p style="color: red">Cần upload file có định dạng ảnh</p>';
                }
                elseif ($picUpload['error'] != 0) {
                    echo '<p style="color: red">Có lỗi. File ko upload đc</p>';
                    echo '<p style="color: red">ERROR: ' . $picUpload['error'] . '</p>';
                }
                else {
                    $uploadDirectory = __DIR__ . "/uploads";
                    $path = $uploadDirectory . '/' . $picUpload['name'];
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory);
                    }
                    $isUploaded = move_uploaded_file($picUpload['tmp_name'], $path);
                    if ($isUploaded) {
                        echo "Tên của bạn: $name <br>";
                        echo "Avatar của bạn: ";
                        echo '<img src="uploads/'.$picUpload['name'].'" alt="" width="100px" height="100px"> <br>';
                        echo "Tên file: " . $picUpload['name'] . '<br>';
                        echo "Định dạng file: " . $picUpload['type'] . '<br>';
                        echo "Đường dẫn file: " . $path . '<br>';
                        echo "Kích thước file(Mb): " . ($picUpload['size']/1048576);
                    }
                }
            }
        }
        ?>
    </div>
</form>
</body>
</html>