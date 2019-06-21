<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 8</title>
</head>
<body>
<h1>
	<?php
		for ($a = 1; $a <= 5; $a++) {
		    for ($b = 1; $b <= $a; $b++){
		        echo "*";
		        if ($b < $a){
		            echo "";
		        }
		    }
		    echo "<br>";
		}
	?>
</h1>
</body>
</html>