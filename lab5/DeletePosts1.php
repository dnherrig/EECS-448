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

<p>Pick a post to delete</p> <br>

<table name = 'deleteOptions' id ='deleteOptions'>
<tr>
<td>Post ID</td>
<td>Author</td>
<td>Content</td>
<td>Delete?</td>
</tr>

<form action = 'DeletePosts2.php' name= deleteThisID[] method = 'post'>";


$query = "SELECT post_id,author_id,content FROM Posts";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc())
    {
        $poID = $row['post_id'];
        $auID = $row['author_id'];
        $content = $row['content'];
        echo "<tr><td>".$poID."</td><td>".$auID."</td><td>".$content."</td><td><input type='checkbox' name = 'deleteThisID[]' value = ".$row['post_id']."></td>";
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

echo "

    <input type = 'submit' value = 'Submit'>
    </form>
    </table>
    </center>";

?>
