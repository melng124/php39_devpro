<?php
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
   ),
   "b"=>array(
       "e"=>2,
       "o"=>array(
           "b"=>3
       )
   )
);
$n=$a['b']['o']['b'];
echo"$n";

