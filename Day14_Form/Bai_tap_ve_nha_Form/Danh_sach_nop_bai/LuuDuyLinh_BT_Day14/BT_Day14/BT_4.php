<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h1 style="color: blue">Registration FROM</h1>
        <p class="a" style="border-bottom: 1px solid;width: 100%"></p>
    </div>

    <form action="#" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">First Name</label>
            <input type="text" name="first" class="form-control" id="formGroupExampleInput" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Last Name</label>
            <input type="text" name="last" class="form-control" id="formGroupExampleInput2" >
        </div>
        <div class="form-check form-check-inline">

            <span style="margin-right: 10px">Gender </span><input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">State</label>
            <select class="form-control" id="formGroupExampleInput2" name="type">
                <option value="1">Johor</option>
            </select>
            <button style="margin-top: 20px" name="submit" type="submit" class="btn btn-primary">Save Record</button>
            <button style="margin-top: 20px" type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>

</div>
<?php
    if (isset($_POST['submit'])){
        $first=$_POST['first'];
        $last=$_POST['last'];
        if(empty($first)==false&&empty($last)==false){
            if(isset($_POST['gender'])==false){
                echo "Chưa chọn giới tính";
            }
            elseif ($_POST['gender']==1){
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                      First Name : $first <br/>
                      Last  Name : $last <br/>
                      Gender     : Male<br/>
                      State      : Johor <br/>";
            }
            elseif ($_POST['gender']==2){
                echo "<p style='color: green;'> Bạn Đăng Nhập Thành Công !</p>
                              <p style='color: blue;'> Thông tin của bạn là</p>
                      First Name : $first <br/>
                      Last  Name : $last <br/>
                      Gender     : Female<br/>
                      State      : Johor <br/>";
            }
        }
        elseif (empty($first)){
            echo "<p style='color: red'>Không đc đẻ trống first name</p>";
        }
        elseif (empty($last)){
            echo "<p style='color: red'>Không đc đẻ trống last name</p>";
        }
    }
?>
</body>
</html>