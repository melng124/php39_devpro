<?php
	require("Action/bai3.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form upload</title>
	<link rel="stylesheet" type="text/css" href="css/bai_3.css">
</head>
<body>
	<div class="main">
		<h1>Create an account</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-input">
				<input type="text" placeholder="Username" name="username" class="my_input" value="<?php echo (isset($_POST['username'])) ? $_POST['username'] : "" ?>">
				<span><?php echo (isset($text_error)) ? "$text_error" : "" ?></span>
			</div>
			<div class="form-input">
				<input type="email" placeholder="Email" name="email" class="my_input" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : "" ?>">
				<span><?php echo (isset($email_error)) ? "$email_error" : "" ?></span>
			</div>
			<div class="form-input">
				<input type="password" placeholder="Password" name="password" class="my_input" value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : "" ?>">
				<span><?php echo (isset($password_error)) ? "$password_error" : "" ?></span>
			</div>
			<div class="form-input">
				<input type="password" placeholder="Confirm Password" name="confirm" class="my_input" value="<?php echo (isset($_POST['confirm'])) ? $_POST['confirm'] : "" ?>">
				<span><?php echo (isset($confirm_error)) ? "$confirm_error" : "" ?></span>
			</div>
			<div class="form-upload">
				Select your avatar : <input type="file" name="file"><br/>
				<span><?php echo (isset($file_error)) ? "$file_error" : "" ?></span>
			</div>
			<div class="">
				<button type="submit" name="submit">Register</button>
			</div>
		</form>
	</div>
		<?php if(isset($ketqua)): ?>
			<h1>Đăng kí thành công!</h1>
			<?php echo $ketqua ?>
		<?php endif; ?>
</body>
</html>

