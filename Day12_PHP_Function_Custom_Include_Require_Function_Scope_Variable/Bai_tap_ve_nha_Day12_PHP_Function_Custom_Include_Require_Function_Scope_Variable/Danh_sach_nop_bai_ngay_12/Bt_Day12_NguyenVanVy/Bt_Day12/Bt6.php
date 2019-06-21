<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/10/2019
 * Time: 5:30 PM
 */

function check($num1,$num2,$num3,$num4){
    $max=max($num1,$num2,$num3,$num4);
    $min=min($num1,$num2,$num3,$num4);
    return '<p>Giá trị lớn nhất = '.$max.'<br>Giá trị nhỏ nhất = '.$min.'</p>';
}
echo check(0,0,2,6);
echo check(2,4,-6,-10);
echo check(0,5,5,2);
echo check(5,0,5,4);