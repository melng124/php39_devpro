<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai Tap 2</title>
</head>
<body>
    <p>Today I \'ll learn PHP - "Variable"</p>
    <p id="paragraph"></p>
    <script type="text/javascript">
        var showTextJs = document.getElementById("paragraph");
        showTextJs.innerHTML = "Today I \\'ll learn PHP - \"Variable\"";
    </script>
    <?php
        $showTextPHP = 'Today I \'ll learn PHP - "Variable"';
        echo $showTextPHP;
    ?>
</body>
</html>
