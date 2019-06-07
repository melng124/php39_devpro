<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bai9.php</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }

    </style>


</head>
<body>
<div class="container">
    <h4 class="text-center" style="color: red;">Bảng cửu chương từ 1-10</h4>
    <!-- $tab="<table>";
$tab.="<tr>"; -->
  <?php
  $tab = "<table>";
  $tab .= "<tr>";
  for ($n = 1; $n < 11; $n++) {
    $tab .= "<th>";
    $S = "<table>";
    $S .= "<tr> <td colspan=3>Bảng cửu chương $n</td></tr>";
    for ($i = 1; $i < 11; $i++) {
      $S .= "<tr><td>" . $n . "</td>";
      $S .= "<td>" . $i . "</td>";
      $S .= "<td>" . $n * $i . "</td></tr>";

    }
    $S .= "</table>";
    $tab .= $S . "</th>";


  }
  $tab .= "</tr>";
  $tab .= "</table>";
  echo "<span>" . $tab . "</span>";
  ?>


</div>

</body>
</html>