<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/06/2019
 * Time: 11:54 AM
 */
function caculator($a)
{
    $sum = 0;
    $sub = $a[0];
    $multi = 1;
    $div = $a[0];
    for ($key = 1; $key < count($a); $key++) {
        $sum += $a[$key];
        $sub -= $a[$key];
        $multi *= $a[$key];
        if ($a[$key] == 0) {
            continue;
        }
        $div /= $a[$key];

    }
    $b=number_format($div,8,$dec_point = "." , $thousands_sep = "," );

    return "Tổng của mảng la : $sum <br/> 
            Hiệu của mảng là : $sub <br/>
            Tích của mảng là : $multi <br/>
            Thương của mảng là :$b";
}
echo caculator([2, 5, 6, 9, 2, 5, 6, 12 ,5]);