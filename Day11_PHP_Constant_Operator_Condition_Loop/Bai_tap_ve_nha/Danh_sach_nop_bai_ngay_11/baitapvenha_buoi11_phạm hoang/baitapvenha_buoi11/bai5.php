bai4.php<!DOCTYPE html>
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
	<div class="container">
		<pre class="text-center">Viết chương trình tính tổng S(n) = 1 + 1/2 + 1/3 + 1/4 +… 1/n, sử dụng PHP với n là biến cho trước


</pre>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<?php
				$n=3;
				$s=0;
				for ($i=1; $i <=$n; $i++) 

					# code...
					echo $s=$s+1/$i;
					
				?>

				
			</div>
		</div>

		
	</div>
	

	
</body>
</html>