<?php
/*Hãy tạo mảng thứ 3 từ 2 mảng trên, mảng kết quả là mảng sau:
$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"
);*/

$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keyFlip = array_flip($keys);
$keysAndValues = array_combine($keys, $values);
echo '<pre>';
print_r($keysAndValues);

