<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
<p style="color: red; font-family: 'Adobe Myungjo Std M';">Today I \'ll learn PHP - "Variable"<br><p>
<p style="color: green; font-family: 'Adobe Myungjo Std M';" id="show"></p>
   <p style="color: blue; font-family: 'Adobe Myungjo Std M';">
    <?php
    $string="Today I \\'ll learn PHP - ";
    $string2='"Variable"';
    echo ("$string $string2"); ?>
</p>
<script type="text/javascript">
    var HienThi=document.getElementById('show').innerText="Today I \\'ll learn PHP - \"Variable\"";
</script>
</body>

</html>
