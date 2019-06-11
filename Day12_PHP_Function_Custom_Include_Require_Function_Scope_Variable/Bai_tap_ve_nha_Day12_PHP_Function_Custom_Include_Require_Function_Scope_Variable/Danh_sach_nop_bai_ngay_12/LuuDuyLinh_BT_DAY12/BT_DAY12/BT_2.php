<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 09/06/2019
 * Time: 0:10 AM
 */
function check($radius){
    if($radius<=0){
        return false;
    }
    return true;
}
function caculator($radius){
    if (check($radius)){
        echo "Chu vi Diện Tích Hình Tròn Có Bán Kính Là $radius";
        echo "<p></p>";
        echo "Chu vi là :".(2*pi()*$radius);
        echo "<p></p>";
        echo "Diện Tích La :".(pi()*$radius*$radius);
    }
    else{
        echo 'Không cho phép tính toán với số âm';
    }
}
caculator(-3);
echo "<p></p>";
caculator(0);
echo "<p></p>";
caculator(5);
echo "<p></p>";
caculator(7.5);
echo "<p></p>";
caculator(10);
