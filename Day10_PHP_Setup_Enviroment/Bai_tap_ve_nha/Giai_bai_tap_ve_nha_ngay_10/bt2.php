<!DOCTYPE html>
<html lang="end">
<head>
    <meta charset="utf-8"/>
    <title>BT2</title>
</head>
<body>
    <h4>Hiển thị bằng HTML</h4>
    <p>Today I \'ll learn PHP - "Variable"</p>
    <h4>Hiển thị bằng Javascript</h4>
    <p id="js-display"></p>
    <script type="text/javascript">
        window.onload = function () {
          document.getElementById('js-display').innerHTML = "Today I \\'ll learn PHP - \"Variable\"";
        };
    </script>
    <h4>Hiển thị bằng PHP</h4>
    <?php
    echo 'Today I \\\'ll learn PHP - "Variable"';
    ?>
</body>
</html>