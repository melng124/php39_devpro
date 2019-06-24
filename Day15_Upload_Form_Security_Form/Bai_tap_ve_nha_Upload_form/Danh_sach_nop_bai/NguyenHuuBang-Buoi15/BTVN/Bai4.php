<html>
<head>
    <title>Bai4</title>
</head>
<body>
<table align="center">
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <td>
                <label>Text</label><br/>
                <input type="text" name="text" size="40" placeholder="placeholder..."
                       value="<?php echo isset($_POST['text']) ? $_POST['text']:''?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Check Box</label><br/>
                <input type="checkbox" name="check"/>Check1<br/>
                <input type="checkbox" name="check"/>Check2<br/>
                <input type="checkbox" name="check"/>Check3<br/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Textarea</label><br/>
                <textarea rows="4" cols="40" name="area"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label>Radio button</label>
                <input type="radio" name="radio" />yep
                <input type="radio" name="radio" />nope
                <input type="radio" name="radio" />none
            </td>
        </tr>
        <tr>
            <td>
                <select name="select">
                    <option value="1">Option1</option>
                    <option value="2">Option2</option>
                    <option value="3">Option3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Uploads file</label><br/>
                <input type="file" name="UpLoad"/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit"/>
            </td>
        </tr>
    </form>
</table>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $fileName = $_FILES['UpLoad']['name'];
    $fileType = $_FILES['UpLoad']['type'];
    $fileTmpName = $_FILES['UpLoad']['tmp_name'];
    $fileError = $_FILES['UpLoad']['error'];
    $fileSize = $_FILES['UpLoad']['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ['jpg', 'png', 'jpeg'];
    $uploadDirectory = __DIR__ . '/uploads';
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory);
    }
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) {
            if (empty($_POST['text'])) {
                echo "<p style='color: red'>Text không được để trống</p>";
            }
            if(empty($_POST['area'])){
                echo "<p style='color: red'>Textarea không được để trống</p>";
            } else {
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = $uploadDirectory . "/" . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "<p style='color: blue'>Thành công</p>";
                echo '<p>Tên bạn là ' . $_POST['name'] . '</p>';
                echo "<img src='uploads/$fileNewName'/>";
                echo "<p>Tên File : $fileNewName</p>";
                echo "<p>Kiểu : $fileType</p>";
                echo "<p>Kích thước : $fileSize</p>";
            }

        } else {
            echo "<p style='color: red'>Có Lỗi sảy ra trong quá trình upload</p>";
        }
    } else {
        echo "<p style='color: red'>File Không có định dạng ảnh</p>";
    }
}
?>

