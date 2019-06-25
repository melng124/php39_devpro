<?php
session_start();
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(isset($_POST['remember'])){
			$remember = $_POST['remember'];
		}
		if(($username == "admin") &&($password == "123456"))
		{
			header("location:login_success.php");
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			if(isset($_POST['remember'])&&($_POST['remember'] == 1 )){
			setcookie("username",$username,time()+30);
			setcookie("password",$password,time()+30);
			}
		}
		else
		{
			$error = "Tài khoản hoặc mật khẩu không chính xác";
		}
	}else{
		
	}
?>