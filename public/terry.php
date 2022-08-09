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

  $sql = "SELECT * FROM actors WHERE name='Terry Crews'";

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