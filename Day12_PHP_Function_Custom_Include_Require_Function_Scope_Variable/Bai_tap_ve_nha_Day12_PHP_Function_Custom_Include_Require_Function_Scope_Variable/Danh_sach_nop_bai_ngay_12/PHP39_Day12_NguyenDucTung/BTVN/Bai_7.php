<!-- 7.	Viết hàm hiển thị các ký tự * dựa vào số n cho trước, mô tả như sau:
•	Nếu n là số âm, thì hiển thị thông báo “Không thể hiển thị các ký tự * với số âm” và không thực hiện hiển thị
•	Ví dụ khi số n thỏa mãn thì kết quả hiển thị sẽ như sau:
-	Với n = 2 sẽ hiển thị như sau
*  
* *  
-	Với n = 5 sẽ hiển thị như sau
*  
* *  
* * *  
* * * *  
* * * * *   
•	Áp dụng hàm vừa xây dựng để hiển thị với một số trường hợp sau:
-	n = -3
-	n = 0
-	n = 2
-	n = 5
-	n = 10
-	…
 -->

 <h1>Bài 7</h1>
 <?php 
 	function draw($n){
 		if($n<=0){
 			echo "<p>Can not draw because n = $n less than 0</p>";
 		}else{
 			echo "<p>With n = $n</p>";
 			for($i=0;$i<$n;$i++){
 				for($k=0;$k<=$i;$k++){
 					echo " * ";
 				}
 				echo "<br/>";
 			}
 		}
 	}

 	draw(-3);
 	draw(0);
 	draw(2);
 	draw(5);
 	draw(10);
 ?>