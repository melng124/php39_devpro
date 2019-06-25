<?php
	require_once("act_index.php");
	if((isset($_COOKIE['username']))||(isset($_SESSION['username']))){
		header("location:login_success.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/bai_1.css">
</head>
<body>
	<div class="main">
		<form action="" method="post"> 
			<div class="myForm">
				<label>Username</label>
				<input type="text" name="username" class="my-input">
			</div>
			<div class="myForm">
				<label>Password</label>
				<input type="password" name="password" class="my-input">
			</div>
			<div class="myForm">
				<input type="checkbox" name="remember" value="1"> Remember me
			</div>
			<div class="myForm">
				<input type="submit" name="submit" value="LOGIN" class="input-submit">
			</div>
		</form>
		<div class="error">
			<?php echo isset($error) ? $error : ""; ?>
		</div>
	</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	<?php if(isset($_COOKIE['dangxuat'])): ?>
		alert("Bạn đã đăng xuất thành công");
	<?php endif; ?>	
</script>