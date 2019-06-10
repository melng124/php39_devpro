<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bai_11.css">
	<title>Bài tập 10</title>
</head>
<body>
	<div class="content">
	<?php for ($k=0; $k <8 ; $k++) { 
		if($k%2==0){
			for($i=0;$i<8;$i++){ 
				if($i%2==0){?>
		<div class="o-co o-chan"></div>
	<?php }else{ ?>
		<div class="o-co o-le"></div>
	<?php }}}else{
			for($i=0;$i<8;$i++){ 
				if($i%2!=0){?>
		<div class="o-co o-chan"></div>
	<?php }else{ ?>
		<div class="o-co o-le"></div>
	<?php }}}}?>
	 

	</div>

	
</body>
</html>