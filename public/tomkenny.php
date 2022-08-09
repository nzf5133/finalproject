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

  $sql = "SELECT * FROM actors WHERE name='Tom Kenny'";

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