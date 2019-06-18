<?php
function validateLastname()
{
    if (isset($_POST['submit-form'])) {
        $lastName = $_POST['lastName'];
        if ($lastName == '') {
            echo 'Pls enter your lastname';
            return false;
        }
        return true;
    }
}

function validatePassword()
{
    if (isset($_POST['submit-form'])) {
        $pass = $_POST['pass'];
        if ($pass == '') {
            echo 'Pls provide a password';
            return false;
        }
        return $pass;
    }
}

function validateConfirmPassword()
{
    if (isset($_POST['submit-form'])) {
        $conPass = $_POST['conPass'];
        if ($conPass == '') {
            echo 'Pls provide a password';
            return false;
        } elseif ($conPass != validatePassword()) {
            echo 'Password does not match';
            return false;
        }
        return true;
    }
}

function validateForm()
{
    if (isset($_POST['submit-form']) && validateLastname() == true && validatePassword() != false && validateConfirmPassword() == true) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        echo '<p class="result">Đăng ký thành công! <br> Thông tin của bạn: </p>';
        echo "Firstname: $firstName <br>";
        echo "Lastname: $lastName <br>";
        echo "Username: $userName <br>";
        echo "Email: $email <br>";
        echo "Password: $pass <br>";
    }
}
