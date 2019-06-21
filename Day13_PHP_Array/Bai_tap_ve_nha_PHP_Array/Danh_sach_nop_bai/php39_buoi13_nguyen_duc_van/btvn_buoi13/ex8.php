<?php 

	$arrs1 = ['1', 'b', 'c', 'd'];
	$arrs2 = ['a', '0', null, false];

	$arrs = array();

	function chuhoa($arrs){
		$dem = count($arrs);

		for ($i = 0; $i < $dem; $i++) {
			$var = $arrs[$i];
			$var1 = (string)$var;
			$arrs[$i] = strtoupper($var1);
		}
		return $arrs;
	}

	$arrs12 = chuhoa($arrs1);
	$arrs22 = chuhoa($arrs2);

	echo "<pre>";
	print_r($arrs12);
	print_r($arrs22);


?>