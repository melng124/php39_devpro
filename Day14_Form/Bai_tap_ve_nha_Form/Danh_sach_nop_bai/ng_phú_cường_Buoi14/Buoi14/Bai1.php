<form action="" method="POST">
	<table>
		<tr>
			<td>Name : </td>
			<td>
				<input type="text" name="name" value="">
			</td>
		</tr>
		<tr>
			<td>Email : </td>
			<td>
				<input type="Email" name="email" value="">
			</td>
		</tr>
		<tr>
			<td>Specific Time : </td>
			<td>
				<input type="text" name="time" value="">
			</td>
		</tr>
		<tr>
			<td>Class details : </td>
			<td>
				<textarea name="details" cols="=7" rows="10">
					
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Gender : </td>
			<td>
				<input type="radio" name="gender" value="1">Famele
				<input type="radio" name="gender" value="2">Male
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</form>
<?php 
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$time=$_POST['time'];
		$details=$_POST['details'];
		$gender=$_POST['gender'];
		if(empty($name))
		{
			echo "Name không được để trống";
		}
		elseif(empty($email))
		{
			echo "Email không được để trống";
		}
		elseif(empty($time))
		{
			echo "Specific Time không được để trống";
		}
		elseif(empty($details))
		{
			echo "Details không được để trống";
		}
		elseif (empty($gender)) {
			echo "Gender phải được chọn";
		}
		else
		{
			echo "Name : $name <br>";
			echo "Email : $email <br>";
			echo "Time : $time <br>";
			echo "Class Details : $details <br>";
			if($gender ==1){
				echo "Famele";
			}
			else
			{
				echo "Male";
			}

		}
	}
	else{
		echo "Chưa Submit Form";
	}
 ?>