<?php

    $userName = $_POST["userName"];
    $userPost = $_POST["userPost"];

    $mysqli = new mysqli('mysql.eecs.ku.edu', 'dherrig', 'P@$$word123', 'dherrig');

    /* check connection */
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }

    /* close connection */

    //$query = "SELECT user_id FROM Users ORDER by ID DESC LIMIT 50,5";

    $query1 = "SELECT * FROM Users WHERE user_id = '$userName'";
    $query2 = "INSERT INTO Posts (post_id, author_id, content) VALUES ('' , '$userName', '$userPost')";

    $res =  $mysqli->query($query1);

    echo "
    <link href='index.css'
      rel='stylesheet'
      type='text/css'/>

    <center>
    ";


    if($result1 = $res->fetch_assoc())
    {
      if($userPost == "")
      {
        echo "
        <p>You cannnot give a blank post!</p><br>
        ";
      }
      else if ($result2 = $mysqli->query($query2))
      {
        echo "
        <p>Hello " . $userName . ", your post was added to the Database. </p><br>
        ";    }
      else
      {

        echo "
        <p>Hello?</p><br>
        ";
      }
    }
    else
    {
      echo "
      <p>Hello " . $userName . ", you don't exists in the Database, you must add yourself before you can post. </p><br>
      ";
    }

    $result->free();
    $mysqli->close();

?>
