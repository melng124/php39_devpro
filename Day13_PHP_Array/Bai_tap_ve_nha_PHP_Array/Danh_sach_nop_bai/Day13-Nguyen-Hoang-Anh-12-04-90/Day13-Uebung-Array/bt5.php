<?php
//Hãy truy xuất mảng để lấy giá trị = 3 trong mảng.
$a = array(
    "a" => array(
        "b" => 0,
        "c" => 1
    ),
    "b" => array(
        "e" => 2,
        "o" => array(
            "b" => 3
        )
    )
);
echo $a["b"]["o"]["b"];