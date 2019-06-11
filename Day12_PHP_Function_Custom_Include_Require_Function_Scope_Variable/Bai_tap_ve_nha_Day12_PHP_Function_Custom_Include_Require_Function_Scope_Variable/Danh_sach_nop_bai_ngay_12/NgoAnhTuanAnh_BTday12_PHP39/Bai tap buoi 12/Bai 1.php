<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai 1</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/6/2019
 * Time: 2:21 PM
 */
function facorial($n){
    if($n < 0){
        // kiểm tra điều kiện nếu biến nhập vào là số âm hiển thị thông báo
        echo "Không cho phép tinh với giá trị âm";
    }
    else if($n == 0){
        // kiểm tra nếu biến nhập vào bằng 0 hiển thị !0 = 1;
        echo"! $n = 1";
    }
    else{
        $a = 1;
        echo "$n! = ";
        for ($j = 1; $j < $n; $j++){
            $a *= $j;
            echo "$j"."x";
        }
        echo "$n";
        $a = $a*$n;
        echo "= $a.<br>";
    }

}
facorial(5);
facorial(0);
facorial(-5);
facorial(8);
//$result = facorial(8);
//echo "kết quả là: ".$result;
?>
</body>
</html>
