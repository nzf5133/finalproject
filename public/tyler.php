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
  color: white;
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
}
.account {
  position: absolute;
  right: 10px;
}
h1 {
  margin-left:20px;
  color: gold;
  
}
h4 {
  color: white;
  margin-left:20px;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  padding: 10px;
  gap: 100px;
}
.grid-item {
  padding: 20px;
}
img {
    margin-left:20px;
    width: 400px;
    height: 400px;
}
p {
  margin-left:20px;
}
h3 {
  margin-left:20px;
  color: gold;
}
a {
    color: white;
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

<h1><?php

  $connection = new mysqli($hn, $un, $pw, $db);

  $sql = "SELECT * FROM actors WHERE name='Tyler Perry'";

  $result = $connection->query($sql);

  while($row = $result->fetch_array()){
      echo $row['name'];
  }
?></h1>
<h4>
<?php

  $result = $connection->query($sql);

  while($row = $result->fetch_array()){
      echo $row['career'];
  }
?>
</h4>
<img src="data:image/jpeg;base64,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" alt=" "/>
<h3>Biography</h3>
<p>
<?php

  $result = $connection->query($sql);

  while($row = $result->fetch_array()){
      echo $row['bio'];
  }
?></p>
<h3>Birthday</h3>
<p>
<?php

  $result = $connection->query($sql);

  while($row = $result->fetch_array()){
    echo $row['birthdate'];
    echo ' in ';
    echo $row['birthplace'];
    echo '.';
  }
?></p>
<h3>Known For</h3>
<p>
<?php

  $result = $connection->query($sql);

  while($row = $result->fetch_array()){
      echo $row['knownfor'];
  }
?></p>



</body>
</html>