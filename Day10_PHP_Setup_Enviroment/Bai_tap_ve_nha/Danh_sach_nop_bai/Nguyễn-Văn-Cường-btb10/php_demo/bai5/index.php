<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/6/2019
 * Time: 8:45 AM
 */
$name="Nguyễn Văn Cường";
$email="nguyenvancuongyt95@gmail.com";
$phone="0816613383";
$messenger="This is messenger"
?>
<link rel="stylesheet" href="bootstrap.min.css">
<style type="text/css">
    form{
        padding: 20px;
    }
</style>
<form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Name *</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Email *</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustomUsername">Phone *</label>
            <div class="input-group">
                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom03">Messenger</label>
            <textarea class="form-control" id="textarea1" rows="3"></textarea>
        </div>
    </div>
    <button class="btn btn-primary" type="button">Send messenger</button>
    <br>
    <label for="validationCustom03">* These fields are required</label>
</form>

<script>
    (function() {
    }
</script>
