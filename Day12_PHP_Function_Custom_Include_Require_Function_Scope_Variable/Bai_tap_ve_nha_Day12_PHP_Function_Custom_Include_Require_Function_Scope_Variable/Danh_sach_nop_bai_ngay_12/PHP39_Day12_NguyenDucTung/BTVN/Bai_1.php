<!--1.	Viết hàm tính giai thừa của 1 số, yêu cầu:-->
<!--•	Chỉ cho phép tính giai thừa với các số dương, nếu là số âm thì hiển thị ra thông báo lỗi “Không cho phép tính giai thừa trên số âm ”-->
<!--•	Kết quả hiển thị ra màn hình có dạng sau: “5! = 1 x 2 x 3 x 4 x 5 = 120”-->
<!--•	Áp dụng hàm vừa xây dựng để tính giai thừa với các giá trị sau: -5, 0, 5, 8-->
<h1>Bài 1: tính giai thừa</h1>
<?php
	function factorial($num){
		if($num<0){
			echo("<p>Math Error, try again</p>");
		}else{
			$tong = 1;
			$sum  = 1;
			for($i=2;$i<=$num;$i++){
				$tong = $tong." x ".$i;
				$sum *= $i;
			}
			echo "<p>$num! = $tong = $sum</p>";
		}
	}

	echo factorial(-5);
	echo factorial(0);
	echo factorial(5);
	echo factorial(8);
?>