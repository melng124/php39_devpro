<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bt4b15.css">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-3 col-12"></div>
        <div class="col-md-6 col-12 formb4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">Text</label>
                    <input type="text" name="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                    <p>Checkbox</p>
                    <input type="checkbox" name="checkbox[]" id="" value="0"> Checkbox1<br />
                    <input type="checkbox" name="checkbox[]" id="" value="1"> Checkbox1<br />
                    <input type="checkbox" name="checkbox[]" id="" value="2"> Checkbox1<br />
                </div>
                <div class="form-group">
                    <label for="te1">Text</label>
                    <textarea name="textarea" class="form-control" id="te1" cols="30" rows="5"></textarea>
                </div>
                <div class="radio">
                    <p>Radio button</p>
                    <input type="radio" name="radio" id="" value="0">&nbsp &nbsp yep &nbsp &nbsp
                    <input type="radio" name="radio" id="" value="1">&nbsp &nbsp nope &nbsp &nbsp
                    <input type="radio" name="radio" id="" value="2">&nbsp &nbsp none &nbsp &nbsp
                </div>
                <div class="select">
                    <p>Select</p>
                    <select class="custom-select" name="select">
                        <option value="0">Option One</option>
                        <option value="1">Option Two</option>
                        <option value="2">Option Three</option>
                    </select>
                </div>
                <div class="upload">
                    <p>Upload files</p>
                    <input type="file" name="upload">
                </div>
                <input type="submit" class="submit" name="submit" value="Submit">
            </form>
            <?php
            $allowtypes    = ['jpg', 'png', 'jpeg', 'gif'];
            if (isset($_POST['submit'])) {
                if (empty($_POST['text'])) echo "<p style='color:red'>Trường Text không được để trống</p>";
                elseif (!isset($_POST['checkbox'])) echo "<p style='color:red'>Cần check ít nhất 1 giá trị checkbox</p>";
                elseif (empty($_POST['textarea'])) echo "<p style='color:red'>Trường Textarea không được để trống</p>";
                elseif (!isset($_POST['radio'])) echo "<p style='color:red'>Cần check ít nhất 1 giá trị Radio</p>";
                else {
                    if (isset($_FILES['upload'])) {
                        $file = $_FILES['upload'];
                        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                        if(!in_array($extension,$allowtypes))echo "<p style='color:red'>Bạn cần upload file định dạng ảnh</p>";
                        else{
                            if($file['error']==0){
                                $derectoryUpload=__DIR__.'/Uploads';
                                if(!file_exists($derectoryUpload)) mkdir($derectoryUpload);
                                move_uploaded_file($file['tmp_name'],$derectoryUpload.'/'.$file['name']);
                                echo"<p>Text     : ".$_POST['text']."</p>";
                                $checkboxText = '';
                                if (isset($_POST['checkbox'])) {
                                    $checkboxArr = $_POST['checkbox'];
                                    foreach ($checkboxArr as $value) {
                                        switch ($value) {
                                            case 0: $checkboxText .= 'Checkbox1, ';break;
                                            case 1: $checkboxText .= 'Checkbox2, ';break;
                                            case 2: $checkboxText .= 'Checkbox3,';break;
                                            }
                                    }
                                    echo '<p>Checkbox : ' .$checkboxText. '</p>';
                                }
                                echo"<p>Textarea : ".$_POST['textarea']."</p>";
                                $radio = '';
                                switch ($_POST['radio']) {
                                    case 0: $radio = 'yep';break;
                                    case 1: $radio = 'nope';break;
                                    case 2: $radio = 'none';break;
                                }
                                echo'<p>Checkbox : ' .$radio. '</p>';
                                $academicText = '';
                                switch ($_POST['select']) {
                                    case 0: $academicText = 'Option one';break;
                                    case 1: $academicText = 'Option tow';break;
                                    case 2: $academicText = 'Option three';break;
                                }
                                echo'<p>select : ' .$academicText. '</p>';
                                echo'<p>Upload files : </p>';
                                echo "<img src='Uploads/" . $file['name'] . "' alt='Image'>";

                            }
                        }
                    
                    }
                    else echo "<p style='color:red'>Bạn cần upload file</p>";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>