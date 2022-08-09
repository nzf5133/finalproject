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
.home {
    border-color: gold;
  border-style: solid;
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
  color: gold;
  
}
h3 {
  color: white;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  padding: 10px;
  gap: 100px;
}
.flexMe{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
}

.flexMe li{
    width: 540px; 
    height: 800px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.flexMe li img{
    width: 100%; 
    height: auto;
    gap:40px;
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

<h1>Top Picks</h1>
<ul class="flexMe">
   <li><a href="rumble.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/16/71/65/pp_13681_rumble_salone_poster_1400x2100.jpg" alt=" "/></a></li>
   <li><a href="grease.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/62/99/35/gres_salone_poster_1400x2100_nb.jpg" alt=" "/></li>
   <li><a href="sponge.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/58/13/63/sstm_salone_poster_1400x2100.jpg" alt=" "/></a></li>
   <li><a href="lostcity.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/77/00/10/lostc_salone_poster_1400x2100.jpg" alt=" "/></a></li>
   <li><a href="clueless.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/52/89/86/clue_salone_poster_1400x2100.jpg" alt=" "/></a></li>
</ul>
</body>
</html>



