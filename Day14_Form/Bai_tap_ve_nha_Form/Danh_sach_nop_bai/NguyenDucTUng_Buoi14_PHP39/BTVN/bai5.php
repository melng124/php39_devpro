<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
</head>
<style type="text/css">
	.error{
		color: red;
		font-style: italic;
	}
</style>
<body>
	<div class="container-fluid">
		<div class="col-md-4 col-md-offset-4" >
			<h1 class="text-center">Registration FORM</h1>
			<form action="" method="post">
				<div class="form-group">
					<label>First name</label>
					<input type="text" name="FName" class="form-control" value="<?php echo isset($_POST['FName']) ? ($_POST['FName']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["FName"]) && $_POST["FName"] == "") ? "Họ không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<label>Last name</label>
					<input type="text" name="LName" class="form-control"value="<?php echo isset($_POST['LName']) ? ($_POST['LName']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["LName"]) && $_POST["LName"] == "") ? "Tên không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<label>User name</label>
					<input type="text" name="User" class="form-control"value="<?php echo isset($_POST['User']) ? ($_POST['User']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["User"]) && $_POST["User"] == "") ? "Tài khoản không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<label>Email Address</label>
					<input type="text" name="Email" class="form-control"value="<?php echo isset($_POST['Email']) ? ($_POST['Email']) : ''; ?>">
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" name="Password" class="form-control"value="<?php echo isset($_POST['Password']) ? ($_POST['Password']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["Password"]) && $_POST["Password"] == "") ? "Password không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" name="Confirm" class="form-control"value="<?php echo isset($_POST['Confirm']) ? ($_POST['Confirm']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["Confirm"]) && $_POST["Confirm"] == "") ? "Password không được để trống" : "" ?></span>
				</div>
				<div class="form-group">
					<center>
						<button type="submit" class="btn btn-primary" name="submit">Save</button>
					</center>
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		$fname    = $_POST["FName"];
		$lname    = $_POST["LName"];
		$user     = $_POST['User'];
		$email    = $_POST['Email'];
		$password = $_POST['Password'];
		$confirm  = $_POST['Confirm'];
		if((!empty($fname))&&(!empty($lname))&&(!empty($user))&&(!empty($email))&&(!empty($password))&&(!empty($confirm))){
			echo "Bạn đã đăng kí thành công";
			echo "<br/>Họ: $fname";
			echo "<br/>Tên: $lname";
			echo "<br/>Tài khỏan: $user";
			echo "<br/>Địa chỉ email: $email";
			echo "<br/>Password: $password";
		}

	}else{
		echo "không tồn tại";
	}
?>