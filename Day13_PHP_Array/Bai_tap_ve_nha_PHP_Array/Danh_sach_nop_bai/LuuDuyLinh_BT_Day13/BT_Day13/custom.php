<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/06/2019
 * Time: 13:21 PM
 */
$arr=[3,4,7,5,4,7,3];
$arr1 =['3'=>'a','4'=>'b','1'=>'c','5'=>'v'];

echo array_sum($arr)."<br/>";

if(array_key_exists(3,$arr)){
    echo "Key có tồn tại <br/>";
}
else{
    echo "key ko tồn tại <br/>";
}

print_r(array_merge($arr,$arr1));
echo "<br/>";
echo array_search(3,$arr)."<br/>";

print_r(array_slice($arr,3,4));
echo"<br/>";
print_r(array_unique($arr));
echo"<br/>";
print_r($arr1);
print_r(array_values($arr1));
echo "<br/>";
print_r(array_keys($arr1));
echo "<br/>";
print_r(array_pop($arr));
echo "<br/>";
print_r(array_push($arr,3,3,4));
echo "<br/>";
print_r(array_shift($arr));
echo "<br/>";
print_r(array_unshift($arr,3));
echo "<br/>";
count($arr);
echo "<br/>";
print_r(explode(',','abc,cds,asd'));
echo "<br/>";
echo end($arr);
print_r(explode('a','linh'));
echo "<br/>";
var_dump(is_array($arr));
echo "<br/>";
var_dump(sort($arr));
echo "<br/>";
var_dump(asort($arr));
echo "<br/>";
var_dump(ksort($arr1));
print_r($arr1);
echo "<br/>";
var_dump(rsort($arr1));
print_r($arr1);
echo "<br/>";
print_r(implode(",",$arr1));
echo "<br/>";
var_dump(in_array(3,$arr1));
//--String--
$string1="php FullStack 39";
$string2="Linh";
$string3=$string1.$string2;
echo "<br/>";
echo $string3;
echo "<br/>";
echo strlen($string3);
echo "<br/>";
var_dump(str_word_count($string3,1,"-"));
echo "<br/>";
echo str_word_count($string2,0,"-");
echo "<br/>";
echo strtoupper($string3);
echo "<br/>";
echo strtolower($string1);
echo "<br/>";
echo ucfirst($string1);
echo "<br/>";
echo ucwords($string1);
echo "<br/>";
echo trim($string1,'p');
echo "<br/>";
echo ltrim($string2,'L');
echo "<br/>";
echo rtrim($string2,'h');
echo "<br/>";
echo str_replace('php','java',$string1);
//--Number--
$int=3;
$float= (float) 3.2;
echo "<br/>";
var_dump(is_numeric($int));
echo "<br/>";
var_dump(is_int($int));
echo "<br/>";
var_dump(is_float($float));
echo "<br/>";
echo round($float);
echo "<br/>";
echo ceil($float);
echo "<br/>";
echo floor($float);
echo "<br/>";
echo min($int,$float);
echo "<br/>";
echo rand(3,10);
