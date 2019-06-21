<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		table{
			border: 1px solid white;
			border-collapse: collapse;
		}
		td{
			border: 1px solid white;			
			background-color: #a7d6f1;
			height: 30px;
		}
		.td1{
			text-align: right;
			width: 140px;
		}
		.td2{
			width: 340px;
		}
		.td3{
			text-align: center;
			background-color: #95bee6;
		}

	</style>
	<form action="" method="POST">
		<table>
			<tr>
				<td class="td3" colspan="2">Registation Form</td>
			</tr>
			<tr>
				<td class="td1">Username</td>
				<td class="td2"><input type="text" name="username"
					value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ;?>"></td>
			</tr>
			<tr>
				<td class="td1">Password</td>
				<td class="td2"><input type="password" name="password"
					value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ;?>"></td>
			</tr>
			<tr>
				<td class="td1">User Type</td>
				<td class="td2"><select name="usertype" value="--Select--">
						<option>Select 1</option>
						<option>Select 2</option>
						<option>Select 3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="td1">Display Name</td>
				<td class="td2"><input type="text" name="displayname"
					value="<?php echo isset($_POST['displayname']) ? $_POST['displayname'] : '' ;?>"></td>
			</tr>
			<tr>
				<td class="td1">Address</td>
				<td class="td2"><textarea cols="21" rows="3" name="address" 
					value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ;?>"></textarea></td>
			</tr>
			<tr>
				<td class="td1">Email</td>
				<td class="td2"><input type="email" name="email"
					value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ;?>"></td>
			</tr>
			<tr>
				<td class="td1">Gender</td>
				<td class="td2"><input type="radio" name="gender" value="Male" checked="1">Male
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr>
			<tr>
				<td class="td1"></td>
				<td class="td2"><input type="checkbox" name="accept" value="ck1">
				I accept Terms and Condition	</td>
			</tr>
			<tr>
				<td class="td3" colspan="2"><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		
	</form>

	<?php 

		if(isset($_POST['submit'])){

			$username = $_POST['username'];
			$password = $_POST['password'];
			$usertype = $_POST['usertype'];
			$displayname = $_POST['displayname'];
			$arrDisplayname = [$displayname];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];

			$count1 = count($arrDisplayname);

		
			if(empty($username)){
				echo "Username không được để trống";
			}else if(empty($password)){
				echo "Password không được để trống ";
			}else if(empty($displayname)){
				echo "Displayname không được để trống ";
			}else if($count1 > 24){
				echo "Displayname không được vượt quá 24 ký tự";
			}else if(empty($address)){
				echo "address không được để trống ";
			}else if(empty($email)){
				echo "email không được để trống ";
			}else if(empty($password)){
				echo "Password không được để trống ";
			}else if(isset($_POST['accept']) == 0){
				echo "accept chưa được chọn ";
			}else{
				echo "Username: ".$username."<br>";
				echo "Password: ".$password."<br>";
				echo "User type: ".$usertype."<br>";
				echo "Display name: ".$displayname."<br>";
				echo "Address: ".$address."<br>";
				echo "Email: ".$email."<br>";
				echo "Gender: ".$gender."<br>";
			}
		}




	 ?>
</body>
</html>