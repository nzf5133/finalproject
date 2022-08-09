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

  $sql = "SELECT * FROM actors WHERE name='Channing Tatum'";

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