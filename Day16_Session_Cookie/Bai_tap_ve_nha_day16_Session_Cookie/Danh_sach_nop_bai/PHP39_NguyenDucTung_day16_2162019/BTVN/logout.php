<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password'])){
		session_destroy();
		setcookie("username",$_SESSION['username'],time()-1);
		setcookie("password",$_SESSION['password'],time()-1);
		setcookie("dangxuat","Đăng xuất thành công",time()+2);
		header("location:index.php");

	}
?>