<?php
session_start();

if(isset($_SESSION['user']) && $_SESSION['user'] != NULL){

    //kiểm tra nếu có session tên username thì xóa nó đi
    unset($_SESSION['user']);
    echo 'Bạn đã đăng xuất thành công.';
}

?>