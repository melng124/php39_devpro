<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/6/2019
 * Time: 12:25 PM
 */
$n = 5; // gán giá trị cho biến n
$tong = 0;
for ($i=1; $i<=$n; $i++){
    $tong += (1/$i);
}
echo "Tổng = ".$tong."<br>";

?>