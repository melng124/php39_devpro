<?php
if(isset($_POST['btnSubmit'])){
    $error = [];
    if(isset($_FILES['upFile'])){
        $fileArr = $_FILES['upFile'];
        $extension = strtolower(pathinfo($fileArr['name'], PATHINFO_EXTENSION));
        $type = ['jpg', 'jpeg', 'png', 'gif'];
        if (empty($_POST['txtName'])) {
            $error['txtName'] = 'Username không được để trống';
        } else {
            $name = $_POST['txtName'];
        }
        if (empty($_POST['txtEmail'])) {
            $error['txtEmail'] = 'Email không được để trống';
        } else {
            $email = $_POST['txtEmail'];
        }
        if (empty($_POST['txtPass'])) {
            $error['txtPass'] = 'Password không được để trống';
        } else {
            $pass = $_POST['txtPass'];
        }
        if (empty($_POST['txtConfirm'])) {
            $error['txtConfirm'] = 'Confirm Password không được để trống';
        }else {
            $confirm = $_POST['txtConfirm'];
        }
        if (!empty($_POST['txtConfirm']) && !empty($_POST['txtPass']) && $pass != $confirm){
            $error['err'] = 'Trường confirm password phải giống trường Password';
        }
        if(!in_array($extension,$type)){
            $error['upFile'] = 'Cần upload ảnh';
        }
        if(!$error){
            $path = __DIR__ .'/uploads';
            if(!file_exists($path)){
                mkdir($path);
            }
            $isUpload = move_uploaded_file($fileArr['tmp_name'], $path.'/'.$fileArr['name']);
            if($isUpload){
                $show= '<b>Thông tin của bạn:</b><br/>
                        <b>Username: '.$name.'</b><br/>
                        <b>Email: '.$email.'</b><br/>
                        <b>Avatar:</b><img src="uploads/'.$fileArr['name'].'" width="150px"/><br/>';
            }
        }
    }
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Bai 3</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <style type="text/css">
        .container{
            width: 50%;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Create an account</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="txtName" class="form-control" placeholder="User Name"
                       value="<?php echo isset($_POST['txtName'])? $_POST['txtName'] : ''?>"/>
                <div class="error">
                    <?php echo $error['txtName']; ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="email" name="txtEmail" class="form-control" placeholder="Email"
                       value="<?php echo isset($_POST['txtEmail'])? $_POST['txtEmail'] : ''?>"/>
                <div class="error">
                    <?php echo $error['txtEmail']; ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" name="txtPass" class="form-control" placeholder="Password"/>
                <div class="error">
                    <?php echo $error['txtPass']; ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" name="txtConfirm" class="form-control" placeholder="Confirm Password"/>
                <div class="error">
                    <?php echo $error['txtConfirm']; ?>
                    <?php echo $error['err']; ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="upFile"/>
            <div class="error">
                <?php echo $error['upFile']; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" name="btnSubmit" class="btn btn-primary form-control">Register</button>
            </div>
        </div>
    </form>
</div>
<div class="show">
    <?php echo $show; ?>
</div>
</body>
</html>