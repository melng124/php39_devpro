<?php
if (isset($_POST['sum-submit'])) {
    $num_a = $_POST['num-a'];
    $num_b = $_POST['num-b'];
    if ($num_a == '' || $num_b == '') {
        echo '<p class="notice">Ko đc để trống số a hoặc số b</p>';
    }
    elseif (is_numeric($num_a) == false || is_numeric($num_b) == false) {
        echo '<p class="notice">Chỉ cho phép nhập dữ liệu là số</p>';
    }
    else {
        echo "a + b = " . ((int)$num_a + (int)$num_b);
    }
}
elseif (isset($_POST['ab-submit'])) {
    $num_a = $_POST['num-a'];
    $num_b = $_POST['num-b'];
    if ($num_a == '' || $num_b == '') {
        echo '<p class="notice">Ko đc để trống số a hoặc số b</p>';
    }
    elseif (is_numeric($num_a) == false || is_numeric($num_b) == false) {
        echo '<p class="notice">Chỉ cho phép nhập dữ liệu là số</p>';
    }
    else {
        echo "a - b = " . ((int)$num_a - (int)$num_b);
    }
}
elseif (isset($_POST['multi-submit'])) {
    $num_a = $_POST['num-a'];
    $num_b = $_POST['num-b'];
    if ($num_a == '' || $num_b == '') {
        echo '<p class="notice">Ko đc để trống số a hoặc số b</p>';
    }
    elseif (is_numeric($num_a) == false || is_numeric($num_b) == false) {
        echo '<p class="notice">Chỉ cho phép nhập dữ liệu là số</p>';
    }
    else {
        echo "a * b = " . ((int)$num_a * (int)$num_b);
    }
}
elseif (isset($_POST['divide-submit'])) {
    $num_a = $_POST['num-a'];
    $num_b = $_POST['num-b'];
    if ($num_a == '' || $num_b == '') {
        echo '<p class="notice">Ko đc để trống số a hoặc số b</p>';
    }
    elseif (is_numeric($num_a) == false || is_numeric($num_b) == false) {
        echo '<p class="notice">Chỉ cho phép nhập dữ liệu là số</p>';
    }
    elseif ($num_b == 0) {
        echo '<p class="notice">Không thực hiện đc phép chia với b = 0</p>';
    }
    else {
        echo "a / b = " . ((int)$num_a / (int)$num_b);
    }
}