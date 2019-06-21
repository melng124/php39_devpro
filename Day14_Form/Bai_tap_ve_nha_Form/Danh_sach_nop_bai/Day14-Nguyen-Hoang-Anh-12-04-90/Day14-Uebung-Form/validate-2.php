<?php
if (isset($_POST['submit-form']) && isset($_POST['checkbox']) == false) {
    echo '<p class="notice">Xin hãy chấp nhận điều khoản</p>';
}
elseif (isset($_POST['submit-form'])) {
    $name = $_POST['userName'];
    $pass = $_POST['pass'];
    $display = $_POST['display'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    if (empty($name) || empty($pass) || empty($display) || empty($address) || empty($email)) {
        echo '<p class="notice">Tất cả các trường ko đc để trống</p>';
    }
    elseif (strlen($display) > 24) {
        echo '<p class="notice">Trường display name không được vượt quá 24 ký tự</p>';
    }
    else {
        echo 'Your Given details are as: <br>';
        echo "User Name: $name <br>";
        echo "Password: $email <br>";
        $type = $_POST['type'];
        if ($type == 1) {
            echo 'User Type: Select 1 <br>';
        }
        elseif ($type == 2) {
            echo 'User Type: Select 2 <br>';
        }
        else {
            echo 'User Type: Select 3 <br>';
        }
        echo "Display Name: $display <br>";
        echo "Address: $address <br>";
        echo "Email: $email <br>";
        $gender = $_POST['gender'];
        if ($gender == 1) {
            echo 'Gender: Male';
        }
        else
            echo 'Gender: Female';
    }
}
