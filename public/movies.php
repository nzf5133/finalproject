<!DOCTYPE html>
<html>
<head>
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
.movie {
    border-color: gold;
  border-style: solid;
}
.account {
  position: absolute;
  right: 10px;
}
h1 {
  color: gold;
  text-align: center;
}
a {
  color: white;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 500px;
}
img {
  width: 540px;
  height: 800px
}
</style>
</head>
<body>

<ul>
  <li class="title">IMDB</a></li>
  <li><a href="index.php">Home</a></li>
  <li><a class="movie" href="movies.php">Movies</a></li>
  <li><a href="actors.php">Actors</a></li>
  <li><a class="watchlist" href="watchlist.php">Watch List</a></li>
  <li><a class="account" href="account.php">Account</a></li>
</ul>
<div class="center" >
<h1>Top Movies</h1>
<a href="grease.php"><h2>1. Grease</h2></a>
<img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/62/99/35/gres_salone_poster_1400x2100_nb.jpg" alt=" "/>
<a href="godfather.php"><h2>2. The Godfather</h2>
<img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/79/80/95/gf1_salone_poster_1400x2100.jpg" alt=" "/>
<a href="clueless.php"><h2>3. Clueless</h2></a>
<img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/52/89/86/clue_salone_poster_1400x2100.jpg" alt=" "/>
</div>

</body>
</html>