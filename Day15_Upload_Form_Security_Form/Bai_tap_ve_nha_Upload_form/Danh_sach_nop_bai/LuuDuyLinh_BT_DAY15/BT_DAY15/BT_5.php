<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Text</p>
        <p><input style="width: 100%;height:30pxborder-radius: 5px" type="text" name="text" value=""> </p>
        <p>Checkbox</p>
        <input type="checkbox" name="checkbox[]" value="1">Checkbox1<br>
        <input type="checkbox" name="checkbox[]" value="2">Checkbox2<br>
        <input type="checkbox" name="checkbox[]" value="3">Checkbox3<br>
        <p>Textarea</p>
        <textarea name="textarea" rows="4" cols="40" ></textarea>
        <p>Radio</p>
        <input type="radio" name="radio" value="1"> yep
        <input type="radio" name="radio" value="2"> nope
        <input type="radio" name="radio" value="3"> none
        <p>Select</p>
        <select name="select" style="width: 100%">
            <option value="1">Option1</option>
            <option value="2">Option2</option>

        </select>
        <p>Upload File</p>
        <input type="file" name="upload">
        <p><input style=" height:40px;width: 100%;border-radius: 5px" type="submit" value="submit" name="submit" </p>
    </form>
    <?php
        if (isset($_POST['submit'])){
            if (empty($_POST['text'])){
                echo"<p style='color: red'>không để text trống</p>";
            }
            elseif (isset($_POST['checkbox'])==false){
                echo"<p style='color: red'>Chưa chọn check box</p>";
            }
            elseif (empty($_POST['textarea'])){
                echo"<p style='color: red'>textarea trống</p>";
            }
            elseif (isset($_POST['radio'])==false){
                echo"<p style='color: red'>chưa chọn radio</p>";
            }
            elseif (isset($_FILES['upload'])==false){
                echo"<p style='color: red'>Chưa chọn ảnh</p>";
            }
            else{
                echo '<pre>';
                print_r($_FILES);
                $file=$_FILES['upload'];
                $extention=$_FILES['upload']['name'];
                $duoi = pathinfo($extention, PATHINFO_EXTENSION);

                if ($duoi!='jpg'&&$duoi!='jpeg'&&$duoi!='png'&&$duoi!='gif'){
                    echo '<p style="color: red">Không là File ảnh</p>';
                }

                else{
                    if($file['error']!=0){
                        echo "<p style='color: red'>Xảy ra lỗi khi upload</p>";
                    }
                    else{
                        $upload=__DIR__.'/avatar';
                        if (!file_exists($upload)){
                            mkdir($upload);
                        }
                        $is_upload=move_uploaded_file($file['tmp_name'],$upload.'/'.$file['name']);
                        if ($is_upload){
                            echo 'Thông tin của bạn là <br/>';
                            echo 'Text :'.$_POST['text'].'<br/>';
                            $string='';
                            $checkArr=$_POST['checkbox'];
                            foreach ($checkArr as $value){
                                switch ($value){
                                    case 1: $string.="Checkbox1";break;
                                    case 2: $string.="Checkbox2";break;
                                    case 3: $string.="Checkbox3";break;
                                }
                            }
                            echo "Checkbox :".$string."<br/>";
                            echo "TextArea :".$_POST['textarea']."<br/>";
                            $radio='';
                            switch ($_POST['radio']){
                                case 1: $radio='yep';break;
                                case 2: $radio='nope';break;
                                case 3: $radio='none';break;
                            }
                            echo "Radio : $radio <br/>";
                            $select='';
                            switch ($_POST['select']){
                                case 1 : $select="Option1";break;
                                case 2 : $select="Option2";break;
                            }
                            echo "Avatar :<img src='avatar/$extention'>";
                        }
                        else{
                            echo "<p style='color: red'>Xảy ra lỗi khi upload</p>";
                        }
                    }
                }
            }

        }
    ?>
</body>
</html>