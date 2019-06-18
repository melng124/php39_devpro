<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
    @media (max-width: 576px) {

    }
</style>
<div class="container">
    <div class="col-md-7 mb-3" style="width: 100%;background-color: rgba(209,192,250,0.47)">
        <p style="color: blue;font-size: 28px ">Registration FORM</p>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-7 mb-3">
                <label for="validationDefault01">First name</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="name1" value="<?php echo isset($_POST['name1']) ? $_POST['name1'] : '' ?>" >
            </div>
            <div class="col-md-7 mb-3">
                <label for="validationDefault02">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="name2" value="<?php echo isset($_POST['name2']) ? $_POST['name2'] : '' ?>" >
            </div>
            <div class="col-md-7 mb-3">
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineRadio1">Gender </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" checked>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
            <div class="col-md-7 mb-3">
                <label for="validationDefault04">State</label>
                <select class="form-control" id="exampleFormControlSelect1" name="state">
                    <option name="1">Johor</option>
                    <option name="2">Faker</option>
                    <option name="3">Zeros</option>
                    <option name="4">Optimus</option>

                </select>
            </div>
        </div>
        <button class="btn btn-info" name="btn1" type="submit">Save Record</button><button class="btn btn-secondary" type="reset" style="margin-left: 20px">Reset</button>
    </form>
</div>
<?php
if (isset($_POST['btn1']))
{
    echo '<pre>';
    $firstname = $_POST['name1'];
    $lastname = $_POST['name2'];
    if (empty($firstname)) {
        echo '<p style="color: red;font-size: 28px">
        Firstname không được để trống</p>';
    }
    elseif (empty($lastname))
    {
        echo '<p style="color: red;font-size: 28px">
        Lastname không được để trống</p>';
    }
    else
    {
        echo "<h3><b style='color: aqua'>Đăng ký thành công !</b></h3>";
        echo "<h3><b style='color: aqua'>Thông tin của bạn:</b></h3>";

        echo "<h3><b>Firstname:" . $_POST['name1'] . "</b></h3>";
        echo "<h3><b>Lastname:" . $_POST['name2'] . "</b></h3>";

        $gender = $_POST['gender'];
        if ($gender == 1)
        {
            echo "<h3><b>Gender : Male </b></h3>";
        }
        else{
            echo "<h3><b>Gender : Female </b></h3>";
        }

        $select = $_POST['state'];
        if ($select == 1){
            echo "<h3><b>State: Johor </b></h3>";
        }
        elseif ($select == 2)
        {
            echo "<h3><b>State: Faker </b></h3>";
        }
        elseif ($select == 3)
        {
            echo "<h3><b>State: Zeros </b></h3>";
        }
        else{
            echo "<h3><b>State : Optimus </b></h3>";
        }

    }
}
?>

