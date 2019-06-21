<!-- 1.	Tính tổng – tích – hiệu - thương của các phần tử trong mảng sau:
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
 -->
 <h3>Bai tap 1</h3>
 <?php 
 	function myMathThuong($arr){
 		$thuong 	   = 1;
 		$thuongtxt   = " ";
 		$lengArr = sizeof($arr) - 1;
 		foreach ($arr as $key => $value) {
 			if($key == $lengArr){
 				$thuongtxt .= "$value ";
 			}else{
 				$thuong    /= $value;
 				$thuongtxt .= "$value / ";
 			}
 		}
 		$result  = "Thương các phần tử = ".$thuongtxt." = ".$thuong;
 		return $result;
 	}

 	function myMathTong($arr){
 		$tong 	   = 0;
 		$tongtxt   = " ";
 		$lengArr = sizeof($arr) - 1;
 		foreach ($arr as $key => $value) {
 			if($key == $lengArr){
 				$tongtxt .= "$value ";
 			}else{
 				$tong    += $value;
 				$tongtxt .= "$value + ";
 			}
 		}
 		$result   = "Tổng các phần tử = ".$tongtxt." = ".$tong . "<br/>";
 		return $result;
 	}

 	function myMathHieu($arr){
 		$hieu      = 0;
 		$hieutxt   = " ";
 		$lengArr = sizeof($arr) - 1;
 		foreach ($arr as $key => $value) {
 			if($key == $lengArr){
 				$hieutxt .= "$value ";
 			}else{
 				$hieu    -= $value;
 				$hieutxt .= "$value - ";
 			}
 		}
 		$result  = "Hiệu các phần tử = ".$hieutxt." = ".$hieu . "<br/>";
 		return $result;
 	}

 	function myMathTich($arr){
 		$tich      = 1;
 		$tichtxt   = " ";
 		$lengArr = sizeof($arr) - 1;
 		foreach ($arr as $key => $value) {
 			if($key == $lengArr){
 				$tichtxt .= "$value ";
 			}else{
 				$tich    *= $value;
 				$tichtxt .= "$value * ";
 			}
 		}
 		$result  = "Tích các phần tử = ".$tichtxt." = ".$tich . "<br />";
 		return $result;
 	}

 	echo '<h2>Với $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];</h2>';
	$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
 	echo myMathTong($arrs);
 	echo myMathHieu($arrs);
 	echo myMathTich($arrs);
 	echo myMathThuong($arrs);

 	echo '<h2>Với $arrs1 = [2, 5, 0];</h2>';
 	$arrs1 = [2, 5, 0];
 	echo myMathTong($arrs1);
 	echo myMathHieu($arrs1);
 	echo myMathTich($arrs1);
 	echo myMathThuong($arrs1);

 	echo '<h2>Với $arrs2 = [22, 5, -1];</h2>';
 	$arrs2 = [22, 5, -1];
 	echo myMathTong($arrs2);
 	echo myMathHieu($arrs2);
 	echo myMathTich($arrs2);
 	echo myMathThuong($arrs2);

 	echo '<h2>Với $arrs3 = [0, 5, -1];</h2>';
 	$arrs3 = [0, 5, -1];
 	echo myMathTong($arrs3);
 	echo myMathHieu($arrs3);
 	echo myMathTich($arrs3);
 	echo myMathThuong($arrs3);


 ?>