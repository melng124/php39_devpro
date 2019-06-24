<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Nhập tên
            </td>
            <td>
                <input type="text" name="name" value="">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="file" name="update">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="submit">
            </td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['submit'])){
    echo '<pre>';
    print_r($_FILES);
    if (empty($_POST['name'])){
        echo 'không để tên trống';
    }
    else{
        if(isset($_FILES['update'])){
            $fileupload=$_FILES['update'];
            $extention=$fileupload['name'];
            $duoi = pathinfo($extention, PATHINFO_EXTENSION);
            if($fileupload['error']!=0){
                echo'có lỗi';
            }
            else{
                if ($fileupload['size']>2000000){
                    echo'kích thước file quá lớn';
                }
                elseif ($duoi!='jpg'&&$duoi!='jpeg'&&$duoi!='png'&&$duoi!='gif'){
                    echo 'không phải ảnh';
                }
                else{
                    $uploadfile=__DIR__.'/img';
                    if(!file_exists($uploadfile)){
                        mkdir($uploadfile);
                    }
                    $is_upload=move_uploaded_file($fileupload['tmp_name'],$uploadfile.'/'.$fileupload['name']);
                    if ($is_upload){
                        echo 'Upload file thành công <br/>';
                        echo 'Tên file :'.$fileupload['name'].'<br/>';
                        echo 'Kiểu file :'.$fileupload['type'].'<br/>';
                        echo 'Kích cỡ file :'.$fileupload['size'].'<br/>';
                    }
                    else{
                        echo'không upload dc';
                    }
                }
            }
        }
    }


}
?>