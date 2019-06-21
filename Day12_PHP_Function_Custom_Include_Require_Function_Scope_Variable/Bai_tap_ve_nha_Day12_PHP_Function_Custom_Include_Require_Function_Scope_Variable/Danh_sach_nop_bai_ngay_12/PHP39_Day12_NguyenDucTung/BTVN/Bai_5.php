<!--
5.	Viết hàm giải phương trình bậc hai, mô tả như sau:
•	Phương trình bậc hai là phương trình có dạng: ax2 + bx + c = 0
•	Áp dụng hàm vừa xây dựng để giải phương trình bậc hai với một số trường hợp sau:
-	a = 0, b = 0, c = 2
-	a = 2, b = 4, c = -6
-	a = 0, b = 5, c = 5
-	a = 5, b = 0, c = 5
-	….
-->
<h1>Bài 5</h1>
<?php 
	function phuongtrinhbac2($a,$b,$c){
		if($a==0){
			if(($b == 0) && ($c == 0)){
				$result = "Phương trình vô số nghiệm";
			}elseif (($b == 0) && ($c != 0)) {
				$result = "Phương trình vô nghiệm";
			}else{
				$result = "x= ".(-$c / $b); 
			}
		}else{
			$deta = $b * $b - 4 * $a * $c;
			if($deta<0){
				$result = "Phương trình vô nghiệm";
			}else{
				$x1 = (-$b+sqrt($deta))/(2*$a);
				$x2 = (-$b-sqrt($deta))/(2*$a);
				$result = 'x<sub>1</sub>= '.$x1.', x<sub>2</sub>= '.$x2; 
			}
		}
		return "<p>Phương trình $a x<sup>2</sup> + $b x + $c = 0 có nghiệm là: ".$result."</p>";
	}
	echo phuongtrinhbac2(0,0,2);
	echo phuongtrinhbac2(2,4,-6);
	echo phuongtrinhbac2(0,5,5);
	echo phuongtrinhbac2(5,0,5);
?>