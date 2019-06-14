<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 13/6/2019
 * Time: 9:55 AM
 */
$a = [
    'a' => array(
        'b' => 0,
        'c' => 1
    ),
    'b' => array(
        'e'=>2,
        'o'=>array(
            'b' =>3
        )
)
];
    $result = $a['b']['o']['b'];
echo $result;
?>