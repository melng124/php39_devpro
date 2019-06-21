<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bai_10.css">
	<title>Bài tập 10</title>
</head>
<body>
	<div class="content">
	<?php for($i=1;$i<=10;$i++){ ?>
		<div class="bangcuuchuong">
			<h2><?php echo $i ?></h2>
			<?php
				for($j=1;$j<=10;$j++){
					echo "$i x $j = " . $i * $j;
					echo "<br/>";
				}
			?>
		</div>
	<?php } ?>
	</div>

	
</body>
</html>