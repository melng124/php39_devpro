<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/6/2019
 * Time: 23:12 PM
 */
?>
<!--<table>-->
<?php
function check($a)
{
//    if ($a < 2) {
//        return true;
//    } else {
    if ($a >= 1 && $a <= 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($a); $i++) {
        if ($a% $i == 0) {
            return false;
        }
    }
    return true;
}

//var_dump(check(15));
for ($i = 0; $i < 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $a = $j + ($i * 10);
        if (check($a) == false){
            echo "<span style='width: 40px; height: 40px; background: #ffffff; display: inline-block; border: 1px solid;text-align: center'>$a</span>";
        }else{
            echo "<span style='width: 40px; height: 40px; background: #a5dc3c; display: inline-block; border: 1px solid;text-align: center'>$a</span>";
        }
    }
    echo "<br/>";
}
?>
