<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/5/2019
 * Time: 2:45 PM
 */

for ($i = 1; $i <= 5; $i++) {
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
for ($i = 1; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        echo "* ";
    }
    echo "<br>";
}
