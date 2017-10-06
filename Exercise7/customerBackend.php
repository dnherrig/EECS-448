<?php

function product($x, $y)
  {
  $z = $x * $y;
  return $z;
  }

function fourSum($a, $b, $x, $y)
  {
  $z = $a + $b + $x + $y;
  return $z;
  }


    $trashBagQuant = $_POST["trashBagQuant"];
    $cardBoardBoxQuant = $_POST["cardBoardBoxQuant"];
    $storageTubQuant = $_POST["storageTubQuant"];
    $shippingOption = $_POST["Shipping"];
    $shippingCost = 0;
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    if($shippingOption == "Free 7 day")
    {
      $shippingCost = 0;
    }
    else if($shippingOption == "$50.00 over night")
    {
      $shippingCost = 50;
    }
    else if($shippingOption == "$5.00 three day")
    {
      $shippingCost = 5;
    }

    if($trashBagQuant == "")
    {
      $trashBagQuant = "None";
    }
    if($cardBoardBoxQuant == "")
    {
      $cardBoardBoxQuant = "None";
    }
    if($storageTubQuant == "")
    {
      $storageTubQuant = "None";
    }
    if($shippingOption == "")
    {
      $shippingOption = "None";
    }


    $trashbagCost = 2;
    $cardBoardBoxCost = 8;
    $storageTubCost = 16;

    echo "
    <link href='style.css'
      rel='stylesheet'
      type='text/css'/>

    <center>

    <p>Welcome " . $userName . " , your password is: " . $password . "</p> <br>


    <table name = 'receipt' id ='receipt'>
    <tr>
    <td center colspan='4'>Receipt</td>
    </tr>

    <tr>
    <td></td>
    <td>Quanity</td>
    <td>Cost Per Item</td>
    <td>Sub Total</td>
    </tr>

    <tr>
    <td>Trash Bag</td>
    <td>" . $trashBagQuant . "</td>
    <td>$". $trashbagCost . ".00</td>
    <td>$". product($trashbagCost, $trashBagQuant)."</td>
    </tr>

    <tr>
    <td>Carboard Box</td>
    <td>" . $cardBoardBoxQuant . "</td>
    <td>$". $cardBoardBoxCost . ".00</td>
    <td>$". product($cardBoardBoxCost, $cardBoardBoxQuant)."</td>
    </tr>

    <tr>
    <td>Storage Tub</td>
    <td>" . $storageTubQuant . "</td>
    <td>$". $storageTubCost . ".00</td>
    <td>$". product($storageTubCost, $storageTubQuant)."</td>
    </tr>

    <tr>
    <td>Shipping</td>
    <td colspan='2'>" . $shippingOption . "</td>
    <td>$". $shippingCost ."</td>
    </tr>

    <tr>
    <td colspan='3'>Total Cost</td>
    <td>$". fourSum($shippingCost, product($storageTubCost, $storageTubQuant), product($cardBoardBoxCost, $cardBoardBoxQuant), product($trashbagCost, $trashBagQuant)) . "</td>
    </tr>

    </table>
    </center>";



?>
