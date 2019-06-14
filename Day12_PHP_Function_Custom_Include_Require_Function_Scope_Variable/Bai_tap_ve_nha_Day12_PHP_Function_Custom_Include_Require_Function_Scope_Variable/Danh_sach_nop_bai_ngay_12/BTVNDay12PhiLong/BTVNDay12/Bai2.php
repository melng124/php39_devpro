<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>b1</title>
</head>
<body>
<?php
$abc = explode(',', 'abc, 123, 222');
echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
print_r($abc);
echo "</pre>";
die;

function perimeter($r) {
    return $r*2*3.14;
}
function area($r1) {
    return $r1*$r1*3.14;
}

$perimeter = perimeter(3);
echo '<p>Chu vi hình tron là: ' . $perimeter .'</p>';

$area = area(3);
echo '<p>dien tich hình tron là: ' . $area .'</p>';
?>
</body>
</html>