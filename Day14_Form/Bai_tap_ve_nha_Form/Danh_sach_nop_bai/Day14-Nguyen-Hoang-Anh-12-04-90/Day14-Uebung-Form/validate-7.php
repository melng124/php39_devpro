<?php
if (isset($_POST['submit-form'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $site = $_POST['site'];
    $message = $_POST['message'];
    if (empty($name) || empty($email) || empty($phone) || empty($site) || empty($message)) {
        echo '<p class="notice">Không được để trống các trường</p>';
    }
    elseif (is_numeric($phone) == false) {
        echo '<p class="notice">Phone number chỉ cho phép nhập số</p>';
    }
//  Cái này e cop trên mạng! chưa hiểu lắm về cách viết biểu thức chính quy
    elseif (!preg_match('/\b(?:(?:http?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i',$site)) {
        echo '<p class="notice">Trường Website cần có định dạng URL</p>';
    }
    else {
        echo '<p class="result">Send Contact thành công</p>';
        echo "Your name: $name <br>";
        echo "Your email: $email <br>";
        echo "Your phone number: $phone <br>";
        echo "Your website: $site <br>";
        echo "Your message: $message <br>";
    }
}