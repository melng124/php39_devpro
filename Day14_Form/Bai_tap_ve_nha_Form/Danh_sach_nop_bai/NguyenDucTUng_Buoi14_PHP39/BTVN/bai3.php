<!DOCTYPE html>
<html>
<head>
	<title>Validate Form</title>
	<link rel="stylesheet" type="text/css" href="css/bai3.css">
</head>
<body>
<div class="content">
	<form action="" method="post">
		<div class="input-field">
			<div class="label">Username</div>
			<div class="text-input">
				<input type="text" name="Username" class="form-control"  value="<?php echo isset($_POST['Username']) ? ($_POST['Username']) : ''; ?>">
			</div>
		</div>
		<div class="input-field">
			<div class="label">Enter e-mail address</div>
			<div class="text-input">
				<input type="text" name="Email" class="form-control" value="<?php echo isset($_POST['Email']) ? ($_POST['Email']) : ''; ?>" >
			</div>
		</div>
		<div class="input-field">
			<div class="label">Enter Password</div>
			<div class="text-input">
				<input type="password" name="Password" class="form-control" value="<?php echo isset($_POST['Password']) ? ($_POST['Password']) : ''; ?>">
			</div>
		</div>
		<div class="input-field">
			<div class="label">Select academic level</div>
			<div class="text-input" class="form-control">
				<select name="level">
					<option value="1">Freshman</option>
					<option value="2">Junior</option>
					<option value="3">Professor</option>
					<option value="4">Doctor</option>
				</select>
			</div>
		</div>
		<div class="input-field">
			<div class="label">Indentify course taken</div>
			<div class="text-input" class="form-control">
				<input type="checkbox" name="checkbox[]" value="0">CSCI 1710<br/>
				<input type="checkbox" name="checkbox[]" value="1">CSCI 1800<br/>
				<input type="checkbox" name="checkbox[]" value="2">CSCI 2800<br/>
				<input type="checkbox" name="checkbox[]" value="3">CSCI 2150<br/>
				<input type="checkbox" name="checkbox[]" value="4">CSCI 2910<br/>
			</div>
		</div>
		<div class="input-field">
			<div class="label">Select concentration</div>
			<div class="text-input">
				<input type="radio" name="concentration" value="1">Computer sience (CS) <br/>
				<input type="radio" name="concentration" value="2">Infomation sience (IS) <br/>
				<input type="radio" name="concentration" value="3">Infomation Technology (IT)
			</div>
		</div>
		<div class="input-field">
			<div class="text-input">
				<textarea cols="100" rows="5" name="intro"></textarea>
			</div>
		</div>
		<div class="input-field">
			<center>
				<input type="submit" name="submit" value="submit">
			</center>
		</div>
	</form>
</div>
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		$username = $_POST['Username'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$level    = $_POST['level'];
		$intro  = htmlentities($_POST['intro']);
		if($level == 1){
			$result_level = "Freshman";
		}elseif($level == 2){
			$result_level = "Junior";
		}elseif($level == 3){
			$result_level = "Professor";
		}else{
			$result_level = "Doctor";
		}
		if(isset($_POST['checkbox'])){
			$arrCheckbox = $_POST['checkbox'];
			foreach ($arrCheckbox as $key) {
				$result_checkbox = "$key ";		
			}}
		if(isset($_POST['concentration'])){
			$concentration = $_POST['concentration'];
				if($concentration == 1){
					$result_concentration = "Computer sience (CS)";
				}elseif($concentration == 2){
					$result_concentration = "Infomation sience (IS)";
				}else{
					$result_concentration = "Infomation Technology (IT)";
				}
		}else{
			echo "<p style='color:red'>Chuyên ngành không được để trống</p>";
			die();
		}

		if(empty($username)){
			echo "<p style='color:red'>Username không được để trống</p>";
		}elseif(empty($password)){
			echo "<p style='color:red'>Password không được để trống</p>";
		}elseif(strlen($password)<8){
			echo "<p style='color:red'>Password không được nhỏ hơn 8 kí tự</p>";
		}elseif(empty($intro)){
			echo "<p style='color:red'>Phần giới thiệu không thể để trống</p>";
		}else{
			echo "<p style='color:blue'>Đăng nhập thành công!!</p>";
			echo "Thông tin của bạn<br/>";
			echo "Username: $username<br/>";
			echo "Email   : $email<br/>";
			echo "Password: $password<br/>";
			echo "Level: $result_level<br/>";
			echo "Concentration : $result_concentration<br/>";
			echo "Introduce: $intro" ;
		}

	}
?>