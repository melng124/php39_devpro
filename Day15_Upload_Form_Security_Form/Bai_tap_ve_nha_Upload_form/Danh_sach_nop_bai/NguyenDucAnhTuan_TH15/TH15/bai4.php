<?php
if(isset($_POST['btnSubmit'])){
    $error = [];
    if(isset($_FILES['upFile'])) {
        $fileArr = $_FILES['upFile'];
        $extension = strtolower(pathinfo($fileArr['name'], PATHINFO_EXTENSION));
        $type = ['jpg', 'jpeg', 'png', 'gif'];
        if (empty($_POST['txtText'])) {
            $error['txtText'] = 'Trường text không được để trống';
        } else {
            $text = $_POST['txtText'];
        }
        if ($_POST['check'] == '') {
            $error['check'] = 'Phải chọn ít nhất 1 trường checkbox';
        } else {
            $checkArr = $_POST['check'];
        }
        if (empty($_POST['txtArea'])) {
            $error['txtArea'] = 'Trường textarea không được để trống';
        } else {
            $area = $_POST['txtArea'];
        }
        if ($_POST['rd'] == '') {
            $error['rd'] = 'Cần check ít nhất 1 trường radio';
        } else {
            $radio = $_POST['rd'];
        }
        if (!in_array($extension, $type)) {
            $error['upFile'] = 'Cần upload ảnh';
        }
        if (!$error) {
            $path = __DIR__ . '/uploads';
            if (!file_exists($path)) {
                mkdir($path);
            }
            $isUpload = move_uploaded_file($fileArr['tmp_name'], $path . '/' . $fileArr['name']);
            if ($isUpload) {
                $checkboxText = '';
                if (isset($_POST['check'])) {
                    $checkArr = $_POST['check'];
                    foreach ($checkArr as $value) {
                        switch ($value) {
                            case 0:
                                $checkboxText .= 'Checkbox 1<br/>';
                                break;
                            case 1:
                                $checkboxText .= 'Checkbox 2<br/>';
                                break;
                            case 2:
                                $checkboxText .= 'Checkbox 3<br/>';
                                break;
                        }
                    }
                }
                $radioText = '';
                if (isset($_POST['rd'])) {
                    switch ($_POST['rd']) {
                        case 1:
                            $radioText = 'yep';
                            break;
                        case 2:
                            $radioText = 'nope';
                            break;
                        case 3:
                            $radioText = 'none';
                            break;
                    }
                }
                $selectText = '';
                if (isset($_POST['select'])) {
                    switch ($_POST['select']) {
                        case 1:
                            $selectText = 'option 1';
                            break;
                        case 2:
                            $selectText = 'option 2';
                            break;
                        case 3:
                            $selectText = 'option 3';
                            break;
                    }
                }
                $show = '<b style="color: #007bff">Thông tin cảu bạn:</b><br/>
                <b>Text: ' . $text . '</b><br/>
                <b>Checkbox: <br/>' . $checkboxText . '</b>
                <b>Textarea: ' . $area . '</b><br/>
                <b>Radio: ' . $radioText . '</b><br/>
                <b>Select :' . $selectText . '</b><br/>
                <b>Uploaf file:</b><img src="uploads/' . $fileArr['name'] . '" width="150px"/><br/>';
            }
        }
    }
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>bai 4</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <style type="text/css">
        .container{
            width: 50%;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Text</label>
            <input type="text" class="form-control" name="txtText" id="exampleFormControlInput1" placeholder="Placeholder">
            <div class="error">
                <?php echo $error['txtText']; ?>
            </div>
        </div>
        <div class="form-group">
            Checkbox
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check[]" id="defaultCheck1" value="0">
                <label class="form-check-label" for="defaultCheck1">
                    Checkbox1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check[]" id="defaultCheck2" value="1">
                <label class="form-check-label" for="defaultCheck2">
                    Checkbox 2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check[]" id="defaultCheck3" value="2">
                <label class="form-check-label" for="defaultCheck3">
                    Checkbox 3
                </label>
            </div>
            <div class="error">
                <?php echo $error['check']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Textarea</label>
            <textarea class="form-control" name="txtArea" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="error">
                <?php echo $error['txtArea']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select</label>
            <select class="form-control" name="select" id="exampleFormControlSelect1">
                <option value="1">option 1</option>
                <option value="2">option 2</option>
                <option value="3">option 3</option>
            </select>
        </div>
        <div class="form-group">
            Radio button<br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rd" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">yep</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rd" id="inlineRadio2" value="2">
                <label class="form-check-label" for="inlineRadio2">nope</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rd" id="inlineRadio3" value="3">
                <label class="form-check-label" for="inlineRadio3">none</label>
            </div>
            <div class="error">
                <?php echo $error['rd']; ?>
            </div>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="upFile"/>
            <div class="error">
                <?php echo $error['upFile']; ?>
            </div>
        </div>
        <button type="submit" name="btnSubmit" class="btn btn-primary form-control">Submit</button>
    </form>
</div>
<div class="show">
    <?php echo $show; ?>
</div>
</body>
</html>