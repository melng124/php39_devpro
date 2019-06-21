<!-- 9.	Viết hàm tính biểu thức có dạng sau
S(n) = x*2 + x*4 + ⋯ + x*2n Yêu cầu:
•	Chỉ cho phép tính toán khi n là số dương, nếu n là số âm, hiển thị thông báo “Không cho phép tính toán với số âm”, và không thực hiện xử lý
•	Ví dụ khi số n = 3 thì kết quả hiển thị sẽ có dạng như sau:
S(3) = 3*2 + 3*4 + 3*6 = 819
•	Áp dụng hàm vừa xây dựng để hiển thị với một số trường hợp sau:
-	n = -3
-	n = 0
-	n = 4
-	n = 10
-	n = 120
-	…

 -->

 <h1>Bài 9</h1>
 <?php 
 	function myMath($num){
 		if($num<=0){
 			echo "<p>With ( n = $num ) => Math Error, Try again</p>";
 		}else{
 			$tich = 1;
 			$display = "";
 			for($i=1;$i<=$num;$i++){
 				$tich *= 1/$i;
 				if($i<$num){
 					$display .= " 1/$i * ";
 				}else{
 					$display .= " 1/$i ";
 				}
 			}
 			echo "<p>S($num) = $display = $tich</p>";
 		}
 	}

 	myMath(-3);
 	myMath(0);
 	myMath(4);
 	myMath(10);
 	myMath(120);
 ?>