<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/20/2019
 * Time: 2:28 PM
 */
?>
<form action="" method="post" enctype="multipart/form-data">
    Select Img
    <br>

    Họ và tên:<input type="text" name="inputName" value="" />
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
    <input type="file" name="upload1" onchange="readURL(this);">
    <img id="blah"  />
    <input type="submit" value="submit" name="submit">
</form>
<style type="text/css">
    img{
        max-width:180px;
    }

</style>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php
    if(isset($_POST['submit'])){
        echo '<pre>';
        print_r($_FILES);
        $inputName = $_POST['inputName'];
        if (empty($_POST['inputName'])){
            echo "<p style='color: red'> Không được để trống trường này</p> ";
        }
        else {
            echo "Họ và tên: .$inputName";
        }
        if (isset($_FILES['upload1'])){
            $fileArr = $_FILES['upload1'];
            if ($fileArr['error'] != 0){
                echo "<p style='color: red'>có lỗi</p>.";
            }else{
                $uploadDirectory = __DIR__.'/upload1';
                if (!file_exists($uploadDirectory)){
                    mkdir($uploadDirectory);
                }
                $isUpdate = move_uploaded_file($fileArr['tmp_name'],$uploadDirectory.'/'.$fileArr['name']);
                if($isUpdate){
                    if($fileArr['size'] > 1048576){
                        echo "<p style='color: red'> file phải nhỏ hơn 1mb</p>";
                        return true;
                    }
                    else{
                        echo "upload thành công";
                        echo 'Tên file:'.$fileArr['name'].'<br>';
                        echo 'kiểu file:'.$fileArr['type'].'<br>';
                        echo 'kích thước file:'.$fileArr['size'].'<br>';
                    }
                }
            }
        }
        
    }
?>
