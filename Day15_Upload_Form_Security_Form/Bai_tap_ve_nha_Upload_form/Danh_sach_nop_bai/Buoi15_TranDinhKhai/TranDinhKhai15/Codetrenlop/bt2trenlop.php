<form method="post" action="" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="upload" multiple />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) echo "<p style='color:red'> Name không được để trống</p>";
    elseif (isset($_FILES['upload'])) {
        $files = $_FILES['upload'];
        if ($files['size'] > 2048*1024) echo "<p style='color:red'> Kích thước file phải không quá 2MB</p>";
        elseif(getimagesize($_FILES["upload"]["tmp_name"])==false) echo "<p style='color:red'> Chỉ được tải lên file định ạng ảnh </p>";
        else {
            echo "Name : ".$_POST['name']."<br/>";

            echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
            print_r($files);
            echo "</pre>";
            //file ko bị lỗi
            if ($files['error'] == 0) {
                //tạo thư muc chứa file upload nếu chưa tồn tại
                $directoryUpload = __DIR__ . '/Uploads';
                if (!file_exists($directoryUpload)) {
                    mkdir($directoryUpload);
                }
                move_uploaded_file($files['tmp_name'], $directoryUpload . '/' . $files['name']);
                echo 'Upload thành công';
            } else {
                echo 'upload file không thành công';
            }
        }
    }
}

?>