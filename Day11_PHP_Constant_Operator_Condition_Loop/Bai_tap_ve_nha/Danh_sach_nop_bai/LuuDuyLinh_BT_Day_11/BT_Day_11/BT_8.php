<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 05/06/2019
 * Time: 0:32 AM
 */
$n=5;
for($i=1;$i<=$n;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        if($i==$n+1)
        {
            break;
        }
        echo "*";
    }
    echo "<br/>";
}