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
			<h1 class="text-center"></h1>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="Name" class="form-control" value="<?php echo isset($_POST['Name']) ? ($_POST['Name']) : ''; ?>" placeholder="Your Name">
					<span class="error"><?php echo (isset($_POST["Name"]) && $_POST["Name"] == "") ? "Tên không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<input type="email" name="Email" class="form-control"value="<?php echo isset($_POST['Email']) ? ($_POST['Email']) : ''; ?>" placeholder="Your Email Address">
					<span class="error"><?php echo (isset($_POST["Email"]) && $_POST["Email"] == "") ? "Email không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<input type="number" name="Phone" class="form-control"value="<?php echo isset($_POST['Phone']) ? ($_POST['Phone']) : ''; ?>" placeholder="Your Phone Number">
					<span class="error"><?php echo (isset($_POST["Phone"]) && $_POST["Phone"] == "") ? "Số điện thoại không được để trống" : "" ?></span>
				</div>

				<div class="form-group">
					<input type="text" name="Website" class="form-control"value="<?php echo isset($_POST['Website']) ? ($_POST['Website']) : ''; ?>" placeholder="Your Website starts with http://">
					<span class="error"><?php echo (isset($_POST["Website"]) && $_POST["Website"] == "" || (!preg_match('#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i', $_POST["Website"]))) ? "Website không được để trống và phải đúng định dạng" : "" ?></span>
				</div>
				<div class="form-group">
    				<textarea class="form-control" name="Message" rows="3" placeholder="Type your message here..."></textarea>
				</div>

				
				<div class="form-group">
						<button type="submit" class="btn btn-success form-control" name="submit" >Submit</button>
				</div>
			</form>
	
	

<?php 
	if(isset($_POST['submit'])){
		$name    = $_POST["Name"];
		$email    = $_POST["Email"];
		$phone    = $_POST["Phone"];
		$website    = $_POST["Website"];
		$message    = htmlentities($_POST['Message']);
		if((!empty($name))&&(!empty($email))&&(!empty($phone))&&(!empty($website))&&(!empty($message))&&(preg_match('#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i', $_POST["Website"]))){
			echo "Send contact thành công";
			echo "<b>";
			echo "<br />Your name : $name";
			echo "<br />Your email : $email";
			echo "<br />Your phone number: $phone";
			echo "<br />Your Website: $website";
			echo "<br />Your message: $message";
			echo "</b>";
		}
	}
?>
</div>
</div>
</body>
</html>
