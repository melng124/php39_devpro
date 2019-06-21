<!DOCTYPE html>
<html>
<head>
	<title>bai5</title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		#box{
			width: 600px;
			height: 1000px;
			background-color: #f8f9fb;
			margin: auto;
			margin-top: 100px;
		}
		td{
			padding-right: 30px;
		}
	</style>
	<?php 
		$ten = "Nguyễn Viết Mạnh";
		$email = "nguyenvietmanhit@gmail.com";
		$phone = "0987xxxxxx";
	 ?>
	<div id="box">

		<table>
			<tr>
				<td>Name*</td>
				<td>Email*</td>
				<td>Phone</td>
			</tr>
			<tr>
				<td><input type="text" name="Ten" value="<?php echo $ten; ?> "><br></td>
				<td><input type="text" name="Email" value="<?php echo $email; ?>"><br></td>
				<td><input type="text" name="Phone" value="<?php echo $phone; ?>"><br></td>
			</tr>
		</table>
		<br />
		<table>
			<tr>Message*</tr>
			<tr>
				<textarea rows="10" cols="82"> This is a Message
				</textarea>
			</tr>
		</table>
		<input type="button"  onclick="myFunction()" value="Send Message" style="padding: 5px;background-color: #ffc101;">
		<br />
		<div>* These fields are required</div>
		<p id="demo"></p>
		<p id="demo1"></p>
		<p id="demo2"></p>
		<p id="demo3"></p>
		<script>
			var x = "Name: Nguyễn Viết Mạnh";
			var y = "Email: nguyenvietmanhit@gmail.com";
			var z = "Phone: 0987xxxxxx";
			var m = "Message: This is message "; 

			function myFunction(){
				document.getElementById("demo").innerHTML = x;
				document.getElementById("demo1").innerHTML = y;
				document.getElementById("demo2").innerHTML = z;
				document.getElementById("demo3").innerHTML = m;
			}
		</script>
	</div>
	
</body>
</html>