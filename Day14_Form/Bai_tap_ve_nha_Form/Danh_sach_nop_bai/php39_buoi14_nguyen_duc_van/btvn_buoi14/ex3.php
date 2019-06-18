<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		form{
			background-color: #a7d6f1;
			width: 400px;
			padding: 10px;
			margin: auto;
		}
		.td1{
			text-align: right;
		}
		.td2{
			margin: auto;
			text-align: center;
		}
	</style>
	<form action="" method="POST">
		<table>
			<tr>
				<td class="td1">Enter e-mail address:</td>
				<td><input type="email" name="email"
					value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ;?>"></td>
			</tr>
			<tr>
				<td class="td1">Enter password:</td>
				<td><input type="password" name="password"
					value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ;?>"></td>
			</tr>
			<tr>
				<td class="td1">Select academic level:</td>
				<td><select name="address">
						<option>Freshman</option>
						<option>Freshman1</option>
						<option>Freshman2</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="td1">Identify courses taken:</td>
				<td>
					<input type="checkbox" name="identify" value="CSCI 1710" checked="1">CSCI 1710<br>
					<input type="checkbox" name="identify" value="CSCI 1800">CSCI 1800<br>
					<input type="checkbox" name="identify" value="CSCI 2800">CSCI 2800<br>
					<input type="checkbox" name="identify" value="CSCI 2150">CSCI 2150<br>
					<input type="checkbox" name="identify" value="CSCI 2910">CSCI 2910<br>
				</td>
			</tr>
			<tr>
				<td class="td1">Select Concentration:</td>
				<td>
					<input type="radio" name="concentration" value="rd1" checked="1">Computer Science (CS)<br>
					<input type="radio" name="concentration" value="rd2">Information Science (IS)<br>
					<input type="radio" name="concentration" value="rd3">Information Technologi (IT)<br>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="td2">
					<textarea cols="50" rows="5" name="comments"
					value="?php echo isset($_POST['comments']) ? $_POST['comments'] : '' ;?>">
						
					</textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="td2">
					<input type="submit" name="submit" value="Submit data">
				</td>
			</tr>

		</table>
	</form>

	<?php 

		if(isset($_POST['submit'])){

			$email = $_POST['email'];
			$password = $_POST['password'];
			$address = $_POST['address'];
			$identify = $_POST['identify'];
			$concentration = $_POST['concentration'];
			$comments = $_POST['comments'];

			$arrs = [$password];
			$count1 = count($arrs);

			echo '<p style="color:red;">';
			if(empty($email)){
				echo "Email không được để trống </p>";
			}else if(empty($password)){
				echo "Password không được để trống </p>";
			}else if($count1 > 8){
				echo "Password phải có số ký tự >= 8 </p>";
			}else{
				echo "</p><p>Đăng ký thành công<br>Thông tin của bạn là: </p><br>";
				echo "<br>Email:".$email;
				echo "<br>Password:".$password;
				echo "<br>Địa chỉ:".$address;
			}

		}

		



	 ?>
</body>
</html>