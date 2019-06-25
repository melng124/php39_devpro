<?php 
	session_start();
	print_r($_SESSION);
	if((isset($_SESSION['username']))||(isset($_COOKIE['username']))):
?>
		<h1>Đăng nhập thành công</h1>
		 <p>
		 	Chào mừng bạn
		 	<b><?php echo $_COOKIE['username']; ?></b>
		<p>
			Thời gian hiện tại đang login: 
			<?php echo date('d/m/y h:i:s',time()); ?>
		</p>
		<p>
			<a href="logout.php">Logout</a>
		</p>
	
<?php
	else:
	header("location:index.php");
	endif;
?>
