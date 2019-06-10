<style>
    table {
        border: 4px ridge whitesmoke;
        border-collapse: collapse;
    }

    tr td {
        width: 100px;
        text-align: center;
        border-left: 4px ridge whitesmoke;
    }

    .head {
        border: 4px ridge whitesmoke;
        background-color: lightblue;
        color: red;
    }

</style>
<table>
    <?php
    /**
     * Created by PhpStorm.
     * User: Admin
     * Date: 6/5/2019
     * Time: 12:58 PM
     */
    echo '<tr> 
        <td class="head">1</td>
        <td class="head">2</td>
        <td class="head">3</td>
        <td class="head">4</td>
        <td class="head">5</td>';
    for ($i = 1; $i <= 10; $i++) {

        echo '<tr>';
        for ($j = 1; $j <= 5; $j++) {

            echo "<td>$i * $j = " . $i * $j . "</td>";
        }
        echo '</tr>';
    }
    echo '</tr>';
    echo '<tr> 
        <td class="head">6</td>
        <td class="head">7</td>
        <td class="head">8</td>
        <td class="head">9</td>
        <td class="head">10</td>';
    for ($n = 1; $n <= 10; $n++) {
        echo '<tr>';

        for ($m = 6; $m <= 10; $m++) {

            echo "<td>$n * $m = " . $n * $m . "</td>";
        }
        echo '</tr>';
    }
    echo '</tr>';
    ?>
</table>