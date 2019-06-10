<?php
/*
 * Viết chương trình tính tổng S(n) = 1 + 1/2 + 1/3 + 1/4 +… 1/n, sử dụng PHP với n là biến cho trước
 */
$n = 10;
$sum = 0;
$text = "S($n) = ";
for ($i = 1; $i <= $n; $i++) {
  $sum += 1 / $i;
  if ($i == 1) {
    $text .= "1";
  } else {
    $text .= "1/$i";
  }
  if ($i == $n) {
    $text .= " = ";
    continue;
  }
  $text .= " + ";
}
$text .= $sum;
echo $text;