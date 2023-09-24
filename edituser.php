<?php

if(!isset($_GET['uid'])){

}

require 'conn.php';

$sql = "SELECT * FROM user WHERE uid ='$_GET[uid]'";

$result = $conn->query($sql);

$row = mysqli_fetch_array($result);

?>

 

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit</title>
</head>

 
<body class="container">

    <form id="form1" name="form1" method="post" action="editusersuc.php">

    <p>
<label for="uid">ID</label>
<input type="text" name="uid" id="uid">
</p>

<p>

<label for="first_name">ชื่อ</label>

<input type="text" name="first_name" id="first_name">

</p>

<p>

<label for="last_name">นามสกุล</label>

<input type="text" name="last_name" id="last_namer">

</p>

<p>

<label for="address">ที่อยู่</label>

<input type="text" name="address" id="address">

</p>

<p>

<label for="phone">เบอร์</label>

<input type="text" name="phone" id="phone">

</p>

        <input type="submit" class="btn btn-success" value="บันทึก">

        <a class="btn btn-success" href='mainuser.php'>Home</a>

    </form>

</body>
 
</html>