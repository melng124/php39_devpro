<?php 
	$arr = array();
	function totalArray($arr){
		$lengthArray = count($arr);
		$result = $arr[0];

		echo "Tổng các phần tử bằng = ";
		echo $result;
		
		for ($i = 0; $i < $lengthArray; $i++){
			$result += $arr[$i];
			echo " + ".$arr[$i];			

		}
		echo " = ".$result."<br />";
	}

	function multiplyArray($arr){
		$lengthArray = count($arr);
		$result = $arr[0];
		echo "Tích các phần tử bằng = ";
		echo $result;
		
		for ($i = 0; $i < $lengthArray; $i++){
			$result *= $arr[$i];
			echo " * ".$arr[$i];			

		}
		echo " = ".$result."<br />";
	}

	function subArray($arr){
		$lengthArray = count($arr);
		$result = $arr[0];

		echo "Hiệu các phần tử bằng = ";
		echo $result;
		
		for ($i = 0; $i < $lengthArray; $i++){
			$result -= $arr[$i];
			echo " - ".$arr[$i];			

		}
		echo " = ".$result."<br />";
	}

	function splitArray($arr){
		$lengthArray = count($arr);
		$result = $arr[0];
		$kt = 1;
		
		for ($j = 1; $j < $lengthArray; $j++){
			$kt = $kt* $arr[$j];
			
		}
		if($kt == 0){
			echo "Có phần tử trong mảng = 0, không thực hiện được phép chia <br />";
		}else if($kt != 0 && $result == 0){
			echo "Thương các phần tử bằng = 0 <br />";
		}else if($kt != 0 && $result != 0){
			echo "Thương các phần tử bằng";
			echo $result;
				
			for ($i = 0; $i < $lengthArray; $i++){
				$result /= $arr[$i];
				echo " / ".$arr[$i];			

			}
			echo " = ".$result."<br />";

		}
	}


	echo "<pre>";
	$arr1 = [2,5,0];
	echo "Mảng ";
	print_r($arr1);
	echo " có ";
	totalArray([2,5,6,9,2,5,6,12,5]);
	multiplyArray([2,5,6,9,2,5,6,12,5]);
	splitArray([2,5,6,9,2,5,6,12,5]);
	subArray([2,5,6,9,2,5,6,12,5]);

	$arr1 = [2, 5, 0];
	echo "Mảng ";
	print_r($arr1);
	echo " có ";
	totalArray([2, 5, 0]);
	multiplyArray([2, 5, 0]);
	splitArray([2, 5, 0]);
	subArray([2, 5, 0]);

	$arr1 = [22, 5, -1];
	echo "Mảng ";
	print_r($arr1);
	echo " có ";
	totalArray([22, 5, -1]);
	multiplyArray([22, 5, -1]);
	splitArray([22, 5, -1]);
	subArray([22, 5, -1]);

	$arr1 = [0, 5, -1];
	echo "Mảng ";
	print_r($arr1);
	echo " có ";
	totalArray([0, 5, -1]);
	multiplyArray([0, 5, -1]);
	splitArray([0, 5, -1]);
	subArray([0, 5, -1]);



 ?>