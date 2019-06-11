<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/9/2019
 * Time: 9:59 PM
 */
function GiaiThua($n)
{
    if ($n == 0) {

        return '<p>'.$n. '! = 1</p>';
    }
    elseif ($n > 0) {
        $gt=1;
        echo $n.'! = ';
        for ($i=1;$i<=$n;$i++){
            $gt*=$i;
            if ($i<$n){

                echo $i.' x ';
            }
            else{
                echo $i.' = ';
            }
        }
        echo $gt.'<br>';
    }
    else{
        return 'Không cho phép tính giai thừa trên số âm';
    }

}

echo '<br>'.GiaiThua(-5);
echo '<br>'.GiaiThua(0);
echo '<br>'.GiaiThua(5);
echo '<br>'.GiaiThua(8);
