<html lang="end">
<head>
    <meta charset="utf-8"/>
    <title>BT2</title>
</head>
<body>
<p><b>Today I \'ll learn PHP - "Variable"</b></p>

<p id="text" style="color: red"></p>
<script type="text/javascript">
    window.onload = function () {
        document.getElementById('text').innerHTML = "Today I \\'ll learn PHP - \"Variable\"";
    };
</script>

<?php
echo 'Today I \\\'ll learn PHP - "Variable"';
?>
</body>
</html>
