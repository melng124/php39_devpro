<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/styleb1.css">
    <title>Document</title>
</head>

<body>
    <form class="formb1" action="" method="post" enctype="multipart/form-data">
    <p><b>Select a file to upload</b>  </p>  
    <input type="file" name="upload" id="" value="Choose File"><br />
    <p>Only jpg, ipeg, png and gif with maximum size ò 1Mbis allowed</p>    
    <button type="submit" name="submit" class="btn btn-primary bt">Upload</button>

    </form>
    <?php
    $allowtypes    = ['jpg', 'png', 'jpeg', 'gif'];
    if (isset($_POST['submit'])) {
        if (isset($_FILES['upload'])) {
            $file = $_FILES['upload'];
            $extension = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));

            if (!in_array($extension, $allowtypes)) {
                echo "<p style='color:red'>Chỉ được upload các định dạng JPG, PNG, JPEG, GI</p>";
            } elseif ($file['size'] > 2097125) {
                echo "<p style='color:red'>Filr upload không được > 1Mb</p> ";
            } else {
                if ($file['error'] == 0) {
                    //tạo thư muc chứa file upload nếu chưa tồn tại
                    $directoryUpload = __DIR__ . '/Uploads';
                    if (!file_exists($directoryUpload)) {
                        mkdir($directoryUpload);
                    }
                    move_uploaded_file($file['tmp_name'], $directoryUpload . '/' . $file['name']);
                    echo '<p style="color:blue">Upload thành công</p>';
                    echo '<p>Ảnh vừa upload : </p>';
                    echo "<img src='Uploads/" . $file['name'] . "' alt='Image'>";
                    echo "<p>Tên file : " . $file['name'] . "</p>";
                    echo "<p>Định dạng file : " . $extension . "</p>";
                } else {
                    echo 'upload file không thành công';
                }
            }
        }
        else echo"<p style='color:red'>Bạn chưa upload file</p> ";
    }

    ?>

</body>

</html>