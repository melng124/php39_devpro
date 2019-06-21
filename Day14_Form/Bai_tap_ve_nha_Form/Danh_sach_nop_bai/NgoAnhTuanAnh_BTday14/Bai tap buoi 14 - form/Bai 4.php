<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai tap 4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-12">
            <h3>Registration FORM</h3>
            <form method="post" name="form4" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-group col-md-8">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="select">
                        <option value="1">Johor</option>
                        <option value="2">Hithor</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-success" value="Save record" name="submit">
                <input type="reset" class="btn btn-light" value="reset">
            </form>
        </div>
        <div class="col-md-4 col-12">
            <h3>Excercise List</h3>
            <button type="button" class="btn btn-primary">Home directory</button><br>
            <button type="button" class="btn btn-primary">FORM</button><br>
            <button type="button" class="btn btn-primary">Operator</button><br>
            <button type="button" class="btn btn-primary">Array</button><br>
            <button type="button" class="btn btn-primary">condition</button><br>
            <button type="button" class="btn btn-primary">Repensitoin</button><br>
            <button type="button" class="btn btn-primary">String</button><br>
        </div>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 15/6/2019
 * Time: 4:14 PM
 */
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $state = $_POST['select'];
    if(empty($firstname)){
        echo "<p class='error'>Firstname không được để trống</p>";
    }
    else if(empty($lastname)){
        echo "<p class='error'>Lastname không được để trống</p>";
    }
    else{
        echo "Firstname: ".$firstname."<br>";
        echo "Lastname: ".$lastname."<br>";
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            if($gender == 1){
                echo "Gender: Male"."<br>";
            }
            else{
                echo "Gender: Female"."<br>";
            }
        }
        if($state == 1){
            echo "State: Johor"."<br>";
        }
        else{
            echo "State: Hithor";
        }
    }
}
?>
</body>
</html>
