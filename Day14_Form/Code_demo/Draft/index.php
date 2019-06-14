<form action="" method="get">
  <input type="text" name="name" />
  <input type="submit" value="submit" name="submit" />
</form>
<?php

if (isset($_GET['submit'])) {
  echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
  print_r($_GET);
  echo "</pre>";
//  die;
// $name = !empty($_GET['name']) ? $_GET['name'] : "111111";
 $name = strlen($_GET['name']) > 0 ? $_GET['name'] : "111111";
 echo $name;
}
?>