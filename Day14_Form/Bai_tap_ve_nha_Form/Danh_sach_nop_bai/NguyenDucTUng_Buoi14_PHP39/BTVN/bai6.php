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
			<h1 class="text-center">Thực hành toán tử</h1>
			<form action="" method="post">
				<div class="form-group">
					<label>Nhập số a</label>
					<input type="text" name="FNumber" class="form-control" value="<?php echo isset($_POST['FNumber']) ? ($_POST['FNumber']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["FNumber"]) && $_POST["FNumber"] == "") ? "Số a không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<label>Nhập số b</label>
					<input type="text" name="SNumber" class="form-control"value="<?php echo isset($_POST['SNumber']) ? ($_POST['SNumber']) : ''; ?>">
					<span class="error"><?php echo (isset($_POST["SNumber"]) && $_POST["SNumber"] == "") ? "sô b không được để trống" : "" ?></span>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="add">a + b</button>
					<button type="submit" class="btn btn-danger" name="minus">a - b</button>
					<button type="submit" class="btn btn-success" name="multi">a * b</button>
					<button type="submit" class="btn btn-info" name="div">a / b</button>
				</div>
			</form>
	
	

<?php 
	if(isset($_POST['add'])){
		$fnumber    = $_POST["FNumber"];
		$snumber    = $_POST["SNumber"];
		if((!empty($fnumber))&&(!empty($snumber))){
			$result_number = $fnumber + $snumber;
			echo "$fnumber + $snumber = $result_number";
		}
	}

	if(isset($_POST['minus'])){
		$fnumber    = $_POST["FNumber"];
		$snumber    = $_POST["SNumber"];
		if((!empty($fnumber))&&(!empty($snumber))){
			$result_number = $fnumber - $snumber;
			echo "$fnumber - $snumber = $result_number";
		}
	}

	if(isset($_POST['multi'])){
		$fnumber    = $_POST["FNumber"];
		$snumber    = $_POST["SNumber"];
		if((!empty($fnumber))&&(!empty($snumber))){
			$result_number = $fnumber * $snumber;
			echo "$fnumber * $snumber = $result_number";
		}
	}

	if(isset($_POST['div'])){
		$fnumber    = $_POST["FNumber"];
		$snumber    = $_POST["SNumber"];
		if((!empty($fnumber))&&(!empty($snumber))){
			$result_number = $fnumber / $snumber;
			echo "$fnumber / $snumber = $result_number";
		}
	}
?>
</div>
</div>
</body>
</html>
