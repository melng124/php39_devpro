<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Exercises - KERUL.net</title>
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
    
    <div class="col-md-9">
		
		<div id="exercise" name="exercise" class="panel panel-info">
		<div class="panel-heading"><h5>Data for Registration</h5></div>
			<div class="panel-body">
			<?php
				$name=$_GET['txtname'];
				$lname=$_GET['txtlname'];
				$gender=$_GET['rgender'];
				$state=$_GET['state'];
			?>
			
			<table class="table table-striped">
				<tr>
					<td>Fullname </td>
					<td> <?php echo "$name $lname";?> </td>
				</tr>
				<tr>
					<td>Gender </td>
					<td>
					<?php 
					echo $gender;
					if($gender=='M'){
						echo " - Male";
					}
					else{
						echo " - Female";
					}
					?>
					</td>
				</tr>
				<tr>
					<td>State </td>
					<td><?php echo $state;?></td>
				</tr>
			
			</table>
				
			</div> <!--body panel form -->
		</div><!--form -->
		
    </div><!-- end main content -->
    <div class="col-md-3">
		<?php include ("sidebar-menu.php");?>
		
    </div><!-- end main menu -->
  </div>
	
  
</div><!-- end container -->

<!-- include footer template-->
<?php include ("footer.php");?>

</body>
</html>
