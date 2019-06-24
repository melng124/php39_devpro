<?php
	if(isset($_POST['submit'])){
		$text_error = $checkbox_error = $textarea_error = $radio_error = $select_error = $upload_error = "";
		if(empty($_POST['username'])){
			$text_error = "Username không được để trống";
		}
		if(isset($_POST['checkbox'])){
			$checkboxArr = $_POST['checkbox'];
			$checkbox_text = '';
			foreach ($checkboxArr as $key) {
				switch ($key) {
					case 1: 
						$checkbox_text  = "Checkbox1  ";
						break;
					case 2: 
						$checkbox_text .= "Checkbox2  ";
						break;
					case 3: 
						$checkbox_text .= "Checkbox3  ";
						break;
					default:
						break;
				}
			}
		}else{
			$checkbox_error = "Không được bỏ trống checkbox";
		}

		if(empty(htmlentities($_POST['message']))){
			$textarea_error = "Textarea không được để trống";
		}else{
			$textarea = $_POST['message'];
		}

		if(isset($_POST['radio'])){
			$radio = $_POST['radio'];
			$radio_text = "";
			switch ($radio) {
				case 1:
					$radio_text = "Yep";
					break;
				case 2:
					$radio_text = "Nope";
					break;
				case 3:
					$radio_text = "None";
					break;
				default:
					break;
			}
		}else{
			$radio_error = "Không được bỏ trống radio";
		}

		$select = $_POST['select'];
		$select_text = "";
		switch ($select) {
			case 1:
				$select_text = "1";
				break;
			case 2:
				$select_text = "2";
				break;
			case 3:
				$select_text = "3";
				break;
			default:
				break;
		}

		if(!isset($_FILES['file'])){
		 	 $file_error = "Chưa upload file";
		}else{
			$files = $_FILES['file'];
			$file_dir = __DIR__  ."\img_bai4";
			if(!file_exists($file_dir)){
				mkdir($file_dir);
			}

			$result = move_uploaded_file($files['tmp_name'], $file_dir . "\\" . $files['name']);
			if(($result)&&($_POST['username'])&&($_POST['checkbox'])&&($_POST['message'])&&($_POST['radio'])&&($_POST['select'])){
				$ketqua = "<br/>Text: ". $_POST['username'];
				$ketqua .= "<br/>Checkbox: ". $checkbox_text;
				$ketqua .= "<br/>Textarea: ". $textarea;
				$ketqua .= "<br/>Radio: ". $radio_text;
				$ketqua .= "<br/>Select: ". $select_text;
				$ketqua .= "<br/>Upload File: ";
				// $ketqua .= '<br/><img="img_bai3/'.$files["name"].'">';
				$ketqua .= "<br/><img src='Action/img_bai4/".$files['name'].".' height='100px' width='100px'>";
			}else{
				$file_error = "Upload thất bại, thử lại sau!!";
			}
		}

	}else{
		echo "Chưa tồn tại submit";
	}
?>