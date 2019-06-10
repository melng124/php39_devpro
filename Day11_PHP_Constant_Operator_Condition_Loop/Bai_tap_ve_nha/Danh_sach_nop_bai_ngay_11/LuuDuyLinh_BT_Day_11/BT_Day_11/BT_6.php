<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 04/06/2019
 * Time: 23:59 PM
 */
$x=2;
$n=4;
$sum=0;
$sum1="";
for($i=1;$i<=$n;$i++)
{
    if($i==$n)
    {
        $sum1=$sum1.$x."^".($i*2);
        $sum+=pow($x,2*$i);
        break;
    }
    $sum1=$sum1.$x."^".($i*2)."+";
    $sum+=pow($x,2*$i);
}
echo "$sum1 = $sum";