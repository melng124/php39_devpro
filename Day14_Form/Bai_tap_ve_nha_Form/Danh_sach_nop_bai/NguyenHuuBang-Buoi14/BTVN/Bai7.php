<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/17/2019
 * Time: 9:13 PM
 */
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<table align="center" width="240px" bgcolor="#a9a9a9">
    <form action="" method="post">
        <tr>
            <td align="center">
                <input type="text" name="name" placeholder="Your name" value="<?php echo isset($_POST['name']) ? $_POST['name']:''?>"/>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="email" name="email" placeholder="Your Email Address" value="<?php echo isset($_POST['email']) ? $_POST['email']:''?>"/>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="number" name="phone" placeholder="Your phone name" value="<?php echo isset($_POST['phone']) ? $_POST['phone']:''?>"/>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="url" name="web" placeholder="Your web site starts with http://"
                       value="<?php echo isset($_POST['web']) ? $_POST['web']:''?>"/>
            </td>
        </tr>
        <tr>
            <td align="center">
                <textarea rows="4" cols="22" name="message" placeholder="Type your message here..."></textarea>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" name="submit" class="btn-danger"/><br/>
                <?php
                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $web = $_POST['web'];
                    $message = $_POST['message'];
                    if(empty($name)||empty($email)||empty($phone)||empty($web)||empty($message)){
                        echo "<p style='color: red'>Không để trống dữ liệu</p>";
                    }else{
                        echo 'name :'.$name."<br/>";
                        echo 'email :'.$email."<br/>";
                        echo 'phone :'.$phone."<br/>";
                        echo 'web :'.$web."<br/>";
                        echo 'message :'.$message."<br/>";
                    }
                }
                ?>
            </td>
        </tr>
    </form>
</table>