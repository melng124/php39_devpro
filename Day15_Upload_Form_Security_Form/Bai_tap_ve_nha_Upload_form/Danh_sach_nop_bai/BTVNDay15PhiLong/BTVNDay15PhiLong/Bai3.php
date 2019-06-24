<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/20/2019
 * Time: 6:48 PM
 */
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet"
              href="css/bootstrap.min.css" />
        <link rel="stylesheet"
              href="css/all.min.css" />
        <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="wrap-content" style="background-color: #1F4B6E;text-align: center;color: white">
                    <h2> Create an account</h2>
                    <br>
                    <input type="text" name="inputName" placeholder="User Name" value="" style="width: 90%;padding: 10px" ><br><br>
                    <input type="email" name="email" placeholder="Email" value="" style="width: 90%;padding: 10px"><br><br>
                    <input type="password" name="password" value="" placeholder="Password" style="width: 90%;padding: 10px"><br><br>
                    <input type="password" name="password1" placeholder="ConfirmP Password" value="" style="width: 90%;padding: 10px"><br><br>
                     <p style="text-align: left;padding-left: 10%">Select your avatar <input type="file" name="upload" value="" style="width: 90%;padding: 10px" ></p><br>
                    <br>
                    <br>
                </div>
            </div>
            <input type="submit" name="ok" value="Submit">
        </form>
    </body>
    </html>
<?php
    if (isset($_POST['ok'])){
        echo '<pre>';
        print_r($_POST);
        print_r($_FILES);
        if (empty($_POST['inputName'])){
            echo "<p style='color: red'> không được để trống trường</p>";
        }
        elseif (empty($_POST['password']) || empty($_POST['password1'])){
            echo "<p style='color: '> không đưuọc để trống password</p>";
        }elseif ($_POST['password'] !== $_POST['password1']){
            echo "<p style='color: red'> mât khẩu phải trùng nhau</p>";
        }elseif (empty($_POST['email'])){
        echo" <p style='color:red;'>Không được để trống email</p>";
        }else{
            if(isset($_FILES['upload'])){
                $fileArr =$_FILES['upload'];
                if($fileArr['error'] != 0){
                    echo "<p style='color: red'>có lỗi</p>";
                }else{
                    $uploadDirectory = __DIR__.'/upload';
                    if (!file_exists($uploadDirectory)){
                        mkdir($uploadDirectory);
                    }
                    $isUpdate = move_uploaded_file($fileArr['tmp_name'], $uploadDirectory.'/'.$fileArr['name']);
                    if ($isUpdate){
                        if($fileArr['name'] > 1048576){
                            echo"<p style='color: red'>file ảnh phải nhỏ hơn 2mb</p>";
                        }
                        else{
                            echo "Đăng nhập thành công <br>";
                            echo 'ten:'.$_POST['inputName'].'<br>';
                            echo ' email'.$_POST['email'].'<br>';
                            echo "Password : ************<br> ";
                            echo 'Tên file:'.$fileArr['name'].'<br>';
                            echo 'kiểu file:'.$fileArr['type'].'<br>';
                            echo 'kích thước file:'.$fileArr['size'].'<br>';
                        }
                    }
                }
            }
        }

    }
?>