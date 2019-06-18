<?php
if (isset($_POST['submit-form'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $comments = $_POST['comments'];

    if (empty($email)) {
        echo '<p class="notice">Email ko đc để trống</p>';
    }
    elseif (empty($pass)) {
        echo '<p class="notice">Password ko đc để trống</p>';
    }
    elseif (strlen($pass) < 8 ) {
        echo '<p class="notice">Password phải có độ dài tối thiểu 8 ký tụ</p>';
    }
    else {
        echo '<p class="result">Đăng ký thành công! <br> Thông tin của bạn: </p>';
        echo "Email: $email <br>";
        echo "Password: $pass <br>";
        $level = $_POST['level'];
        if ($level == 1) {
            echo "Academic level: Freshman <br>";
        }
        elseif ($level == 2) {
            echo "Academic level: Bachelor <br>";
        }
        else {
            echo "Academic level: Master <br>";
        }
        $coursesArr = $_POST['checkbox'];
        echo "Course: ";
        foreach ($coursesArr as $value) {
            if ($value == 1) {
                echo '1700 <br>';
            }
            elseif ($value == 2) {
                echo '1800 <br>';
            }
            elseif ($value == 3) {
                echo '1900 <br>';
            }
            elseif ($value == 4) {
                echo '2000 <br>';
            }
            else {
                echo '2100 <br>';
            }
        }
        $focus = $_POST['focus'];
        if ($focus == 1) {
            echo 'Concentration: CS <br>';
        }
        elseif ($focus == 2) {
            echo 'Concentration: IS <br>';
        }
        else {
            echo 'Concentration: IT <br>';
        }
        echo "Your comments: $comments";
    }
}