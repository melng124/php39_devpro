<?php
	require_once("Action/bai4_action.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form upload</title>
	<link rel="stylesheet" type="text/css" href="css/bai_4.css">
</head>
<body>
	<div class="main">
			<form action="" method="post" enctype="multipart/form-data">
			<div class="form-input">
				<p>Text</p>
				<input type="text" placeholder="User Name" name="username" class="myForm">
				<span><?php echo (isset($text_error)) ? "$text_error" : "" ?></span>
			</div>
			<div class="form-input">
				<p>Checkbox</p>
				<input type="Checkbox" name="checkbox[]" value="1">Checkbox 1 <br/>
				<input type="Checkbox" name="checkbox[]" value="2">Checkbox 2 <br/>
				<input type="Checkbox" name="checkbox[]" value="3">Checkbox 3 <br/>
				<span><?php echo (isset($checkbox_error)) ? "$checkbox_error" : "" ?></span>
			</div>
			<div class="form-input">
				<p>Textarea</p>
				<textarea cols="10" rows="5" name="message"></textarea>
				<span><?php echo (isset($textarea_error)) ? "$textarea_error" : "" ?></span>
			</div>
			<div class="form-input">
				<p>Radio button</p>
				<input type="radio" name="radio" value="1">Yep
				<input type="radio" name="radio" value="2">Nope
				<input type="radio" name="radio" value="3">None
				<span><?php echo (isset($radio_error)) ? "$radio_error" : "" ?></span>
			</div>
			<div class="form-upload">
				<p>Select</p>
				<select name="select" class="myForm">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
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