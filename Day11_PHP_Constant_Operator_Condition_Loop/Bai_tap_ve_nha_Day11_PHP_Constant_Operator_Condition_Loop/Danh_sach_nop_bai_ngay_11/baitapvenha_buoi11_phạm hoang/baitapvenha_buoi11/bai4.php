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
		<pre class="text-center"> 4.	Hiển thị chuỗi với mô tả như sau sử dụng PHP:
•	Chuỗi ký tự từ 1 đến 50
•	Phân cách nhau bởi ký tự –
•	Không có ký tự – này ở đầu và cuối của chuỗi đó
•	Kết quả sẽ có dạng sau: 
1 – 2 – 3 – 4 – 5 – 6- 7 – 8 – 9 – 10 – … – 45 – 46 – 47 – 48 – 49 – 50
</pre>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<?php
				$n=50;
				for ($i=1; $i <$n; $i++) {

					# code...
					echo $i."-";
					if($i==49)
					{
						echo $i."-"."50";
					}
					
				}
				?>
				
			</div>
		</div>

		
	</div>
	

	
</body>
</html>