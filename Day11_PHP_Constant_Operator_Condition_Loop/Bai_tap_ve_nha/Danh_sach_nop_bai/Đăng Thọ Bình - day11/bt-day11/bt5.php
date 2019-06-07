<?php
// Giả sử n = 100
$n = 100;

// Khai báo biến tổng và gán giá trị ban đầu = 0
$tong = 0;

// Bắt đầu lặp và cộng dồn vào biến tổng
for ($i = 1; $i <= $n; $i++){

    $tong += 1/$i;
}

// In kết quả
echo "Tổng là: " . $tong;
?>
