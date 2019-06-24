<form action="" method="post" enctype="multipart/form-data">
    <p>Select a file to upload</p>
    <input type="file" name="file">
    <p style="color:red;"><?php echo (isset($_POST['submit'])&&isset($_FILES['file'])&&$_FILES['file']['size']>1000000)?"dung lượng vượt quá 1 MB" :''?></p>
    <p><input style="background-color: blue;color: white;border-radius: 3px"  type="submit" value="Upload" name="submit"> </p>
</form>
<?php
    if (isset($_POST['submit'])){
        echo "<pre>";
        print_r($_FILES);
        if (isset($_FILES['file'])){
            $file=$_FILES['file'];
            $extention=$_FILES['file']['name'];

            $duoi = pathinfo($extention, PATHINFO_EXTENSION);
            echo $duoi;
            if ($duoi!='jpg'&&$duoi!='jpeg'&&$duoi!='png'&&$duoi!='gif'){
                echo "<p>không phải đinh dạng ảnh</p>";
            }
            else{
                if($file['error']!=0){
                    echo "<p style='color: red'>Xảy ra lỗi khi upload</p>";
                }
                else{
                    $upload=__DIR__.'/img';
                    if (!file_exists($upload)){
                        mkdir($upload);
                    }
                    $is_upload=move_uploaded_file($file['tmp_name'],$upload.'/'.$file['name']);
                    if ($is_upload){
                        echo 'Upload file thành công <br/>';
                        echo 'Tên file :'.$file['name'].'<br/>';
                        echo 'Kiểu file :'.$file['type'].'<br/>';
                        echo 'Kích cỡ file :'.$file['size'].'<br/>';
                    }
                    else{
                        echo "<p style='color: red'>Xảy ra lỗi khi upload</p>";
                    }
                }
            }

        }

    }
?>