<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/06/2019
 * Time: 12:54 PM
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
$newarr =[
    "$keys[field1]" => "$values[field1value]",
    "$keys[field2]" => "$values[field2value]",
    "$keys[field3]" => "$values[field3value]",
];
var_dump($newarr);