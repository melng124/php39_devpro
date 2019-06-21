<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bai4.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-8 box-left" >
			<h1>Registration FORM</h1>
			<form action="" method="post">
				<div class="form-group">
					<label>First name</label>
					<input type="text" name="FName" class="form-control" value="<?php echo isset($_POST['FName']) ? ($_POST['FName']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["FName"]) && $_POST["FName"] == "") ? "Họ không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<label>Last name </label>
					<input type="text" name="LName" class="form-control"value="<?php echo isset($_POST['LName']) ? ($_POST['LName']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["LName"]) && $_POST["LName"] == "") ? "Tên không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<label>Gender</label>
					<label class="radio-inline">
 						 <input type="radio" name="Gender" value="0" checked="checked"> Male
					</label>
					<label class="radio-inline">
 						 <input type="radio" name="Gender" value="1"> Female
					</label>
				</div>
				<div class="form-group">
					<label>State</label>
					<select class="form-control" name="State">
						  <option value="0">Vietnam</option>
						  <option value="1">Laos</option>
						  <option value="2">China</option>
						  <option value="3">Taiwan</option>
						  <option value="4">Egypt</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="submit">Save Record</button>
					<button type="reset" class="btn btn-primary">Reset</button>
				</div>



			</form>
		</div>
		<div class="col-md-3 col-md-offset-1 box-right">
			<h1>Excercise List</h1>
			<ul>
				<li>Home directory</li>
				<li>Form</li>
				<li>Operator</li>
				<li>Array</li>
				<li>If - else</li>
				<li>String</li>
			</ul>
		</div>
	</div>
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		$fname = $_POST["FName"];
		$lname = $_POST["LName"];

		$gender = $_POST["Gender"];
		$result_gender = $gender == 0 ? "male" : "female";

		$state = $_POST['State'];
		switch($state){
			case 0: $nation = "Vienam";
					break;
			case 1: $nation = "Laos";
					break;
			case 2: $nation = "China";
					break;
			case 3: $nation = "Taiwan";
					break;
			case 4: $nation = "Egypt";
					break;
			default: "I dont know";
					break;
		}
		if((!empty($fname))&&(!empty($lname))){
			echo "Bạn đã đăng kí thành công";
			echo "<br/>Họ: $fname";
			echo "<br/>Tên: $lname";
			echo "<br/>Giới tính: $result_gender";
			echo "<br/>Quê quán: $nation";
		}

	}else{
		echo "không tồn tại";
	}
?>