<!--1.	Dựng form upload như sau:-->
<!---->
<!--Yêu cầu validate:-->
<!--•	Chi cho phép upload các file ảnh, các file ảnh có đuôi là jpg, jpeg, png, gif. Khi upload không phải dạng ảnh, thì hiển thị lỗi màu đỏ “Cần upload file có định dạng ảnh”-->
<!--•	Chỉ cho phép upload ảnh dung lượng tối đa 1Mb, Khi upload dung lượng lớn hơn 1Mb, thì hiển thị lỗi màu đỏ “File upload không được > 1Mb”-->
<!--Gợi ý: 1Mb = 1024Kb = 2097152 Byte-->
<!--Sau khi submit form, hiển thị các thông tin ảnh như sau-->
<!--Ảnh vừa upload : <hiển-thị-ảnh>-->
<!--  Tên file: <giá-trị>-->
<!--    Định dạng file: <giá-trị>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="charset-utf8"/>
    <title>BT1</title>
</head>
<style type="text/css">
    .select-file {
        font-weight: bold;
    }

    .file-validate {
        color: #777070;
    }

    input[type=submit] {
        background: #1616d4;
        color: #fff;
        padding: 15px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        font-size: 16px;
    }

    .error {
        color: red;
    }
</style>
<body>
<?php
const UPLOAD_FOLDER = 'upload';
$error = '';
$result = '';
if (isset($_POST['submit'])) {
  $files = $_FILES['upload'];
  if ($files['error'] != 0) {
    $error = "File chưa được upload hoặc Upload file thất bại";
  } else {
    //lấy phần mở rộng của file dựa vào tên file, chuyển tất cả sang chữ thường
    $extension = strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));
    //bắt validate upload không phải định dạng ảnh
    if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
      $error = 'Cần upload file có định dạng ảnh (jpg, png, gif, jpeg)';
      //bắt validate upload ảnh dung lượng > 1MB
    } else if ($files['size'] > 1024 * 1024) {
      $error = 'File upload dung lượng không được lớn hơn 1MB';
    } else {
      //upload file
      $dirUploads = __DIR__ . '/' . UPLOAD_FOLDER;
      //tạo thư mục upload nếu không tồn tại
      if (!file_exists($dirUploads)) {
        mkdir($dirUploads);
      }
      $isUploadSusscess = move_uploaded_file($files['tmp_name'], $dirUploads . '/' . $files['name']);
      if ($isUploadSusscess) {
        $pathImage = UPLOAD_FOLDER . '/' . $files['name'];
        $result = "Ảnh vừa upload: <img width='50' src='$pathImage' /> <br />";
        $result .= "Tên file: " . $files['name'] . " <br />";
        $result .= "Định dạng file: " . $extension . " <br />";
      } else {
        $error = 'Có lỗi xảy ra, không thể upload file';
      }
    }
  }
}
?>
<form method="post" action="" enctype="multipart/form-data">
    <p class="select-file">Select file to upload</p>
    <input type="file" name="upload"/>
    <p class="file-validate">
        Only jpg, jpeg, png, gif with maximum size of 1MB is allowed
    </p>
    <input type="submit" name="submit" value="Upload">
</form>
<p class='error'><?php echo $error ?></p>
<p><?php echo $result ?></p>
</body>
</html>