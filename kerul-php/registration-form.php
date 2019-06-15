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
		<div class="panel-heading"><h5>Registration FORM</h5></div>
			<div class="panel-body">
				<form name="reg-form" method="GET" 
				action="reg-data.php">
					Firstname
					<input type="text" name="txtname" class="form-control">
					Lastname
					<input type="text" name="txtlname" class="form-control">
					Gender
					<input type="radio" name="rgender" value="M">
					Male
					<input type="radio" name="rgender" value="F">
					Female <br>
					State
					<select name="state"  class="form-control">
						<option value="01">Johor</option>
						<option value="02">Kedah</option>
						<option value="03">Kelantan</option>
						<option value="04">Melaka</option>
					</select>
					<br>
					<input type="submit" value="Save Record" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-default">
				
				</form>
			</div> <!--body panel form -->
		</div><!--form -->
		
    </div><!-- end main content -->
    <div class="col-md-3">
		<?php include ("sidebar-menu.php");?>
		
    </div><!-- end main menu -->
  </div>
	
  
</div><!-- end container -->

<?php include ("footer.php");?>

</body>
</html>
