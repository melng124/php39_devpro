<form method="post" action="" enctype="multipart/form-data">

  <input type="file" name="upload" multiple/>
  <input type="submit" name="submit" value="Submit" />
</form>
<?php
  if (isset($_POST['submit'])) {
    if (isset($_FILES['upload'])) {
      $files = $_FILES['upload'];
      echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
      print_r($files);
      echo "</pre>";
      //file ko bị lỗi
      if ($files['error'] == 0) {
        //tạo thư muc chứa file upload nếu chưa tồn tại
        $directoryUpload = __DIR__ . '/Uploads';
          if (!file_exists($directoryUpload)) {
            mkdir($directoryUpload);
          }
          move_uploaded_file($files['tmp_name'], $directoryUpload . '/' . $files['name']);
          echo 'Upload thành công';
      }
      else {
        echo 'upload file không thành công';
      }
    }
  }
?>