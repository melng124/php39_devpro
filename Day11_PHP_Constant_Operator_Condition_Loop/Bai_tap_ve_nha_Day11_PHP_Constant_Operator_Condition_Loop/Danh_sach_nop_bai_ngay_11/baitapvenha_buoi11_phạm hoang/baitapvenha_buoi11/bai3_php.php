<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bai1.php</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	$chieurong=$_POST["chieurong"];
	$chuvi=3.14*$chieurong;
	$dientich=3.14*$chieurong*$chieurong;
	?>
	<div class="container">
		<h2 class="text-center">2.	Viết chương trình web tính chu vi, diên tích của hình tron 12cm sử dụng PHP.</h2>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<form action="bai1_php.php" method="POST" role="form">
					<legend>Tính chu vi và diện tích của nó</legend>

				

					<div class="form-group">
						<label for="">Ban kinh</label>
						<input type="text" class="form-control"name="chieurong"id="" value="<?php echo $chieurong?>">
					</div>

					<div class="form-group">
						<label for="">chuvi</label>
						<input type="text" class="form-control"name="chieurong"id=""  value="<?php echo $chuvi?>">
					</div>

					<div class="form-group">
						<label for="">Dientich</label>
						<input type="text" class="form-control"name="chieurong"id=""  value="<?php echo $dientich?>" >
					</div>
					

				
			
				
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>

		
	</div>
	

	
</body>
</html>