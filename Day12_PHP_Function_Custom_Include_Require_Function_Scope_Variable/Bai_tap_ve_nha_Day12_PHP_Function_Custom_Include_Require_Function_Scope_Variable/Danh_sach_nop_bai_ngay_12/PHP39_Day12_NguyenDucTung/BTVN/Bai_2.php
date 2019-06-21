<!--
2.	Viết các hàm tính chu vi và diện tích hình tròn với đường kính cho trước, mô tả như sau:
•	Chỉ cho phép tính toán khi đường kính là số dương, nếu đường knhs là số âm, hiển thị thông báo “Không cho phép tính toán với số âm”, và không thực hiện xử lý
•	Ví dụ kết quả hiển thị sẽ có dạng như sau:
Chu vi hình tròn = <giá-trị>
Diện tích hình tròn = <giá-trị>
•	Áp dụng hàm vừa xây dựng để tính chu vi và diện tích với một số trường hợp sau:
-	d = -3
-	d = 0
-	d = 5
-	d = 7.5
-	d = 100
-	…
-->
<?php
function RoundPeripheral($d){
	if($d<=0){
		echo "<p>Math Error</p>";
	}else{
		$p = $d * 3.14;
		echo "<p>Peripheral of this above round has d = $d is: ".$p ." m</p>";
	}
}

function RoundSquare($d){
	if($d<=0){
		echo "<p>Math Error</p>";
	}else{
		$s = pow($d,2)/4 * 3.14;
		echo "<p>Square of this above round has d = $d is: ".$s." m<sup>2</sup></p>";
	}	
}

echo RoundSquare(-3);
echo RoundPeripheral(-3);
echo RoundSquare(0);
echo RoundPeripheral(0);
echo RoundSquare(5);
echo RoundPeripheral(5);
echo RoundSquare(7.5);
echo RoundPeripheral(7.5);
echo RoundSquare(100);
echo RoundPeripheral(100);

?>