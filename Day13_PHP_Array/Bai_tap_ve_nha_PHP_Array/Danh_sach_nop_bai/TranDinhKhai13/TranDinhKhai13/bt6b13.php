<?php

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
  $key=array_values ($keys);
  $value=array_values ($values);
$keysAndValues=array_combine($key,$value);
print_r($keysAndValues);
?>