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
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="http://KERUL.net" target="_blank">KERUL.net</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://www.kuis.edu.my" target="_blank">KUIS</a></li>
            <li><a href="http://FSTM.kuis.edu.my" target="_blank">FSTM.kuis.edu.my</a></li>
			<li><a href="http://php.net" target="_blank">PHP.net</a></li>
          </ul>
          
      </div>
    </div>
	</div><!-- end nav-bar-inverse -->

<div class="container">
	<br>
	<br>
  

  <div class="row">
    
    <div class="col-md-9" name="maincontent" id="maincontent">
		
		<div id="exercise" name="exercise" class="panel panel-info">
		<div class="panel-heading"><h5>Exercise for FORM</h5></div>
			<div class="panel-body">

				<form name="aform" method="GET" action="display-data.php">
					Username <input type="text" name="txtusername" class="form-control"><br>
					Password <input type="password" name="txtpassword" class="form-control"><br>
					<input type="submit" value="Login" class="btn btn-embosed btn-primary"> 
					<input type="reset" value="Reset" class="btn btn-default">
				</form>
		
			</div> <!--body panel toc -->
		</div><!--toc -->
		
    </div><!-- end main content -->
    <div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading"><h5>Exercise List</h5></div>
			<div class="panel-body">
				<a href="form.php" class="btn btn-info btn-block">FORM</a>
				<a href="operator.php" class="btn btn-info btn-block">operator</a>
				<a href="array.php" class="btn btn-info btn-block">array</a>
				<a href="if-else.php" class="btn btn-info btn-block">if - else</a>
				<a href="do-while.php" class="btn btn-info btn-block">do - while</a>
				<a href="string.php" class="btn btn-info btn-block">string</a>
				<a href="database.php" class="btn btn-info btn-block">database intro</a>
			</div>
		</div>
    </div><!-- end main menu -->
  </div>
</div><!-- end container -->

<div class="mtl pbl">
      <div class="bottom-menu bottom-menu-inverse">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-2">
              <a href="http://KERUL.net" target="new" class="bottom-menu-brand">KERUL.net</a>
            </div>
            <div class="col-md-8 col-sm-8">
              <ul class="bottom-menu-list">
			  <li><a href="http://fstm.kuis.edu.my" target="_blank">FSTM.kuis.edu.my</a></li>
				<li><a href="http://www.kuis.edu.my" target="_blank">KUIS</a></li>
				<li><a href="http://php.net" target="_blank">PHP.net</a></li>
          </ul>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <ul class="bottom-menu-iconic-list">
                <li><a href="http://facebook.com/kerul.net" class="fui-facebook" target="new"></a></li>
                <li><a href="http://twitter.com/khirulnizam" class="fui-twitter" target="new"></a></li>
				<li><a href="tel:+60129034614" class="fui-chat" target="new"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /bottom-menu-inverse -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/video.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui-pro.js"></script>

</body>
</html>
