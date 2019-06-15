<!DOCTYPE html>
<html lang="en">
<head>
  <title>FSTM.kuis.edu.my - PHP Exercises</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Loading Flat UI Pro -->
    <link href="css/flat-ui-pro.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
  
</head>
<body>


 <!-- Static navbar -->
    <?php include ("navbar.php");?>

<div class="container">
	<br>
	<br>
  

  <div class="row">
    
    <div class="col-md-9" name="maincontent" id="maincontent">
		
		<div id="exercise" name="exercise" class="panel panel-info">
		<div class="panel-heading"><h5>Exercise for OPERATORS</h5></div>
			<div class="panel-body">
				<form name="aform" method="GET" action="">
					Number 1 <input type="text" name="txt1" class="form-control">
					Number 2 <input type="text" name="txt2" class="form-control">
					Operation?
					<select name="ops"  class="form-control">
						<option value="+">+ Add </option>
						<option value="-">- Subtract </option>
						<option value="*">x Multiply </option>
						<option value="/">/ Divide </option>
					</select>
					<br>
					<input type="submit" value="  Get answer  " class="btn btn-primary">
					<br>
					<?php
					$num1=$_GET['txt1'];
					$num2=$_GET['txt2'];
					$ops=$_GET["ops"];
					if($ops=='+'){
						$answer=$num1+$num2;
						echo ("Answer: $num1 $ops $num2 = $answer");
					}
					else if($ops=='-'){
						$answer=$num1-$num2;
						echo ("Answer: $num1 $ops $num2 = $answer");
					}
					else if($ops=='*'){
						$answer=$num1*$num2;;
						echo ("Answer: $num1 $ops $num2 = $answer");
					}
					else if($ops=='/'){
						$answer=$num1/$num2;;
						echo ("Answer: $num1 $ops $num2 = $answer");
					}
					?>
					
						
					
				</form>
		
			</div> <!--body panel toc -->
		</div><!--toc -->
		
    </div><!-- end main content -->
    <div class="col-md-3">
		<?php include ("sidebar-menu.php");?>
    </div><!-- end main menu -->
  </div>
</div><!-- end container -->

<?php include ("footer.php");?>

</body>
</html>
