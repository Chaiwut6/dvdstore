<?php

require 'conn.php';

$sql_update="INSERT INTO user (uid,first_name,last_name,address,phone) VALUES ('$_POST[uid]','$_POST[first_name]','$_POST[last_name]' ,'$_POST[address]' ,'$_POST[phone]')";

$result= $conn->query($sql_update);

if(!$result) {

die("Error God Damn it : ". $conn->error);

} else {

echo "Insert Success <br>";

header("refresh: 1; url=http://localhost/dvdstore/mainuser.php");

}

?>