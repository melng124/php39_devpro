<!DOCTYPE html>
<html>
<head>
	<title>Check Infomation</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo isset($_POST['Name']) ? $_POST['Name']:'' ?> "></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="Gender" value="0">Male
					<input type="radio" name="Gender" value="1">Female
				</td>
			</tr>
			<tr>
				<td>Grade</td>
				<td>
					<select name="Grade" id="">
						<option value="1">First</option>
						<option value="2">Second</option>
						<option value="3">Third</option>
						<option value="4">Forth</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Hobbies</td>
				<td>
					<input type="checkbox" name="checkbox[]" value="1">Music
					<input type="checkbox" name="checkbox[]" value="2">Football
					<input type="checkbox" name="checkbox[]" value="3">Reading
					<!-- <input type="checkbox" name="checkbox[]">Sleeping -->
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Register"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['Name'];
		$gender = $_POST['Gender'];
		$grade  = $_POST['Grade'];
		$checkboxArr = $_POST['checkbox'];
		foreach ($checkboxArr as $checkbox) {
			 if ($checkbox == 1) {
       		 	echo 'Music ';
   			}
    		else if ($checkbox == 2) {
        		echo 'Football ';
    		}
    		else {
        		echo 'Reading ';
    	}

		}
		echo '<p>'.$name.'</p>';
		echo '<p>'.$gender.'</p>';
		echo '<p>'.$grade.'</p>';
	}else{
		echo "bye";
	}
?>