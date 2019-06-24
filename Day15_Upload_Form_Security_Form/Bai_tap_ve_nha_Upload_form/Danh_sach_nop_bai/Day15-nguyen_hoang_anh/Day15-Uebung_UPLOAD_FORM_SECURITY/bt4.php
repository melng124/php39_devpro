<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài Tập 4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/mystyle-4.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scales=1, shrink-to-fit=no">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="text">Text</label>
    <input type="text" class="form-control" id="text" name="text" placeholder="Placeholder"
           value="<?php echo isset($_POST['text']) ? $_POST['text'] : '' ?>">
    <label for="check">Check box</label> <br>
    <input type="checkbox" name="check[]" id="check" value="0"> Checkbox 1 <br>
    <input type="checkbox" name="check[]" id="check" value="1"> Checkbox 2 <br>
    <input type="checkbox" name="check[]" id="check" value="2"> Checkbox 3 <br>
    <label for="textarea">Textarea</label>
    <textarea name="textarea" id="textarea" cols="30" rows="6" class="form-control"></textarea>
    <label for="radio">Radio button</label> <br>
    <input type="radio" name="radio" id="radio" value="0"> yep
    <input type="radio" name="radio" id="radio" value="1"> nope
    <input type="radio" name="radio" id="radio" value="2"> none <br>
    <label for="select">Select</label>
    <select name="select" id="select" class="form-control">
        <option value="0">Option 1</option>
        <option value="1">Option 2</option>
        <option value="2">Option 3</option>
    </select>
    <label for="upload">Upload files</label> <br>
    <input type="file" name="upload" id="upload">
    <button type="submit" name="submit-form">Submit</button>
    <div id="info">
        <?php
        if (isset($_POST['submit-form'])) {
            $text = $_POST['text'];
            $textarea = $_POST['textarea'];
            $select = $_POST['select'];
            if (empty($text)) {
                echo '<p style="color: red">Trường text không được để trống</p>';
            }
            elseif (empty($_POST['check'])) {
                echo '<p style="color: red">Cần check ít nhất 1 trường checkbox</p>';
            }
            elseif (empty($textarea)) {
                echo '<p style="color: red">Trường textarea không được để trống</p>';
            }
            elseif (empty($_POST['radio'])) {
                echo '<p style="color: red">Cần check ít nhất 1 trường radio</p>';
            }
            elseif (isset($_FILES['upload'])) {
                $fileUpload = $_FILES['upload'];
                $type_file = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
                $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
                if (!in_array(strtolower($type_file), $type_fileAllow)) {
                    echo '<p style="color: red">Cần upload ảnh</p>';
                }
                else {
                    $uploadDirectory = __DIR__ . '/uploads';
                    $path = $uploadDirectory . '/' . $fileUpload['name'];
                    if (!file_exists($uploadDirectory)) {
                        mkdir($uploadDirectory);
                    }
                    $isUploaded = move_uploaded_file($fileUpload['tmp_name'], $path);
                    if ($isUploaded) {
                        echo "Text: $text <br>";
                        $checkText = '';
                        $checkArr = $_POST ['check'];
                        foreach ($checkArr as $value) {
                            switch ($value) {
                                case 0: echo $checkText .= 'Checkbox 1 <br>'; break;
                                case 1: echo $checkText .='Checkbox 2 <br>'; break;
                                case 2: echo $checkText .= 'Checkbox 3 <br>'; break;
                            }
                        }
                        echo "Textarea: $textarea";
                        $radio = $_POST['radio'];
                        switch ($radio) {
                            case 0: echo 'yep <br>'; break;
                            case 1: echo 'nope <br>'; break;
                            case 2: echo 'none <br>'; break;
                        }
                        switch ($select) {
                            case 0: echo 'Option 1 <br>'; break;
                            case 1: echo 'Option 2 <br>'; break;
                            case 2: echo 'Option 3 <br>'; break;
                        }
                        echo 'Upload file: ';
                        echo '<img src="uploads/' . $fileUpload['name'] . '" alt="" width="100px" height="100px">';
                    }
                }
            }
        }
        ?>
    </div>
</form>
</body>
</html>