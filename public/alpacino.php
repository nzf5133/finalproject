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

  $sql = "SELECT * FROM actors WHERE name='Al Pacino'";

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