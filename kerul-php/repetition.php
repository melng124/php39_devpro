<!DOCTYPE html>
<html lang="en">
<head>
  <title>FSTM.kuis.edu.my - PHP Include</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Loading Flat UI Pro -->
    <link href="css/flat-ui-pro.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
  
</head>
<body>

<?php include ("navbar.php");?>

<div class="container">
	<br>
	<br>
  

  <div class="row">
    
    <div class="col-md-9" name="maincontent" id="maincontent">
		
		<div id="exercise" name="exercise" class="panel panel-info">
		<div class="panel-heading"><h5>PHP Repetition</h5></div>
			<div class="panel-body">
			 <form action="" method="get">
				
				Date of Birth <br>
				Day 
				<select name="day">
					<?php
						for ($i=1;$i<=31;$i++){
							echo "<option value='$i'> $i </option>\n";
						}//end for
					?>
				</select>
				Month 
				<select name="month">
					<?php
						$month = array(1=>"Jan","Feb","Mar","April",
						"May","June","July","Aug","Sept","Oct","Nov","Dec");
						for ($i=1;$i<=12;$i++){
							echo "<option value='$i'> ".$month[$i]." </option>\n";
						}//end for
					?>
				</select>
				Year
				<select name="year">
					<?php
					for ($i=1900;$i<=date('Y');$i++){
						echo "<option value='$i'> $i </option>\n";
					}//end for
				?>
				</select>
				<br>
				<input type="submit" value="Display date in ISO format" 
				class="btn btn-info">
			 
			 <form>
			</div> <!--body panel main -->
			
			<div id="exercise" name="exercise" class="panel panel-info">
			<div class="panel-heading">
				<h5>Output - date ISO format</h5>
			</div>
				<div class="panel-body">
				
					<?php
						$day=$_GET['day'];
						$month=$_GET['month'];
						$year=$_GET['year'];
						$isodate = sprintf("%4d-%2d-%2d", $year, $month, $day);
						echo $isodate;
					?>
				</div> <!-- output -->
			</div>
			
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
