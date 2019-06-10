<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 04/06/2019
 * Time: 23:55 PM
 */
$n=4;
$sum=0;
$sum1="";
for($i=1;$i<=$n;$i++)
{
    if($i==$n)
    {
        $sum1=$sum1."1/".$i;
        $sum+=1/$i;
        break;
    }
    if($i==1)
    {
        $sum1=$sum1."1+";
        $sum+=1/$i;
        continue;
    }
    $sum1=$sum1."1/".$i."+";
    $sum+=1/$i;

}
echo "$sum1 = $sum";