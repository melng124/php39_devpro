<form action="" method="post" enctype="multipart/form-data">
    <h2>Select a file to upload</h2><br/>
    <input type="file" name="UpLoad"/><br/>
    <p>Only jpg ,jpeg png and gif file with maximum size of 1 MB is allowed</p>
    <input type="submit" name="submit"/>

</form>
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
            if ($fileSize <= 2097152) {
                //Đổi tên ảnh
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = $uploadDirectory."/". $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "<p style='color: blue'>Thành công</p>";
                echo "<img src='uploads/$fileNewName'/>";
                echo "<p>Tên File : $fileNewName</p>";
                echo "<p>Kiểu : $fileType</p>";
                echo "<p>Kích thước : $fileSize</p>";

            } else {
                echo "<p style='color: red'>Anh có kích thước lớn hơn 2MB/p>";
            }

        } else {
            echo "<p style='color: red'>Có Lỗi sảy ra trong quá trình upload</p>";
        }
    } else {
        echo "<p style='color: red'>File Không có định dạng ảnh</p>";
    }
}
?>