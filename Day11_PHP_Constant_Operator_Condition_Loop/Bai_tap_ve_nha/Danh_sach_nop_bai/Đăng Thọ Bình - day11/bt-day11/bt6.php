<?php
//Giả sử n = 50, x = 5
$n = 50;
$x = 5;

//Khai báo biến tổng và gán giá trị ban đầu = 0
$tong = 0;

//Bắt đầu lặp và cộng dồn vào biến tổng
for ($i = 1; $i <= $n; $i++){
    $tong += $x * (2 * $i);
}

//in kết quả
echo "Tổng là: " . $tong;
?>
