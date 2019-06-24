<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

        <table align="center" cellpadding="4px" cellspacing="5px">
            <tr>
                <td><h1>Create your Account</h1></td>
            </tr>
            <tr>
                <td>
                    <input style="width: 100%" type="text"  name="username" value="<?php echo isset($_POST['username'])?$_POST['username']:''?>" placeholder="Username">
                </td>
            </tr>
            <tr>
                <td>
                    <input style="width: 100%" type="email" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>" name="email" placeholder="Email">
                </td>
            </tr>
            <tr>
                <td>
                    <input style="width: 100%" type="password" value="" name="pass" placeholder="Password">
                </td>
            </tr>
            <tr>
                <td>
                    <input style="width: 100%" type="password" value="" name="confirmpass" placeholder="Confirm password">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Select your Avatar</span><input type="file" value="" name="upload">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="register" style="width: 100%;background-color: blue;border-radius: 5px;height: 40px;color: white;font-size: 18px">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            if(empty($_POST['username'])){
                echo '<p style="color: red">Không để tên trống</p>';
            }
            elseif (empty($_POST['email'])){
                echo '<p style="color: red">Không để email trống</p>';
            }
            elseif (empty($_POST['pass'])){
                echo '<p style="color: red">Không để pass trống</p>';
            }
            elseif (empty($_POST['confirmpass'])){
                echo '<p style="color: red">Không để confirm pass trống</p>';
            }
            elseif ($_POST['pass']!=$_POST['confirmpass']){
                echo '<p style="color: red">Mật khẩu nhập lại không giống mật khẩu ban đầu</p>';
            }
            else{
               if(isset($_FILES['upload'])){
                   echo '<pre>';
                   print_r($_FILES);
                   $file=$_FILES['upload'];
                   $extention=$_FILES['upload']['name'];
                   $duoi = pathinfo($extention, PATHINFO_EXTENSION);
                   if ($extention==''){
                       echo 'chưa chọn file';
                   }
                   elseif ($duoi!='jpg'&&$duoi!='jpeg'&&$duoi!='png'&&$duoi!='gif'){
                       echo '<p style="color: red">Không là File ảnh</p>';
                   }

                   else{
                       if($file['error']!=0){
                           echo "<p style='color: red'>Xảy ra lỗi khi upload</p>";
                       }
                       else{
                           $upload=__DIR__.'/avatar';
                           if (!file_exists($upload)){
                               mkdir($upload);
                           }
                           $is_upload=move_uploaded_file($file['tmp_name'],$upload.'/'.$file['name']);
                           if ($is_upload){
                               echo 'Đăng kí thành công <br/>';
                               echo 'Username :'.$_POST['username'].'<br/>';
                               echo 'Email :'.$_POST['email'].'<br/>';
                               echo "Avatar :<img src='avatar/$extention'>";
                           }
                           else{
                               echo "<p style='color: red'>Xảy ra lỗi khi upload</p>";
                           }
                       }
                   }
               }

            }
        }
    ?>
</body>
</html>