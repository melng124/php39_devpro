<?php 

	$arrs1 = ['1', 'B', 'C','E'];
	$arrs2 = ['a', 0, null, false];
	$arrs = array();

	function chuthuong($arrs){
		$dem = count($arrs);

		for ($i = 0; $i < $dem; $i++) {
			$var = $arrs[$i];
			$var1 = (string)$var;
			$arrs[$i] = strtolower($var1);
		}
		return $arrs;
	}

	$arrs12 = chuthuong($arrs1);
	$arrs22 = chuthuong($arrs2);

	echo "<pre>";
	print_r($arrs12);
	print_r($arrs22);


?>