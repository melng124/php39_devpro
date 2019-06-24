<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/20/2019
 * Time: 9:55 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet"
          href="css/bootstrap.min.css" />
    <link rel="stylesheet"
          href="css/all.min.css" />
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="wrap-content" style="text-align: left;color: #000">
            Text <br>
            <input type="text" placeholder="Placeholder" name="name">
            <br>
            Checkbox
            <br>
            <input type="checkbox" name="checkbox[]" value="1" /> Check1<br>
            <input type="checkbox" name="checkbox[]" value="2" /> Check2<br>
            <input type="checkbox" name="checkbox[]" value="3" /> Check3<br>
            <textarea cols="35" rows="5" name="Textarea"></textarea><br>
            <br>
            Radio button<br>
            <input type="radio" name="gender" value="1" /> yep
            <input type="radio" name="gender" value="2" /> nope
            <input type="radio" name="gender" value="3" /> none
            <br>
            Select:
            <br>
            <select name="select">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <br>
            Upload Files <br>
            <input type="file" name="upload2">
            <br>
            <br>
            <input type="submit" class="btn btn-primary btn-lg btn-block" name="ok"  value="Submit">
        </div>
    </div>
</form>
</body>
</html>
<?php
    if (isset($_POST['ok'])) {
        echo "<pre>";
        print_r($_FILES);
        if (empty($_POST['name'])) {
            echo "<p style='color: red'> mời điền đủ text</p>";
        }elseif(empty($_POST['Textarea'])){
            echo " <p style='color:red;'> khong duoc de trong truong nay</p>";
        }else{
            $checkbox = '';
            if (isset($_POST['checkbox'])) {
                $checkboxArr = $_POST['checkbox'];
                foreach ($checkboxArr as $value) {
                    switch ($value) {
                        case 1 :
                            $checkbox .= 'Option1 ';
                            break;
                        case 2 :
                            $checkbox .= 'Option2 ';
                            break;
                        case 3 :
                            $checkbox .= 'Option3 ';
                            break;
                    }
                }
                echo '<p>Identifi course taken'.$checkbox.'</p>';
            }
            $radioText = '';
            if (isset($_POST['gender'])) {
                switch ($_POST['gender']) {
                    case 1 :
                        $radioText = " Option 1";
                        break;
                    case 2 :
                        $radioText = " Option 2";
                        break;
                    case 3:
                        $radioText = " Option 3";
                        break;
                }
                echo "select  : $radioText";
            }
        }
        if (isset($_POST['upload'])) {
            echo '<pre>';
            print_r($_FILES);
            if (isset($_FILES['upload'])) {
                $fileArr = $_FILES['upload'];
                if ($fileArr['error'] != 0) {
                    echo " <p style='color: red;'>có lỗi</p>";
                } else {
                    $uploadfileDiretory = __DIR__ . '/upload';
                    if (!file_exists($uploadfileDiretory)) {
                        mkdir($uploadfileDiretory);
                    }
                    $isUpdate = move_uploaded_file($fileArr['tmp_name'], $uploadfileDiretory . '/' . $fileArr['name']);
                    if ($isUpdate) {
                        if ($fileArr['size'] > 1048576) {
                            echo " <p style='color: red'>file phải nhỏ hơn 1mb</p>";
                            return true;
                        } else {
                            echo " Upload thành công";
                            echo 'Tên file:' . $fileArr['name'] . '<br>';
                            echo 'kiểu file:' . $fileArr['type'] . '<br>';
                            echo ' kích thước file:' . $fileArr['size'] . '<br>';
                        }
                    }
                }
            }
        }
    }
?>