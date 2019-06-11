<?php
$a = 0;
$b = 5;
$c = 2;
$d = -2;
$e = 0;
$f = 0;
if($a!=0){
    $kq = -$b/$a;
    echo 'Phuong trinh: '.$a.'x + '.$b.' = 0'."<br/>";
    echo 'Ket qua: x= '.$kq;
}else{
    echo 'Phuong trinh: '.$a.'x + '.$b.' = 0'."<br/>";
    echo 'Phương trình vô nghiệm';

    echo'<br/>';
    echo'<br/>';
}if($c!=0){
    $kq = -$c/$d;
    echo 'Phuong trinh: '.$c.'x + '.$d.' = 0'."<br/>";
    echo 'Ket qua: x= '.$kq;
}else{
    echo 'Phuong trinh: '.$c.'x + '.$d.' = 0'."<br/>";
    echo 'Phương trình vô nghiệm';


    echo'<br/>';
}if($e!=0){
    $kq = -$e/$f;
    echo 'Phuong trinh: '.$e.'x + '.$f.' = 0'."<br/>";
    echo 'Ket qua: x= '.$kq;
}else{
    echo 'Phuong trinh: '.$e.'x + '.$f.' = 0'."<br/>";
    echo 'Phương trình vô nghiệm';
}
?>