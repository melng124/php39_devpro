<?php
function giaiptb1($a,$b){
    echo 'Giải phương trình : '.$a.'x'.' + '.$b.' = 0 <br/>';
    if($a==0&&$b==0) echo 'Phương trình có vô số nghiệm.';
    if($a==0&&$b!=0) echo 'Phương trình vô nghiệm.';
    if($a!=0) echo 'Nghiệm của phương trình là : x = '.($b/$a);
    echo "<hr>";
}
?>