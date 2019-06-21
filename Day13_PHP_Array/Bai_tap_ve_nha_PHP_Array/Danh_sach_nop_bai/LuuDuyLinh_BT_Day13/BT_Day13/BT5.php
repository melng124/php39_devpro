<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/06/2019
 * Time: 12:43 PM
 */
$a = [
    "a" =>[
        "b" => 0,
        "c" =>1,
        ],
    "b" => [
        "e" => 2,
        "o" =>[
            "b" =>3,
        ]
    ]
];
$e =$a["b"]["o"]["b"];
var_dump($e);
