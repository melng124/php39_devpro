<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/6/2019
 * Time: 4:35 PM
 */
function maxValue($a, $b, $c, $d){
    return max($a,$b, $c, $d);

}
$max = maxValue(2,4,-6,-10);
echo "Max = ".$max."<br>";

function minValue( $a, $b, $c, $d){
    return min($a, $b, $c, $d);
}
$min = minValue(2,4,-6,-10);
echo "Min = ".$min;
?>