<?php
if(isset($_POST['btnSubmit'])){
    $error = array();
    if(empty($_POST['txtFirst'])){
        $error['txtFirst'] = "*FirstName không được để trống<br/>";
    }else {
        $first = $_POST['txtFirst'];
    }
    if(empty($_POST['txtLast'])){
        $error['txtLast'] = "*LastName không được để trống<br/>";
    }else {
        $last = $_POST['txtLast'];
    }
    if($_POST['rd'] == ""){
        $error['rd'] = "*Phải chọn giới tính<br/>";
    }else{
        $gender = $_POST['rd'];
    }
    if($_POST['select'] == ""){
        $error['select'] = "*Phải chọn state<br/>";
    }else{
        $state = $_POST['select'];
    }
    if (empty($error)) {
        $show = "<span style='color: deepskyblue'>Đăng ký thành công!</span><br/>
        <span style='color: deepskyblue'>Thông tin của bạn:</span><br/>
        <b>FirstName: $first</b><br/>
        <b>LastName: $last</b><br/>
        <b>Gender:" . ($gender == 0 ? 'Male' : 'Female') . "</b><br/>
        <b>State:" . ($state == 1 ? 'johor' : 'Cali') . "</b><br/>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no"/>
    <style type="text/css">
        .container{
            width: 60%;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card-header">
        <h3 style="color: #007bff">Registration FORM</h3>
    </div>
    <form action="" method="post">
        <div class="form-group">
            <label for="FirstName">FirstName</label>
            <input type="text" class="form-control" name="txtFirst" id="FirstName" value="<?php echo isset($_POST['txtFirst'])? $_POST['txtFirst'] : '';?>"/>
            <span>
                <?php
                if(isset($error['txtFirst'])){
                    echo $error['txtFirst'];
                }
                ?>
            </span>
            <label for="LastName">LastName</label>
            <input type="text" class="form-control" name="txtLast" id="LastName" value="<?php echo isset($_POST['txtLast'])? $_POST['txtLast'] : '';?>"/>
            <span>
                <?php
                if(isset($error['txtLast'])){
                    echo $error['txtLast'];
                }
                ?>
            </span>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rd" id="inlineRadio1" value="0"
                    <?php if (isset($_POST['rd']) && $_POST['rd'] == 0): ?> checked <?php endif; ?>>
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rd" id="inlineRadio2" value="1"
                    <?php if (isset($_POST['rd']) && $_POST['rd'] == 1): ?> checked <?php endif; ?>>
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <span>
                <?php
                if(isset($error['rd'])){
                    echo $error['rd'];
                }
                ?>
            </span>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">State</label>
            <select class="form-control" name="select" id="exampleFormControlSelect1">
                <option value="">Select</option>
                <option value="1" <?php if(isset($_POST['select']) && $_POST['select'] == 1):?>selected<?php endif; ?>>Johor</option>
                <option value="2" <?php if(isset($_POST['select']) && $_POST['select'] == 2):?>selected<?php endif; ?>>Cali</option>
            </select>
            <span>
                <?php
                if (isset($error['select'])) {
                    echo $error['select'];
                }
                ?>
            </span>
        </div>
        <button type="submit" class="btn btn-success" name="btnSubmit">Save Record</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    <div class="show">
        <?php echo $show; ?>
    </div>
</div>
</body>
</html>