<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Bai 1</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>
<body>
<b>Select a file to upload</b>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upFile"/><br/>
    <input type="submit" class="btn btn-primary" name="btnSubmit" value="Upload"/>
</form>
<?php
if(isset($_POST['btnSubmit'])){
//    echo "<pre>";
//    print_r($_FILES);
    if(isset($_FILES['upFile'])){
        $fileArr = $_FILES['upFile'];
        $extension = strtolower(pathinfo($fileArr['name'],PATHINFO_EXTENSION));
        $type = ['jpg', 'jpeg', 'png', 'gif'];
        if($fileArr['size'] > 1048576){
            echo "<p style='color: red'>File upload không được > 1Mb</p>";
        }
        else if(!in_array($extension,$type)){
            echo "<p style='color: red'>Cần upload file có định dạng ảnh</p>";
        }
        else{
            $path = __DIR__ . '/uploads';
            if(!file_exists($path)){
                mkdir($path);
            }
            $isUpload = move_uploaded_file($fileArr['tmp_name'], $path.'/'.$fileArr['name']);
        }
        if($isUpload){
            echo 'Upload file thành công!<br/>';
            echo 'Tên file: '.$fileArr['name'].'<br/>';
            echo 'Kiểu file: '.$fileArr['type'].'<br/>';
        }
    }
}
?>
</body>
</html>