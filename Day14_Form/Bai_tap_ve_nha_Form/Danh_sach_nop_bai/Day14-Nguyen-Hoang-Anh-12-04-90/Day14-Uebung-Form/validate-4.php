<?php
if (isset($_POST['submit-form'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $state = $_POST['state'];
    if (empty($firstName)) {
        echo '<p class="notice">Firstname không được để trống</p>';
    }
    elseif (empty($lastName)) {
        echo '<p class="notice">Lastname không được để trống</p>';
    }
    elseif (empty($_POST['gender'])) {
        echo '<p class="notice">Chưa xác định giới tính</p>';
    }
    else {
        echo '<p class="result">Đăng ký thành công! <br> Thông tin của bạn: </p>';
        echo "Firstname: $firstName <br>";
        echo "Lastname: $lastName <br>";
        $gender = $_POST['gender'];
        if ($gender == 1) {
            echo 'Gender: Male <br>';
        }
        else {
            echo 'Gender: Female <br>';
        }
        if ($state == 1) {
            echo 'State: Johor';
        }
        elseif ($state == 2) {
            echo 'State: Rojh';
        }
        else {
            echo 'State: Hjro';
        }
    }
}