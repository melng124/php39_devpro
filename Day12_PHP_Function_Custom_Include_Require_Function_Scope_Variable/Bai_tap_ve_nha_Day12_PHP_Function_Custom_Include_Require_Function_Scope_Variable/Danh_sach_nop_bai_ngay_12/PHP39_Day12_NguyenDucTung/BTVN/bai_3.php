<!---
	3.	Viết hàm kiểm tra số nguyên tố từ 1 - 100, sau đó hiển thị ra màn hình như giao diện sau, trong đó:
•	Các số có nền xanh là số nguyên tố
•	Các số có nền trắng không phải số nguyên tố
-->
<link rel="stylesheet" type="text/css" href="css/bai_3.css">
<h1>Bài 3</h1>
<div class="content">
<?php
	function primeCheck($num){
			if ($num < 2) {
				return false;
			}
			for($k=2;$k<=sqrt($num);$k++){
					if($num % $k ==0){
						return false;
					}
				} 
				return true;
			}

	function check100numbers(){
			for($n=1;$n<=100;$n++){
				if(primeCheck($n) == false){
					echo "<div class='non-prime'>$n</div>";
				}else{
					echo "<div class='prime'>$n</div>";
				}
			}
	}

	check100numbers();

?>
</div>

