<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 13/6/2019
 * Time: 8:40 PM
 */
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
function arraytotal($x, $y){
    $temp = array();
    $temp[] = $x;
    if(is_scalar($y)){
        $temp[] = $y;
    }
    else{
        foreach ($y as $key => $value){
            $temp[]=$value;

        }
    }
    return $temp;
}
echo "<pre>";
print_r(array_map("arraytotal",  $keys, $values));
?>