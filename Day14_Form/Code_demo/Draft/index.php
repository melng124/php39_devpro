 <?php
 const VALUE1 = 1;
 const VALUE2 = 2;
 const VALUE3 = 3;
 const VALUE4 = 4;
 function isCheckedRadio($value) {
     $checked = '';
     if (isset($_GET['submit']) && isset($_GET['gender'])) {
         if ($value == $_GET['gender']) {
           $checked = "checked='checked'";
         }
     }

     return $checked;
 }
 $checked = isset($_GET['gender'])
 ?>
<form action="" method="get">
  <input type="text" name="name" />
    <input type="radio" name="gender" value="1" checked=""> Gender 1
    <input type="radio" name="gender" value="2" checked=""> Gender 2
    <input type="radio" name="gender" value="3" checked=false> Gender 3
    <input type="radio" name="gender" value="4" checked=false> Gender 4
  <input type="submit" value="submit" name="submit" />
</form>
<?php
echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
print_r($_GET);
echo "</pre>";
//die;
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