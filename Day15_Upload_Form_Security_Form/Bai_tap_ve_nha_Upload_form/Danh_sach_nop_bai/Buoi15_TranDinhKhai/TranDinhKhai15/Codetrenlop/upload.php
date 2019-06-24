<!-- <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload" value="Chosose file" multiple />
    <input type="submit" name="submit" value="submit">
</form> -->
<form method="post" action="" enctype="multipart/form-data">

    <input type="file" name="upload" multiple />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_FILES);

}
?>