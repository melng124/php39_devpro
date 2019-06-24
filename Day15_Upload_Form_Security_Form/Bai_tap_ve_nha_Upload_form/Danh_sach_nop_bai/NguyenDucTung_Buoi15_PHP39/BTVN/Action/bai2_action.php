<?php
	if(isset($_POST['submit'])){
		$text_error = $checkbox_error = $textarea_error = $radio_error = $select_error = $upload_error = "";
		if(empty($_POST['username'])){
			$text_error = "Username không được để trống";
		}else{
			if(!isset($_FILES['file'])){
		 	 $file_error = "Chưa upload file";
			}else{
				$files = $_FILES['file'];
				$file_dir = __DIR__  ."\img_bai4";
				if(!file_exists($file_dir)){
					mkdir($file_dir);
				}

				$result = move_uploaded_file($files['tmp_name'], $file_dir . "\\" . $files['name']);
				if($result){
					$ketqua = "<br/>Tên của bạn: ". $_POST['username'];
					$ketqua .= "<br/>Avatar của bạn: ";
					// $ketqua .= '<br/><img="img_bai3/'.$files["name"].'">';
					$ketqua .= "<br/><img src='Action/img_bai4/".$files['name'].".' height='100px' width='100px'>";
					$ketqua .= "<br/>Tên file: " .  $file_dir . "\\" . $files['name'];
					$ketqua .= "<br/>Đường dẫn file trên project của bạn: " .  __DIR__;
					$ketqua .= "<br/>Kích thước file: " .  number_format(($files['size']/(1024*1024)), 1, ',', ' ') . " MB";


				}else{
					$file_error = "Upload thất bại, thử lại sau!!";
				}
			}
		}
	}

?>