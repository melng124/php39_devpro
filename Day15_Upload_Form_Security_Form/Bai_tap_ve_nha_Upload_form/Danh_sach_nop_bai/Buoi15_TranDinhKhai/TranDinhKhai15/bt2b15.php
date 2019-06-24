<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Document</title>
</head>

<body>
    <div class="col-md-4">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name </label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
            </div>
            <div class="form-group file1">
                <input type="file" class="form-control" name="upload" id="">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        $allowtypes    = ['jpg', 'png', 'jpeg', 'gif'];
        if (isset($_POST['submit'])) {
            if (empty($_POST['name'])) echo "<p style='color:red'> Name không được để trống</p>";
            elseif(isset($_FILES['upload'])) {
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
                        echo '<p >Tên của bạn : '.$_POST['name'].'</p>';
                        echo '<p>Avatar của bạn : </p>';
                        echo "<img src='Uploads/" . $file['name'] . "' alt='Image'>";
                        echo "<p>Tên file : " . $file['name'] . "</p>";
                        echo "<p>Định dạng file : " . $extension . "</p>";
                        echo "<p>Đường dẫn file trên project : " . $directoryUpload.'/'.$file['name'] . "</p>";
                        echo "<p>Kích thước file : " . $file['size'] . " Byte </p>";
                    } 
                    else {
                        echo 'upload file không thành công';
                    }
                }
            }
            else echo "<p style='color:red'> Bạn chưa upload file</p>"; 
        }

        ?>

    </div>
</body>

</html>