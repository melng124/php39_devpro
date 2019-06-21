<!--
	4.	Viết hàm giải phương trình bậc nhất, mô tả như sau:
•	Phương trình bậc nhất là phương trình có dạng: ax + b = 0
•	Áp dụng hàm vừa xây dựng để giải phương trình bậc nhất với một số trường hợp sau:
-	a = 0, b = 5
-	a = 2, b = -2
-	a = 0, b = 0
-	…
--->
<h1>Bài 4-Giải phương trình bậc 1</h1>
<?php
	function phuongtrinhbac2($num1,$num2){
		if(($num1 == 0) && ($num2 == 0)){
			$result = "<p>Phương trình vô số nghiệm</p>";
		}elseif (($num1 == 0) && ($num2 != 0)) {
			$result = "<p>Phương trình vô nghiệm</p>";
		}else{
			$result = '<p>'.-$num2 / $num1.'</p>'; 
		}
		return $result;
	}

	echo phuongtrinhbac2(0,5);
	echo phuongtrinhbac2(2,-2);
	echo phuongtrinhbac2(0,0);
?>