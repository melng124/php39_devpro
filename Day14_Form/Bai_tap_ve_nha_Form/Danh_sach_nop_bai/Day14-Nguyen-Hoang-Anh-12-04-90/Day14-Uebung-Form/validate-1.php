<?php
if (isset($_POST['submit-form'])) {
    $name = $_POST['userName'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $details = $_POST['details'];

    if (empty($name)) {
        echo '<p class="notice">Tên ko đc để trống</p>';
    }
    elseif (empty($email)) {
        echo '<p class="notice">Email ko đc để trống</p>';
    }
    elseif (empty($time) || empty($details)) {
        echo '<p class="notice">Các trường Specific Time, Class details không được để trống</p>';
    }
    else {
        echo 'Your Given details are as: <br>';
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Specific Time: $time <br>";
        echo "Class details: $details <br>";
        $gender = $_POST['gender'];
        if ($gender == 1) {
            echo 'Gender: Female';
        }
        else {
            echo 'Gender: Male';
        }
    }
}
