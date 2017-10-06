<?php

    function makeprecent($x) {
        $z = $x/5;
        return $z * 100;
    }

    $CorrectCount = 0;

    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];

    if($Q1 == "")
    {
      $Q1 = "No Response!";
    }
    if($Q2 == "")
    {
      $Q2 = "No Response!";
    }
    if($Q3 == "")
    {
      $Q3 = "No Response!";
    }
    if($Q4 == "")
    {
      $Q4 = "No Response!";
    }
    if($Q5 == "")
    {
      $Q5 = "No Response!";
    }


    $A1 = "Lawrence";
    $A2 = "Manhattan";
    $A3 = "Ames";
    $A4 = "Golden";
    $A5 = "Boulder";

    if($Q1 == $A1)
    {
      $CorrectCount++;
    }
    if($Q2 == $A2)
    {
      $CorrectCount++;
    }
    if($Q3 == $A3)
    {
      $CorrectCount++;
    }
    if($Q4 == $A4)
    {
      $CorrectCount++;
    }
    if($Q5 == $A5)
    {
      $CorrectCount++;
    }
    echo "Question 1: What city is The University of Kansas located in? <br>";
    echo "You answered: " . $Q1 . " <br>";
    echo "Correct answer: " . $A1 . "<br>";

    echo "--------------------------------------------------------------<br>";
    echo "Question 2: What city is K-State located in? <br>";
    echo "You answered: " . $Q2 . " <br>";
    echo "Correct answer: " . $A2 . "<br>";

    echo "--------------------------------------------------------------<br>";
    echo "Question 3: What city is Iowa State located in?<br>";
    echo "You answered: " . $Q3 . " <br>";
    echo "Correct answer: " . $A3 . "<br>";

    echo "--------------------------------------------------------------<br>";
    echo "Question 4: What city is Colorado School of Mines located in?<br>";
    echo "You answered: " . $Q4 . " <br>";
    echo "Correct answer: " . $A4 . "<br>";

    echo "--------------------------------------------------------------<br>";
    echo "Question 5: What city is The University of Colorado located in?<br>";
    echo "You answered:" . $Q5 . " <br>";
    echo "Correct answer: " . $A5 . "<br>";

    echo "--------------------------------------------------------------<br>";
    echo "You answered " . $CorrectCount . " correctly!<br>";

    echo "You scored " . makeprecent($CorrectCount) . "%<br>";

?>
