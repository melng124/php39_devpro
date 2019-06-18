<!DOCTYPE html>
<html>
<head>
	<title>Form Validate</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bai2.css">
<body>
	<form action="" method="post">
		<table border="1">
			<tr>
				<td colspan="2"><center>Bài 2</center></td>
			</tr>
			<tr>
				<td width="40%">Name</td>
				<td>
					<input type="text" name="Name" value="<?php echo isset($_POST['Name']) ? ($_POST['Name']) : ''; ?>">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="pasword" name="Password" value="<?php echo isset($_POST['Password']) ? ($_POST['Password']) : ''; ?>">
				</td>
			</tr>
			<tr>
				<td>User Type</td>
				<td>
					<select name="User">
						<option value="0">--Select--</option>
						<option value="1" <?php echo (isset($_POST['User'])&&($_POST['User']==1)) ? "selected = 'selected'" : "" ?>>Customer</option>
						<option value="2" <?php echo (isset($_POST['User'])&&($_POST['User']==2)) ? "selected = 'selected'" : "" ?>>Stranger</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="40%">Display name</td>
				<td>
					<input type="text" name="Display" value="<?php echo isset($_POST['Display']) ? ($_POST['Display']) : ''; ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea name="Address" cols="30" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="Email" value="<?php echo isset($_POST['Email']) ? ($_POST['Email']) : ''; ?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="0" <?php echo (isset($_POST['gender'])&&$_POST['gender']) == 0 ? "checked='checked'":'' ?>>Male
					<input type="radio" name="gender" value="1" <?php echo (isset($_POST['gender'])&&$_POST['gender']) == 1 ? "checked='checked'":'' ?>>Female
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="checkbox[]" value="1" <?php echo (isset($mycheckbox))&&($mycheckbox) == 1 ? "checked='checked'":'' ?>>I accept Term and Conditions</td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input type="Submit"  value="Submit" name="submit">
					</center>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		$name     = $_POST['Name'];
		$password = $_POST['Password'];
		$user 	  = $_POST['User'];
		$display  = $_POST['Display'];
		$address  = htmlentities($_POST['Address']);
		$email 	  = $_POST['Email'];
		$gender   = ($_POST['gender'] == 0) ? "Male" : "Female";
		if(isset($_POST['checkbox'])){
			$checkboxArr = $_POST['checkbox'];
			foreach ($checkboxArr as $key) {
				$mycheckbox = $key;
			}
		}

		if(empty($name)){
			echo "Please fill this name field";
		}elseif(empty($password)){
			echo "Please fill this password details field";
		}elseif(empty($user)){
			echo "Please fill this user type field";
		}elseif(empty($display)){
			echo "Please fill this display name field";
		}elseif(strlen($display) > 24){
			echo "Display field not more than 24 characters";
		}elseif(empty($email)){
			echo "Please fill this email field";
		}elseif(empty($address)){
			echo "Please fill this address field";
		}elseif(empty($gender)){
			echo "Please fill this gender field";
		}elseif(empty($checkboxArr)){
			echo "Please agree with our terms and conditions";
		}else{
			echo "<b>";
			echo "<br/>Name: ".$name;
			echo "<br/>Password: ".$password;
			echo "<br/>User type: ".$user;
			echo "<br/>Display name: ".$display;
			echo "<br/>Address: ".$address;
			echo "<br/>Email: ".$email;
			echo "<br/>Gender: ".$gender;
			echo "</b>";
		}

	}else{
		echo "Please fill all of this";
	}
?>