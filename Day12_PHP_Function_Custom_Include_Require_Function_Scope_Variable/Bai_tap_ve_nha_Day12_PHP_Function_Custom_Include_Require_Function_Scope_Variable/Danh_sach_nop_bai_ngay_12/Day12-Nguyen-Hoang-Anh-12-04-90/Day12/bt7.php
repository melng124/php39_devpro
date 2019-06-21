<?php
function display($n) {
    if ($n < 0) {
        echo 'Không thể hiển thị các ký tự * với số âm';
    }
    elseif ($n == 0) {
        echo 'Không xảy ra gì cả!';
    }
    else {
        for ($i = 1; $i <= $n; $i++) {
            for ($k = 1; $k <= $i; $k++){
                echo '* ';
            }
            echo '<br>';
        }
    }
}

display(-3);
echo '<hr>';
display(0);
echo '<hr>';
display(2);
echo '<hr>';
display(5);
echo '<hr>';
display(10);