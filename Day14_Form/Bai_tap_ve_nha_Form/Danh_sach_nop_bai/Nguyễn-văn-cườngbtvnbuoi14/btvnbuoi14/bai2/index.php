<?php
?>
<style type="text/css">
    form {
        width: 50%;
        margin: auto;
        background: #95bee6;
        text-align: center;
        padding: 10px 0;
        color: #ffffff;
        height: auto;
    }

    table {
        background: #a7d6f1;
        width: 100%;
        color: #ffffff;
        margin-bottom: 10px;
    }

    td {
        padding: 10px;
        text-align: right;
    }

    table, tr, td {
        border: 1px solid #ffffff;
        border-collapse: collapse;
    }

    table input, textarea {
        float: left;
    }

    .input input {
        float: unset;
    }

    .radio {
        text-align: left;
        float: unset;
    }

    .result {
        text-align: left;
        color: black;
        padding-left: 10px;
    }
</style>
<form action="" method="post">
    <h4>Registration form</h4>
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"
                       value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"></td>
        </tr>
        <tr>
            <td>User Type</td>
            <td class="radio">
                <select name="select">
                    <option value="Select">--Select--</option>
                    <option value="option">--option--</option>
                    <option value="type">--type--</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Display Name</td>
            <td><input type="text" name="Display"
                       value="<?php echo isset($_POST['Display']) ? $_POST['Display'] : '' ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea cols="30" rows="3" name="address"></textarea></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td class="radio input">
                <input type="radio" name="radio1" value="1">Female
                <input type="radio" name="radio1" value="2">Male
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="radio"><input type="checkbox" value="I accept Terms and conditions" name="accept">I accept Terms
                and conditions
            </td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $display = $_POST['Display'];
        $email = $_POST['email'];
        $address = $_POST['address'];
//        $gender = $_POST['radio1'];
//        echo "".var_dump($gender);
        if (empty($name) || empty($email) || empty($password) || empty($display) || empty($address)) {
            echo '<br/>';
            echo "<b style='color: red'>bạn không được để trống dữ liệu</b>";
        } else {
            if (strlen($display) > 24) {
                echo '<p style="color: red">Display name không vượt quá 24 ký tự</p>';
            } else {
                $gender = $_POST['radio1'];
                $accept = $_POST['accept'];
                $select = $_POST['select'];
//            var_dump($accept);
                if ($gender == 2) {
                    $radio = 'Male';
                } else {
                    $radio = 'Female';
                }
                echo '<div class="result">';
                echo "<b> Username: " . $name . "</b>";
                echo '<br/>';
                echo "<b> Password: " . $password . "</b>";
                echo '<br/>';
                echo "<b> User: " . $select . "</b>";
                echo '<br/>';
                echo "<b>Display name: " . $display . "</b>";
                echo '<br/>';
                echo "<b>Address: " . $address . "</b>";
                echo '<br/>';
                echo "<b>Email: " . $email . "</b>";
                echo '<br/>';
                echo "<b> Gender: " . $radio . "</b>";
                echo '<br/>';
                echo '</div>';
            }
        }
    }
    ?>
</form>
