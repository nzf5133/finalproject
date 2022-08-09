<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDB</title>
    <?php require_once '../private/login.php' ?>
<style>
body {
  font-size: 28px;
  background-color: #404040;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;

}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.title {
  color: black;
  background-color: gold;
  border-color: black;
  border-style: solid;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.account {
  position: absolute;
  right: 10px;
  border-color: gold;
  border-style: solid;
}
h1 {
  color: gold;
  margin-left: 20px;
}
img {
  width: 400px;
  height: 400px;
  margin-left: 20px;
}
h3 {
  color: white;
  margin-left: 20px;
}
</style>
</head>
<body>

<ul>
  <li class="title">IMDB</a></li>
  <li><a class="home" href="index.php">Home</a></li>
  <li><a href="movies.php">Movies</a></li>
  <li><a href="actors.php">Actors</a></li>
  <li><a href="watchlist.php">Watch List</a></li>
  <li><a class="account" href="account.php">Account</a></li>
</ul>
<h1>Profile</h1>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPiYAtB9d-CLQ_MoZMp3rU1qunHUZgG92Osg&usqp=CAU">
<h3>Name: <?php

  $connection = new mysqli($hn, $un, $pw, $db);

  $sql = "SELECT * FROM account WHERE name='Nicole Frizzie'";

  $result = $connection->query($sql);

  while($row = $result->fetch_array()){
    echo $row['name'];
  }
?></h3>
<h3>Username: @<?php

$connection = new mysqli($hn, $un, $pw, $db);

$sql = "SELECT * FROM account WHERE name='Nicole Frizzie'";

$result = $connection->query($sql);

while($row = $result->fetch_array()){
  echo $row['username'];
}
?></h3>
<h3>Account Created: <?php

$connection = new mysqli($hn, $un, $pw, $db);

$sql = "SELECT * FROM account WHERE name='Nicole Frizzie'";

$result = $connection->query($sql);

while($row = $result->fetch_array()){
  echo $row['created'];
}
?></h3>
<h3>Favorite Movie: <?php

$connection = new mysqli($hn, $un, $pw, $db);

$sql = "SELECT * FROM account WHERE name='Nicole Frizzie'";

$result = $connection->query($sql);

while($row = $result->fetch_array()){
  echo $row['favorite'];
}
?></h3>
</body>
</html>
