<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/5/2019
 * Time: 12:43 PM
 */
for($i=1; $i <= 5; $i++)
{
    for ($j=1; $j <= $i; $j++)
    {
        echo "*";
        if($j < $i)
        {
            echo " ";
        }
    }
    echo "<br>";
}