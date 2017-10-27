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

<p>Welcome Admin, here are the users:</p> <br>


<table name = 'users' id ='users'>";


$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row['user_id']."</td></tr>";
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

echo "</table>
    </center>";

?>
