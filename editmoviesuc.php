<?php

require 'conn.php';

$sql_update="UPDATE movie SET movie_id='$_POST[movie_id]',movie_name='$_POST[movie_name]',director='$_POST[director]' ,Music='$_POST[Music]' ,address='$_POST[address]' WHERE movie='$_POST[movie]' ";

$result= $conn->query($sql_update);

if(!$result) {

die("Error God Damn it : ". $conn->error);

} else {

echo "Edit Success <br>";

header("refresh: 1; url=http://localhost/dvdstore/mainuser.php");

}

?>