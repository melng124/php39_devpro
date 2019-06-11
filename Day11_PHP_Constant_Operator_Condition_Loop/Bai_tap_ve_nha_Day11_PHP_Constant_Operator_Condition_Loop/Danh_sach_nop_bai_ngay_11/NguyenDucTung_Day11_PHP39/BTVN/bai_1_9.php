<!-- Bài 1.	Viết chương trình web tính chu vi, diên tích của hình chữ nhật có chiều dài = 10 cm, chiều rộng = 5cm sử dụng PHP.
Kết quả hiển thị sẽ có dạng:
Chiều dài hình chữ nhật = 10cm
Chiều rộng hình chữ nhật = 5cm
Chu vi hình chữ nhật = <giá-trị>m
Diện tích hình chữ nhật = <giá-trị>m2 -->
<h1>Bài 1</h1>
<b>
<?php 
	$dai = 10;
	$rong = 5;
	// Kết quả hiển thị:
	echo "Chiều dài hình chữ nhật là: $dai cm";
	echo "<br/>";
	echo "Chiều rộng hình chữ nhật là: $rong cm";
	echo "<br/>";
	echo "Chu vi hình chữ nhật là: ".($rong+$dai)*2 ." cm";
	echo "<br/>";
	echo "Diện tích hình chữ nhật là: ".($dai*$rong)." cm<sup>2</sup>";
	echo "<br/>";
?>
</b>

<!--Bài 2.	Viết chương trình web tính chu vi, diên tích của hình chữ vuông có cạnh 12cm sử dụng PHP.
Kết quả hiển thị sẽ có dạng:
Cạnh hình vuông = 12cm
Chu vi hình vuông= <giá-trị>m
Diện tích hình vuông = <giá-trị>m2
 -->
 <h1>Bài 2</h1>
 <b>
 <?php
 		$canh = 12;
 		echo "Cạnh hình vuông: ".$canh;
 		echo "<br/>";
 		echo "Chu vi hình vuông: ".$canh*4;
 		echo "<br/>";
 		echo "Diện tích hình vuông: ".$canh*$canh;
 		echo "<br/>";
 ?>
 </b>

<!--Bài 3.	Viết chương trình web tính chu vi, diên tích của hình tròn có đường kính = 6cm sử dụng PHP
Kết quả hiển thị sẽ có dạng:
Đường kính hình tròn = 6cm
Chu vi hình tròn= <giá-trị>m
Diện tích hình tròn = <giá-trị>m2 -->
<h1>Bài 3</h1>
<b>
	<?php
		$duongkinh = 6;
		echo "Đường kính hình tròn là ".$duongkinh." cm";
		echo "<br/>";
		echo "Chu vi hình tròn là: ".$duongkinh*3.14." cm";
		echo "<br/>";
		echo "Diện tich hình tròn là: ".pow($duongkinh,2)/4 * 3.14." cm<sup>2<sup>";
	?>
</b>


<!-- 4.	Hiển thị chuỗi với mô tả như sau sử dụng PHP:
•	Chuỗi ký tự từ 1 đến 50
•	Phân cách nhau bởi ký tự –
•	Không có ký tự – này ở đầu và cuối của chuỗi đó
•	Kết quả sẽ có dạng sau: 
1 – 2 – 3 – 4 – 5 – 6- 7 – 8 – 9 – 10 – … – 45 – 46 – 47 – 48 – 49 – 50 -->
<h1>Bài 4</h1>
<?php 
	$i = 1;
	while($i<=50){
		if($i==50){
			echo "50";
			break;
		}else{
			echo "$i  - ";
			$i++;
		}
	}
?>

<!-- 5.	Viết chương trình tính tổng S(n) = 1 + 1/2 + 1/3 + 1/4 +… 1/n, sử dụng PHP với n là biến cho trước -->
<h1>Bài 5</h1>
<?php
	$n =5;
	$tong = 0.0;
	for($i=1;$i<=$n;$i++){
		$tong += 1/$i;
	}
	echo "Tổng là: ".$tong;
?>

<!-- Bài 6.	Viết chương trình tính tổng S(n) = x*2 + x*4 + ⋯ + x*2n, sử dụng PHP với n là biến cho trước -->
<h1>Bài 6</h1>
<?php
	$n = 3;
	$x = 5;
	$tong = 0;
	for ($i=1; $i <=$n ; $i++) { 
			$tong += $x + $i *2;
		}
	echo "Tổng là: ".$tong;	
?>

<!-- 7.	Hãy thực hiện tính tổng các số từ 1 tới 500 sử dụng PHP. Kết quả hiển thị sẽ có dạng:
Tổng các số từ 1 đến 500 = <giá-trị> -->
<h1>Bài 7</h1>
<?php
	$tong = 0;
	for ($i=1; $i <=500; $i++) { 
		$tong += $i;
	}
	echo "Tổng từ 1 đến 500 là: ".$tong;
?>

<!-- 8.	Hiển thị cấu trúc sau sử dụng PHP
*  
* *  
* * *  
* * * *  
* * * * *    -->
<h1>Bài 8</h1>
<?php
	for ($i=0; $i < 5; $i++) { 
		for($j=0;$j<=$i;$j++){
			echo " * ";
		}
		echo "<br/>";
	}
?>

<!-- 9.	Hiển thị cấu trúc sau sử dụng PHP
* 
* * 
* * * 
* * * * 
* * * * * 
* * * * * 
* * * * 
* * * 
* * 
*  -->
<h1>Bài 9</h1>
<?php
	for ($i=0; $i < 5; $i++) { 
		for($j=0;$j<=$i;$j++){
			echo " * ";
		}
		echo "<br/>";
	}
	for ($i=5; $i > 0; $i--) { 
		for($j=$i;$j> 0;$j--){
			echo " * ";
		}
		echo "<br/>";
	}
?>


