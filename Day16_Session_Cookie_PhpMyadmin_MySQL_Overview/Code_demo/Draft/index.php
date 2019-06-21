<html>

</html>
<?php
echo 'abc';
//session_start();
$_SESSION['abc'] = '1';
echo $_SESSION['abc'];

setcookie('abc', 123,  time() + 10);