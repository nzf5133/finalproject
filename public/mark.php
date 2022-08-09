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

  $sql = "SELECT * FROM actors WHERE name='Mark Wahlberg'";

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