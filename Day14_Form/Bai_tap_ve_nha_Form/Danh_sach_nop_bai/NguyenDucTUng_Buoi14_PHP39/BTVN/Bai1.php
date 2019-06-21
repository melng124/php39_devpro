<!DOCTYPE html>
<html>
<head>
	<title>Form Validate</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td colspan="2"><center>Bài 1</center></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo isset($_POST['Name']) ? ($_POST['Name']) : ''; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="Email" value="<?php echo isset($_POST['Email']) ? ($_POST['Email']) : ''; ?>"></td>
			</tr>
			<tr>
				<td>Specific Time</td>
				<td><input type="text" name="Time" value="<?php echo isset($_POST['Time']) ? ($_POST['Time']) : ''; ?>"></td>
			</tr>
			<tr>
				<td>Class Detail</td>
				<td>
					<textarea name="Detail" cols="30" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="0" <?php echo (isset($_POST['gender'])&&$_POST['gender']) == 0 ? "checked='checked'":'' ?>>Male
					<input type="radio" name="gender" value="1" <?php echo (isset($_POST['gender'])&&$_POST['gender']) == 1 ? "checked='checked'":'' ?>>Female
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="Submit"  value="Submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$class = htmlentities($_POST['Detail']);
		$time  = $_POST['Time'];
		$gender =  ($_POST['gender'] == 0) ? "Male" : "Female";

		if(empty($name)){
			echo "Dont vacant this name field";
		}elseif(empty($email)){
			echo "Dont vacant this email field";
		}elseif(empty($class)){
			echo "Dont vacant this class details field";
		}elseif(empty($time)){
			echo "Dont vacant this specific field";
		}else{
			echo "<b>";
			echo "Your Given details are as:";
			echo "<br/>Name: ".$name;
			echo "<br/>Email: ".$email;
			echo "<br/>Specific Time: ".$time;
			echo "<br/>Class details: ".$class;
			echo "<br/>Gender: ".$gender;
			echo "</b>";
		}

	}else{
		echo "Please fill all of this";
	}
?>