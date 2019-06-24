<!--Yêu cầu validate:
Chi cho phép upload các file ảnh, các file ảnh có đuôi là jpg, jpeg, png, gif. Khi upload không phải dạng ảnh, thì hiển thị lỗi màu đỏ “Cần upload file có định dạng ảnh”
Chỉ cho phép upload ảnh dung lượng tối đa 1Mb, Khi upload dung lượng lớn hơn 1Mb, thì hiển thị lỗi màu đỏ “File upload không được > 1Mb”
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-1.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <h3>Select a file to upload</h3>
    <input type="file" name="upload"> <br>
    <p>Only jpg, jpeg, png, and gif file with maximum size of 1 MB is allowed </p>
    <button type="submit" class="btn btn-primary" name="submit">Upload</button>
    <div id="info">
<!--        <img src="--><?php //echo isset($_FILES['upload']) ? 'upload-1' . '/' . $_FILES['upload']['name'] : '' ?><!--" alt=""-->
<!--             style="width: 150px; height: 150px"> <br>-->
        <?php
        if (isset($_POST['submit'])) {
            if (isset($_FILES['upload'])) {
                $type_file = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
                $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
                $uploadPic = $_FILES['upload'];

                if ($uploadPic['error'] != 0) {
                    echo '<p style="color: red">Có lỗi. File ko upload đc</p>';
                    echo '<p style="color: red">ERROR: ' . $uploadPic['error'] . '</p>';
                } elseif (!in_array(strtolower($type_file), $type_fileAllow)) {
                    echo '<p style="color: red">Cần upload file có định dạng ảnh</p>';
                } elseif ($uploadPic['size'] > 1048576) {
                    echo '<p style="color: red">File upload không được > 1Mb</p>';
                } else {
                    $uploadDirectory = __DIR__ . '/uploads';
                    $path = $uploadDirectory . '/' . $uploadPic['name'];
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory);
                    }
                    $isUploaded = move_uploaded_file($uploadPic['tmp_name'], $uploadDirectory . '/' . $uploadPic['name']);
                    if ($isUploaded) {
                        echo 'File vừa upload: ';
                        echo '<img src="uploads/'.$uploadPic['name'].'" alt="" width="100px" height="100px"> <br>';
                        echo "Tên file: " . $uploadPic['name'] . '<br>';
                        echo "Định dạng file: " . $uploadPic['type'];
                    }
                }
            }
        }
        ?>
    </div>
</form>
</body>
</html>

