<!DOCTYPE html>
<html lang="end">
<head>
    <meta charset="utf-8"/>
    <title>Bài 2</title>
</head>
<body>
    <h4 ><font color="red">Hiển thị bằng HTML</font></h4>
    <p>Today I \'ll learn PHP - "Variable"</p>
    <h4 ><font color="red">Hiển thị bằng Javascript</font></h4>
    <p id="js-display"></p>
    <script type="text/javascript">
        window.onload = function () {
          document.getElementById('js-display').innerHTML = "Today I \\'ll learn PHP - \"Variable\"";
        };
    </script>
    <h4 ><font color="red">Hiển thị bằng Javascript</font></h4>
    <?php
    echo 'Today I \\\'ll learn PHP - "Variable"';
    ?>
</body>
</html>