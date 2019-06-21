<!--
6.	Viết hàm tìm max – min của 4 giá trị cho trước là a – b – c - d, với mô tả như sau
•	Kết quả hiển thị ra màn hình có dạng sau: “Max = <giá-trị>, Min = <giá-trị>”
•	Áp dụng hàm vừa xây dựng để tìm max-min với một số trường hợp sau:
-	a = 0, b = 0, c = 2, d = 6
-	a = 2, b = 4, c = -6, d = -10
-	a = 0, b = 5, c = 5, d  = 2
-	a = 5, b = 0, c = 5, d = 4
-	…

-->
<h1>Bài 6</h1>
<?php 
	function tim_min($a,$b,$c,$d){
		$min = $a;
		if($min>=$b){
			$min = $b;
		}
		if($min>=$c){
			$min = $c;
		}
		if($min>=$d){
			$min = $d;
		}
		echo "</p>"."MIN($a,$b,$c,$d) = ".$min."</p>";
	}

	function tim_max($a,$b,$c,$d){
		$max = $a;
		if($max<=$b){
			$max = $b;
		}
		if($max<=$c){
			$max = $c;
		}
		if($max<=$d){
			$max = $d;
		}
		echo "</p>"."MAX($a,$b,$c,$d) = ".$max."</p>";
	}

	 echo tim_min(0,0,2,6);
	 echo tim_max(0,0,2,6);
	 echo tim_min(2,4,-6,-10);
	 echo tim_max(2,4,-6,-10);
	 echo tim_min(0,5,5,2);
	 echo tim_max(0,5,5,2);
	 echo tim_min(5,0,5,4);
	 echo tim_max(5,0,5,4);



?>