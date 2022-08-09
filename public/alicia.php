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

  $sql = "SELECT * FROM actors WHERE name='Alicia Silverstone'";

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