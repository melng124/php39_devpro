<!-- 8.	Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
VD: mảng 1 có các phần tử  [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘A’, ‘B’, ‘ABC’]
•	Áp dụng với 1 số mảng sau:
$arrs = [‘1’, ‘b, ‘c’, ‘d’];
$arrs = [‘a’, 0, null, false];
-->
 <h2>Bài tập 8</h2>
 <?php 
 
 	$arrs = ['1','b','c','d'];
 	echo "<pre>";
 	echo print_r(array_change_key_case($arrs,CASE_LOWER));
 	echo "</pre>";


 	
 	$arrs2 = ['a', 0, null, false];
 	echo "<pre>";
 	echo print_r(array_change_key_case($arrs2,CASE_LOWER));
 	echo "</pre>";
 ?>
