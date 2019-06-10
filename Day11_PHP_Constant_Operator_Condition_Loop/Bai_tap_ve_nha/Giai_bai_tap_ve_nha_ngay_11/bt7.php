<?php
/*
 * Hãy thực hiện tính tổng các số từ 1 tới 500 sử dụng PHP.
Kết quả hiển thị sẽ có dạng:
Tổng các số từ 1 đến 500 = <giá-trị>
 */
$sum = 0;
$text = "Tổng các số từ 1 đến 500 = ";
for ($i = 1; $i <= 500; $i++) {
  $sum += $i;
  $text .= $i;
  if ($i == 500) {
    $text .= " = " . $sum;
    continue;
  }
  $text .= " + ";
}
echo $text;