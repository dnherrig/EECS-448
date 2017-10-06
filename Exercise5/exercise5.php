<?php
function product($x, $y) {
    $z = $x * $y;
    return $z;
}

//echo "5 + 10 = <b>" . sum(5, 10) . "</b><br>";
//echo "7 + 13 = <b>" . sum(7, 13) . "</b><br>";
//echo "2 + 4 = <b>" . sum(2, 4) . "</b>";


//$x = 10

echo "<table>";
for($i = 0; $i <= 100; $i++)
{
    echo "<tr>";
    
    for($j = 0; $j <= 100; $j++)
    {
        if($i == 0 && $j == 0)
        {
          echo "<td></td>";
        }
        else if($j == 0)
        {
          echo"<td>|". $i . "|</td>";
        }
        else if($i == 0)
        {
          echo"<td>|". $j . "|</td>";
        }
        else
        {
          echo "<td>" . product($i, $j) . "</td>";
        }
    }

    echo "</tr>";

    //echo "<br>";
}
echo "</table>";

?>
