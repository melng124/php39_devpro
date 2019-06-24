<?php
	require("Action/bai2_action.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form upload</title>
	<link rel="stylesheet" type="text/css" href="css/bai_2.css">
</head>
<body>
	<div class="main">
			<h3>Upload file</h3>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-input">
				<p>Tên của bạn</p>
				<input type="text" placeholder="User Name" name="username" class="myForm">
				<span><?php echo (isset($text_error)) ? "$text_error" : "" ?></span>
			</div>
			<div class="form-upload">
				<p>Upload files</p>
					<input type="file" name = "file" class="myForm">
					<span><?php echo (isset($file_error)) ? "$file_error" : "" ?></span>
			</div>
			<div class="">
				<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>
	</div>
	<div class="result">
		<?php if(isset($ketqua)): ?>
				<h1>Đăng kí thành công!</h1>
				<?php echo $ketqua ?>
		<?php endif; ?>
	</div>
</body>
</html>
