<?php
	if(isset($_POST['submit'])){
		$text_error = $email_error = $password_error = $confirm_error = $file_error = "";
		if(empty($_POST['username'])){
			$text_error = "Username không được để trống!";
		}elseif(empty($_POST['email'])){
			 $email_error = "Email không được để trống!";
		}elseif(empty($_POST['password'])){
			 $password_error = "Password không được để trống!";
		}elseif(empty($_POST['confirm'])){
			 $confirm_error  = "Nhập lại mật khẩu!";
		}elseif($_POST['password'] != $_POST['confirm']){
			 $confirm_error = "Mật khẩu phải trùng với mật khẩu trên";
		}elseif(!isset($_FILES['file'])){
		 	 $file_error = "Chưa upload file";
		}else{
			$files = $_FILES['file'];
			$file_dir = __DIR__  ."\img_bai3";
			if(!file_exists($file_dir)){
				mkdir($file_dir);
			}

			$result = move_uploaded_file($files['tmp_name'], $file_dir . "\\" . $files['name']);
			if($result){
				
				$ketqua = "<br/>Username: ". $_POST['username'];
				$ketqua .= "<br/>Email: ". $_POST['email'];
				$ketqua .= "<br/>Avatar: ";
				// $ketqua .= '<br/><img="img_bai3/'.$files["name"].'">';
				$ketqua .= "<br/><img src='Action/img_bai3/".$files['name'].".' height='100px' width='100px'>";
			}else{
				$file_error = "Upload thất bại, thử lại sau!!";
			}
		}
	}
?>