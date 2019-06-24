<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/19/2019
 * Time: 6:11 PM
 */
?>
<form action="" method="post" enctype="multipart/form-data">

    <h3>Select a file to upload </h3>
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="upload" value="Choose File">
    <p>Only jpg.jpeg.png and gif file with maximum size of 1 MB is allowed</p>
    <input type="submit" value="Upload" name="submit">
</form>
<?php
    if (isset($_POST['upload'])){
        echo '<pre>';
        print_r($_FILES);
        if (isset($_FILES['upload'])){
            $fileArr = $_FILES['upload'];
            if ($fileArr['error'] != 0){
                echo " <p style='color: red;'>có lỗi</p>";
            }
            else{
                $uploadfileDiretory = __DIR__.'/upload';
                if (!file_exists($uploadfileDiretory)){
                    mkdir($uploadfileDiretory);
                }
                $isUpdate = move_uploaded_file($fileArr['tmp_name'] ,$uploadfileDiretory.'/'.$fileArr['name']);
                if ($isUpdate){
                    if ($fileArr['size'] > 1048576){
                        echo " <p style='color: red'>file phải nhỏ hơn 1mb</p>";
                        return true;
                    }
                    else{
                        echo " Upload thành công";
                        echo 'Tên file:'.$fileArr['name'].'<br>';
                        echo 'kiểu file:'.$fileArr['type'].'<br>';
                        echo ' kích thước file:'.$fileArr['size'].'<br>';
                    }
                }
//                else{
//                    echo " Upload thành công";
//                    echo 'Tên file:'.$fileArr['name'].'<br>';
//                    echo 'kiểu file:'.$fileArr['type'].'<br>';
//                    echo ' kích thước file:'.$fileArr['size'].'<br>';
//                }
            }
        }

    }
?>