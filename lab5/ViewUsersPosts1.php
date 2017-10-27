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

<p>Pick a user to see their posts</p> <br>

<form action = 'ViewUsersPosts2.php' method = 'post'>

<select name = userSelection>";


$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc())
    {
        echo "<option id = 'userSelection' value = ".$row['user_id'].">".$row['user_id']."</option>";
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

echo "
    </select>
    <input type = 'submit' value = 'Submit'>
    </center>";

?>
