<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>bai 2</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label>Nhập tên:</label>
    <input type="text" name="txtName" value="<?php echo isset($_POST['txtName'])? $_POST['txtName'] : ''; ?>"/><br/>
    <label>Avatar:</label>
    <input type="file" name="upFile"/><br/>
    <input type="submit" name="btnSubmit" value="Save"/>
</form>
<?php
if(isset($_POST['btnSubmit'])){
    if(isset($_FILES['upFile'])){
        $name = $_POST['txtName'];
        $fileArr = $_FILES['upFile'];
        $extension = strtolower(pathinfo($fileArr['name'], PATHINFO_EXTENSION));
        $type = ['jpg', 'jpeg', 'png', 'gif'];
        if(empty($name)){
            echo "<p style='color:red;'>Name không dược để trống</p>";
        }
        elseif($fileArr['size'] > 2097152){
            echo "<p style='color:red;'>File upload không được > 2Mb</p>";
        }
        elseif (!in_array($extension, $type)){
            echo "<p style='color:red;'>Cần upload file có định dạng ảnh</p>";
        }
        else{
            $path = __DIR__ . '/uploads';
            if(!file_exists($path)){
                mkdir($path);
            }
            $isUpload = move_uploaded_file($fileArr['tmp_name'],$path.'/'.$fileArr['name']);
            if($isUpload){
                echo "Thông tin của bạn :<br/>";
                echo '<b>Tên của bạn: '.$name.'</b><br/>';
                echo '<b>Avatar của bạn:</b><img src="uploads/'.$fileArr['name'].'" width = "150px"/><br/>';
                echo '<b>Tên file: '.$fileArr['name'].'</b><br/>';
                echo '<b>Định dạng file: '.$fileArr['type'].'</b><br/>';
                echo "<b>Đường dẫn file: ".$path.'\\'.$fileArr['name']."</b><br/>";
                echo '<b>Kích thước file: '.($fileArr['size']/1048576).'Mb</b>';
            }
        }
    }
}
?>
</body>
</html>