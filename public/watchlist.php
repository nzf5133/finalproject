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
.watchlist {
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
  <li class="title li">IMDB</a></li>
  <li class="li"><a href="index.php">Home</a></li>
  <li class="li"><a href="movies.php">Movies</a></li>
  <li class="li"><a href="actors.php">Actors</a></li>
  <li class="li"><a class="watchlist" href="watchlist.php">Watch List</a></li>
  <li class="li"><a class="account" href="account.php">Account</a></li>
</ul>
<h1>Watchlist</h1>
<ul class="flexMe">
   <li><a href="paw.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/89/76/86/ppm_salone_poster_1400x2100.jpg" alt=" "/></a></li>
   <li><a href="grease.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/62/99/35/gres_salone_poster_1400x2100_nb.jpg" alt=" "/></li>
   <li><a href="godfather.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/79/80/95/gf1_salone_poster_1400x2100.jpg" alt=" "/></a></li>
   <li><a href="tran.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/92/46/62/TAOE_SAlone_Poster_1400x2100.jpg" alt=" "/></a></li>
   <li><a href="clueless.php"><img src="https://wwwimage-us.pplusstatic.com/thumbnails/photos/w370-q80/movie_asset/52/89/86/clue_salone_poster_1400x2100.jpg" alt=" "/></a></li>
</ul>
</body>
</html>
