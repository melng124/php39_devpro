<!DOCTYPE html>
<html>
<head>
	<title>Form upload</title>
	<link rel="stylesheet" type="text/css" href="css/bai_1.css">
</head>
<body>
	<div class="main">
		<form action="" method="post" enctype="multipart/form-data">
			<h3>Select a file to upload</h3>
			<input type="file" name="upload"><br/>
			<p>Only jpg,png and gif file with maximum size of 1 MB is allowed.</p>
			<button type="submit" name="submit">Upload</button>
		</form>
	</div>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		echo '<pre>';
		print_r($_FILES);
		if(isset($_FILES['upload'])){
			$uploads = $_FILES['upload'];
				if($uploads['size']>2097152){
					echo "Không được phép upload file > 1MB";
				}elseif(($uploads['type'] != "image/jpeg")&&($uploads['type'] != "image/png")&&($uploads['type'] != "image/gif")){
					echo "Không cho phép upload đuôi file này, thử lại";
				}else{
					$file_dir = __DIR__ . "\myImages";
					if(!file_exists($file_dir)){
						mkdir($file_dir);
					}
					$result = move_uploaded_file($uploads['tmp_name'], $file_dir . "\\" . $uploads['name']);
					if($result == true){
						echo '<p style="color:red">Chúc mừng, file của cậu đã upload thành công </p>';
					}else{
						echo "Upload thất bại, thử lại";
					}
				}
		}else{
			echo "Không tìm thấy file, upload thất bại";
		}
	}
?>