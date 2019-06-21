<?php
for($x=1; $x <= 5; $x++)
{
    for ($y=1; $y <= $x; $y++)
    {
        echo "*";
        if($y < $x)
        {
            echo " ";
        }
    }
    echo "<br>";
}
$i = 1;
while ($i < 6)
{
    $j = $i;
    while ($j < 6)
    {
        echo " * ";
        $j++;
    }
    echo '<br>';
    $i++;
}