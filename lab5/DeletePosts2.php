<?php

  $mysqli = new mysqli('mysql.eecs.ku.edu', 'dherrig', 'P@$$word123', 'dherrig');

  /* check connection */
  if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
  }

  echo "
  <link href='index.css'
    rel='stylesheet'
    type='text/css'/>

  <center>

  <p>Hello Admin, here are the posts that were deleted:</p> <br>


  <table name = 'userPosts' id ='userPosts'>";

//SHOW THE POSTS THAT NEED TO BE DELETED

  if(!empty($_POST['deleteThisID']))
  foreach($_POST['deleteThisID'] as $check)
  {
      $query = "SELECT post_id, author_id, content FROM Posts WHERE post_id = '$check'";
      $query2 = "DELETE FROM Posts WHERE post_id = '$check'";

      if ($result = $mysqli->query($query))
      {

          /* fetch associative array */
          while ($row = $result->fetch_assoc())
          {
              echo "<tr><td>".$row['post_id']."</td>";
              echo "<td>".$row['author_id']."</td>";
              echo "<td>".$row['content']."</td></tr>";
          }
          /* free result set */
          $result->free();
      }
      //delete the word
      if ($mysqli->query($query2))
      {
        //$result2->free();
      }

      //echo $check;
      //echo "<br>";

    }
    $mysqli->close();


  echo "</table>

      </center>";

?>
