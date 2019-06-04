<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai 2</title>
</head>
<body>
<b>Today I\'ll learn PHP - "Variable"</b><br/>
<script type="text/javascript">
    var a = 'Today I\\\'ll learn PHP - "Variable"';
    document.write("<b>"+a+"</b><br/>")
</script>
<?php
$today = 'Today I\\\'ll learn PHP - "Variable"';
echo "<b>".$today."</b>";
?>
</body>
</html>