<?php

    $userName = $_POST["userName"];

    $mysqli = new mysqli('mysql.eecs.ku.edu', 'dherrig', 'P@$$word123', 'dherrig');

    /* check connection */
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }

    /* close connection */

    //$query = "SELECT user_id FROM Users ORDER by ID DESC LIMIT 50,5";

    $query = "INSERT INTO Users (user_id) VALUES ('$userName')";

    echo "
    <link href='index.css'
      rel='stylesheet'
      type='text/css'/>

    <center>
    ";


    if($userName == "")
    {
      echo "
      <p>You cannnot give a blank name!</p><br>
      ";
    }
    else if ($result = $mysqli->query($query))
    {
      echo "
      <p>Hello " . $userName . ", you were added to the Database. </p><br>
      ";    }
    else
    {

      echo "
      <p>Hello " . $userName . ", your name already exists in the Database, you werent added again, please use other functions. </p><br>
      ";
    }

    $result->free();
    $mysqli->close();

?>
