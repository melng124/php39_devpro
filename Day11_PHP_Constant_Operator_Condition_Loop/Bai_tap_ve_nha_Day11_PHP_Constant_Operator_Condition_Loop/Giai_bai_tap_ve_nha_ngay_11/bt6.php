<?php
/*
 * Viết chương trình tính tổng S(n) = x^2 + x^4 + ⋯ + x^2n, sử dụng PHP với n là biến cho trước, ^ là ký tự số mũ
 */
$n = 3;
$x = 3;
$text = "S($n) = ";
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
  $expression = $i * 2;
  $sum += pow($x, $expression);
  $text .= "$x<sup>$expression</sup>";
  if ($i == $n) {
    $text .= " = " . $sum;
    continue;
  }
  $text .= " + ";
}

echo $text;