<?php

require 'conn.php';

$sql_update="INSERT INTO movie (movie_id,movie_name,director,Music,address) VALUES ('$_POST[movie_id]','$_POST[movie_name]','$_POST[director]' ,'$_POST[Music]' ,'$_POST[address]')";

$result= $conn->query($sql_update);

if(!$result) {

die("Error God Damn it : ". $conn->error);

} else {

echo "Insert Success <br>";

header("refresh: 1; url=http://localhost/dvdstore/mainmenu.php");

}

?>