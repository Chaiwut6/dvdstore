<?php

require 'conn.php';

$sql_update="UPDATE user SET uid='$_POST[uid]',first_name='$_POST[first_name]',last_name='$_POST[last_name]' ,address='$_POST[address]' ,phone='$_POST[phone]' WHERE uid='$_POST[uid]' ";

$result= $conn->query($sql_update);

if(!$result) {

die("Error God Damn it : ". $conn->error);

} else {

echo "Edit Success <br>";

header("refresh: 1; url=http://localhost/dvdstore/mainuser.php");

}

?>