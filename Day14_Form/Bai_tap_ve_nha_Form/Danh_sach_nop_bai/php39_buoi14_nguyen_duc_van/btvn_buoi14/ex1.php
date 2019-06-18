<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		td{
			align: right;
		}
	</style>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"
					value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ;?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"
					value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ;?>"></td>
			</tr>
			<tr>
				<td>Specific Time:</td>
				<td><input type="text" name="specific"
					value="<?php echo isset($_POST['specific']) ? $_POST['specific'] : '' ;?>"></td>
			</tr>
			<tr>
				<td>Class details:</td>
				<td><textarea cols="50" rows="4" name="details"
					value="<?php echo isset($_POST['details']) ? $_POST['details'] : '' ;?>"></textarea></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value="Female" checked="1">Female
					<input type="radio" name="gender" value="Male" >Male
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
			</tr>
			<tr>
				<td><h2>Your Given details are as</h2></td>				
			</tr>
		</table>
		<?php 

			echo "<pre>";
			if(isset($_POST['submit'])){

				$name = $_POST['name'];
				$email = $_POST['email'];
				$specific = $_POST['specific'];
				$details = $_POST['details'];
				$gender = $_POST['gender'];

				if(empty($name)){
					echo "Name không được để trống";
				}else if(empty($email)){
					echo "Email không được để trống, phải có định dạng email";
				}else if(empty($specific)){
					echo "Specific Time Không được để trống";
				}else if(empty($details)){
					echo "Class details không được để trống";
				}else{
					echo "<h2>Your Given details are as</h2><br />";
					echo "Name: ".$name."<br>";
					echo "Email: ".$email."<br>";
					echo "Specific Time: ".$specific."<br>";
					echo "Class details: ".$details."<br>";
					echo "Gender: ".$gender."<br>";

				}
			}

		 ?>
	</form>
</body>
</html>