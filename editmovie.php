<?php

if(!isset($_GET['movie_id'])){

}

require 'conn.php';

$sql = "SELECT * FROM movie WHERE movie.movie_id='$_GET[movie_id]'";

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

<form id="form1" name="form1" method="post" action="editmoviesuc.php">

<p>
<label for="movie_id">ID</label>
<input type="text" name="movie_id" id="movie_id">
</p>

<p>

<label for="movie_name">ชื่อหนัง</label>

<input type="text" name="movie_name" id="movie_name">

</p>

<p>

<label for="director">ผู้กำกับ</label>

<input type="text" name="director" id="director">

</p>

<p>

<label for="Music">ประพันธ์เพลง</label>

<input type="text" name="Music" id="Music">

</p>

<p>

<label for="address">ประเทศ</label>

<input type="text" name="address" id="address">

</p>

<input type="submit" class="btn btn-success" value="บันทึก">

<a class="btn btn-success" href='mainmenu.php'>Home</a>

</form>

</body>

</html>