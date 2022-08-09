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

  $sql = "SELECT * FROM actors WHERE name='Olivia Newton John'";

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
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYZGBgaHRwcGhwaGhwYHB4hHhwaGhohHhocIS4lHCErIRoaJjgmKy8xNTU1HCQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSs0NDQ2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgAEAgMHAQj/xAA7EAABAwMDAgQEBAUDAwUAAAABAAIRAwQhBRIxQVEGImFxE4GRoTJCsdEHUsHh8BRiciOy8RUkgpLC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgMAAQQFBv/EACgRAAICAgIBBAICAwEAAAAAAAABAhEDIRIxBBMiQVEyYQVxM7HBFP/aAAwDAQACEQMRAD8A4yrdozqtNKkSYRgW+1qOKFZZpKik6planVlnXEKm4o7KjFMsfEWD3rUvCqbGKKDGm3+dp+SYqb5E9UmW9N0ggJitq5jKROPyb/FySjoYLLUSzBK16jfueCJQGteBvKzbfNPVB6fyHPNcqZQubOQZ+qDPZCPXd+2CqFtaOqGQMJ8VrZiyu5aKtOmrNnYGq/a0gYnKt3WmuY2VjoM/FmRAHXrnp3UlL22ieNFSzJT6bo21vDpHD5+RC2WHhre6H1gwdw1z/thNbLX4gLW/ibx6g/sqPwiJ9O2TzH7D5rPyZ6Kf8d40dvS/sJWn8PbKq07L1+4chzAz7HgeqTvEHhWtaky5j2btocx0zPHl5+kp80rRvivBYN7IBiYJPUbuPRMtxTpMYX7A57GkgANxB8whwMiOsKRlKzleTg8eD9kmzgdWg5sbmkTxIIWldn1Spp9QNLqLHPIkks2kDsS0gZzEdkFvvC9hWZ8WnUfROZZhzWmR6CRB6Qmcvswtb0cyUTLqfhCvTbvZFVh4cyc5Iw36Jde0gkEQRghEnYJgooooQiiiihCKKKKEIooooQiiiihCKL0BeFXRCKKKKiHff4i+DqO3/VUWNY8H/qBogOB6wMAz+q5lcU4wvoPxRt/0lbdxsP16feFwG75KOPdGLOqYuXoiUORTUByhauRow7ietVq2pBzgCq9MSVftqPmkq/gKUkmGGUGgdFlbUZ4WLGEhEbBgbylSi6HR8qMWiDSC8QGqxS8D1HcCPYJ28NUGGCRyniixjR0SFKSdD3JTXI47Z/wvqPPmcWj/ADumGj/D9tBsNcSehPE+q6E7UGN5ICEarrtMiGGSmSnHj3sWoPl0c21PT9zdsZR3wT/DynTa64u28g7GHsRG4jvnA+aYPDekCq74r2gtacA/md+wRnUbjdWYxximwF5/3EAQJ4gZwhjfGyp1z0JNp4S2PJfUIYGuducQ0bRLRI6mQft3W67r0Kbt1NjdrmAMO0MiREknsQD3nKu+JtQDhsH4do2gE4O4nkcg8Y7BItXT3v2te09QDBOJ4j6hUmkv+h5c2TK7mwtol0LamW72h8PGDukE7mmQDJmR/kCvcVX7Nz3iOMHPfocZk/stVvpbmEgOJLohuCfnJwPcSt91ob3vYwzvOQ0QYHczIA9TjoJUclYuheuLtjduyQJPJ/7SeO8+iHuutziGPkEEEDI4++c/VWdc8hcwuzlz8A47DoJ6deqX9LJdUYCYlwHygyjXRQatNer0HQZcxscEyAQAYPb9lRv7+ndOLqhDKjsl8HaT1DgJ9M+k9Vle2jwC8HIAOMcf4FstbZlwQx8B7hLKo8u49Q4cE/dWmimhdq0yCQenbI+RWtEdR059PnLWkjH5T2I6e/VDkQJFFFFCEUUUUIRRRRQhFAoooQ3N4WorJhWRYibCq0alFntUVE4s7x4+8WtcDb0nAtH4nDIJHQegXKr285VRt06PNM8LEUCclHFUYZK5XIp3Dy5aW0SVeqUwFlQRDFOo6NdC3gSVm+qAVlc1oQtz5MqMqMXPbGK2usK/bbnuA6Jf06oXPa0LpOg6U2A5wkn6BKyS4oPFg5S2ENMe5gCs1dUeTG7Cl3RDAI4hCX1MrE3Z1YQUUki66u53JViwtDUe1o5cY9vVCfiwUzeEKjfi7ndAYQLbSGTVRbHejRFNjWs4aI/c+5SfqYHxaj5Mhrg0Zjz8CPQg/M47k5qd2Cx0O/GdoAPbmfTKTalR7XODszO10mQRkg/KFplK1SOelT2WbJ73hrNp/wBrgOO4M9OEU0/S2B+13nqc7Zkj/kfyj0OT6JdZf1fwNfE/yxj5wjemXjLVhc7zPPAmS49SXHp6+6VGr2NrQZfpLKXnDQ6o4gDAiSYEA+/J/sh+uAW1u/YA6rUxuiS55wAPRoJj/wAonY3xew1H8jDfQkSY9uPqhfiGqHOayZ2tMz0JwD7jCOTilaBSk3TOXaroz/hl/wCJ1Q7Qe5H4nexdgf8AErLR/CpbUYODAPzOR9ZC6Fq9EFjQ38rGgdeGlx+7lUosiuwieWDHYNgfoFXqaL4sW9c0MMtw7GQYj/a7+yUKmnObRd0dTcHtPoYn9Qfmuv67Yg0KfUNeR8nOeOPmEqV7AhkRjYGnr0gfofqFI5FRXFoWKwNZgrAZI21mxh0dfeOqU9QtjTeW/T1HRdS8P6cA7Z0qNj0BH9v0Sp47sAxzCMEAiPSf8wmRnboCS0JqiiiaARRRRQhFFFFCEUUUUIZ0+VYdjKrs5W2pwqY2DqJr3qLWorA5M6H4u0MU372iBOQlurWAXTvHV7SdTccZC49VqqsEnKOxflYl6mvnZm+pKzY+AqwK8qPTxXG9EuKklaFCvEtvY5KlQz+DbJr3Oc7pgDuukW9w1jAIyOy5n4VuNpd2lOtnX3niAPus+VmjEq2Mr/OAfoFXuLUDlGrS1ApjvAQzWX7XR6JXGlbNKabF2u3zEdlesK5YJBicIfcvHXk5j91lbUy97GD8zmtHbJA/qqUbBnJ0Meo1CHhuJaGODv8AkCTPpJI+YXjLtj8tgOby044/XC1a4w7t7Yw5zHe7XOLR7FriPkEGYwyC2QOxyQT0B7e6OtGddl25uGUiSMfLM+gQo3Tnu3EnkI9U0Te3cXQ49v6hDK+nlnJmOmZPyAQJofxZdp6uWtDPY/MmT/notl1rDZeSATA+xS5TO55LsAdP0VG5uJLgMz+6lWVQ1P8AEbA0S0HJHy2/2WpniBgLXQJlv1gfulCqx0DnnP8AnzWFSi/kAx7Hor4xKpnRtV8RA0oAE8j0PIQ1mt03tjbBLdp+6WGVHFgnpyhr7jZInIP6KoxXRGmPjbymA0tOeQfUdPuUm+Obg1Idgxn5HKqG5cAAeDEH3VSvX+Ix05cCT7/5P3TYxpi2hcUXrhBXieIIooooQiiikKUQiiiiJIhkxbX8LSs9+IQtBqWqNai9XigAdpV6tySXuJA4HRDb+3LHwfcJk8GMa4EdQUQ8WaKXNDmjIRJ1opvdsRGPhePfK9rUi0wVrUcn0RJdkUUWTRJhCWMWhU4ZPdNFhWyAEvWQhoTLY2pjckSds2QjSocrXUsBvMITq11ueShdO7IcR2UqPJ5Qt2hsYpbKzzlGtD0+oalN20uAcHEDJADhmBxnug+ehj16/JOttYVG0WMoVDTdAe5wE7if5u4QOSXYLjydFbXQGOcwmGvP0d+Jv2cQgdg1xfBMgHmT+iIao59QbnmXt8jnAQ13JBjoeV7pFAlwnj3V8tC1BqVMP0W4ELJ9kx2HiQekSrNJip6mHhssMR6/ukrs0v6Kdz4apGSxhaf9zxH0zH1Ql2lMoHc+iCB+Zp3fXqEsa1rtwHhlN+JAc8AlrSTgEgHjJMAnCueH7O+uaLqzHFzBP4ajNzgC5pIY4AgS0/ignsnLHKWxDyxjoarR9tU4DT9ijLNOt3AeQA+nBXKqdu9lTfu/CZMeU+uOhB5TvpepF4BHVLlHj0x0Xz0xgr6HbFu11Np9RI6d0m6x4PY4/wDTftHQHOR6o/f6lsHmMJRufEzqjyBUFNgxPLnesdlUVJ7RUuMNPYB1XQLlh2hm9vdhn+6XKzjTd5gWmcgjK6hbNY8Sbl7j/tLR/QpG8Y05qETuLQDIxIM9PaPotOOW6YmUW03EVHvkknkmVioonmMisULVzuAs7C2L3AJ70vSAAMJ0IXtismTjpCe3SHdV4/TCE/VrIAcIfWtAm8KE+qxJfZkKuaJ7J0fZeiov0/0VOCYSzMVi1eI7X07sFQqWZQPH9DI5Uygot3wSol8GM5IYPBVwG1SCeeie9YrA0j6BcnsLg03hw6JqutXL6RE9ENNgzdIWL8DcY7lVFsrOkmOFttaU5KkmHji3SK0K5Y2xc4GMK7bWgc8BNdvpjWtlLlKkaI4qlsG2tPzAdk9Wlv5J9EpsLWuTDb6swM/EFnbZodWCK521D6rfc1tjJIn2Q7UL1pfIRG3t6j6O9gDhxBIB7TlWl9gylrRp06u2rUaxvK6nbjZSYOoZHvH+Bcm8MD4FZ76oBcAcyOJzGcmE2+DvFIuX1qfDmu3sacFzSA1wHqCAfmhyxdaBxy92zGpUqvrtoOktdJaOg7k98K5bPFNxZOAVfuLNrKra4qDa1pD2ugEAjBGeUDq1A95cM857pa2am4t2hp0+uDARSvbNcMiQUpWFxBCcbF+9nqEcY8tC8y41JClr2jtDSWs8hy5oEiRwYGfnIWnw/estmOZTpCXHJ3n1gQW8D+qb3vjC0w08NA9lXOUdAcYvbQrXGnMqk1HtLCQ6Y6zx7f1havCGjODS78jXQJ54n6JrfaB52u4PUKzbWradMhvcH3UinJOwpTS2uznnibTX1WvLSfKcAcfNLnhPRy+uKdZlUs3HcQ4sYGbDBIAEP3xGe+Dyui7xvew8Oyhl3pNYfgeSw9A4j+uOUWLKo6YOXE57TEnU9EdbXppsc97HDc1xw5ueCfzRx8wgOvVwLh7XdIGf+IXR6WlFji94lxESTuIHuVyzxYf/AHdX3H/aE6DU2LuWJAutTg+nQrUvSVlSbJAT0r0ZZNXY0+FrKfMQn2hTACBeHLWGBMT8Bb8Ufk5uSVsoXT0Mq1ArF/ViUCrXOUMnbJFaCDagK9NMFD6FSUSZwqIaa1AQhVzQCL1UA1m62tgclDJ0HBNuirUaJMAKIT8V3dRJ5s2emjdqFWm4j4TCxsdTJJXu1zQG7hJ6AzH0VFWrFsuHolp0Go8mkW6OlyJJWw22xG7cADKqXUOcAlKTb2dOeCEIKUeynYVYeCmapeyxLVVkfJENOqhwypKNuxDlXYK1G/dOMKh/rn/zFH9Ts2umEEOnO6IlFCJt3o0G5d/MUweH3VXu2b3CZPJxiQgJtXAgJ28PU9hDzk9T7qS0i8UXJuxaipucSTGWz6q5b3n+nex9Nxa4QXHrP7eiNVrNu4npKGX2mB0kYQWmX0NLPGtCqQyqC/dgEDEn9Fs0G7Y81GMmGGRPMO/vK5hXpFjhByD9wuoaJo4Y412PllRgcGxxMO56xlBKEYrQ2E5SdP4CweQUb03Vi0YKA1DIVI1XiRlK32jWnFqpdD1aak2ZdCyudUZMtH0SK2+LYB5PEmEUtpIkuB9uAgldURxg5Whs066+IHERIJHMcDPusqVw1w2h3mnjokp2hVn730rh9Oc7REE9Y7JYpXN5b1ix++oZwYkn5jH1RR2tCZJJnQdQaG1QXYzB6q1UY0jc130SfbPu6lUOqMDWAY80n6d1dtb0te9hPB+xyEDiNi7Lt+/HK4t4kfNzVP8Au/QALrd/dANJJhcWvKu+o9/8znO+pJWjAuzP5lJJGhXNNZLwqaL+H6UvWzGtnNm6izomkMhgVy8qwFrsWQ0KtqdWAVuTqJz2rkA9TuuUBNeStuqVkOtzlLHKOrD1iJRpjUL01nCLhQWytc4EpL1a431IHAwnO+HlKTadEGs4Huk5XRpwRt2VvgeqivVWMkqJGzZoEtaSj2lWBiShdtTIMy2OMn6YTPZPYGZk+ysqOijcXW3APCqtuJdjlVtQPmkIx4e00EB7uv6K3GKVjIznN8UUr2pAgrVYXBAR/WdLBbIwUu0qRB29VI8ZLQOXnjdSLD71xW62ugcFXTpg2gwhVzaua7CpVdFyvipHtSsHPDQOuUx21Ta1CNJ0yTuKOVrYBsIMkldGjx8M5QcqKAvdznMnnr69FXo6h5vhk5mD7+i20NOG6esoizRW7/i4JAwHHyg/zEDn2VPj8GfhJbYp6tQa0wDzLv2A9V0Twbe7rOmT+Tc0+wJH/aQuba1Wa6oQwktbgE9e5Td/D2tNGsz+Vwd/9hH/AOVWRe0vFL3DKKkEj1hbqbATlA7qq5jg7pwVfoXJLQQs0omqMvsPXek0qtIscCNwBDmna4EcEEJStNFuGuew3ZZtLAwukh+5xEROCMfVN9u8vDBPuVs1DSWOG7Mj1/ZBGTWmPcYy/RXpabf0xFO5ZUh+yNuPw7iSc9cQt1alfjfNGk/ZkuBIDuvlB5OOwQ/R3tovINQ0GyXcOcwu9Wjg5OURvfFVRgLWvpukg7gHRAPEEDt90yovsB48idKmL+oa7Wo1GU69s5rnztDPMTBgwBPde3NN73seWFh2GZ5iRtn6lWLOs6tW+NU8xAgE4nrgdMmVv17UWNacgGJcewQ/NJEl7VcmI3i/Ui1mwHLsH26/t8ykdXtVvTVqF/Tho7Dp+/zVFbIx4qjmzm5StkTH4Xb5kuJn8LjIT8XZnzfiP1sMIbqrZBRSgPKh2oNJBWp/iY12IuqtytdizKuajS8yxsKcFAOv20MFgzCvALTbDyhWQrElO5GClulQAc50ZJTVWGClq4rBu4n9EjMavH+QbVbk/uoh1SpJK8SzTyPHtgouLktYBxK06fT3czgrVe4Ib647KJojTW0R0nKatFrQwBA7GmHDP1RK0YRwhk+So04G8UuYYvK4IhV7K0aTuIVFz3F8dEYtMBLacVo0Ryxz5OU1ovOYI4Qi6pCZVq5vowEv6nqJEgK4RkwPKzYrqK0GrN4AXlzcIJpl05wyrV2+JJ4Ak/JVKLUqNWHzFHA0kb23UNLgAegniT3WitfuDHNe8kOJDiGgNGDgdTn3VG6eX7WNMucNxmIAmRg4H9gqupPbDW7iS0flMtE89FojjikcjJmlKQKrnJ7dIwE9fwwok/6gxghg+fmP9UkOcIiB79V0n+FtAtpvcfzOx7NEfqk5lSZeFXJGWr0S1xBGChVjqPw3QeOv7roeqaY2o0hcw8Q2TqL/ADD0nuFng1LRslHjs6FpF21zRBHomOi8OblcO0rXX0Hd2p603xexwGYPqhlja6DjNNUxtu9La4E8IE/T2NPA+gC2f+t7x+JY179sTIS6aGqUa2yvc1wxpgx/QLm3iLXPiksYfL1d/N/ZbvFmuGq8sYSGNwf9x/YJZWvHClbOdmycnS6PFFFE0QRMHhqtDoS+rmnV9jgUeN0wJq4nWLSpLVqvAh+k3oc0ZRSoNwWtO1RiapijqFHzLRQpwUevbaeiHOpQhDCFscBWQqVq5XRwrQswazcQ3uYRG4tGlpYKUgDmFq0q2L6rQOhlM2p0X0GuIEyMLD5Tkqro6Xgxi7T7OTVtHbuPlUROvWrFxOw59FErmafRYraVe7CQeCiV0G1GiGgmcEkBLbXQtzbpwxOE2t2IUlWwvbuIdsEY5A79fujFv64S4y7LnAnmBwEYqXO0Z5gKVsepex2WdwDlZFxhA6VzufA6K1cVIaVco7QGLJUWWDVnKD39QErwXBjlUmUnVXhrRJP27k9gmKIlyDWkZgBbtQh4NNnmnD3SQ1sEYBjJn9FTdRFCm5vxB8TE9hPb9/sq9xcFtNlJpOcu5B8x6e/c9IVLGrthPNJx4roxDttQn4jTjaSBnABwD7QqYaXkmcAYmOnf1Vmrsp4a1pJGS7zQYmBCpbxmMA8gf3OU0SiVQAcGR37pl8E65/p6u0/hfiCcT0+fRKkLNriCCDwQQfVLnHkmmMhLi7R9FW1YPaCOCgHizRxWpkAZ6FL2geJH0w0nzscMjqPY/unW21KnWbLHA9x1HuFzHGUHZ2p4Zcb7T+TjNGxIc5j2wR3VC5pFjoBMLr9/plN53Fue6FP0akTlsp0cyMssLRz2xNd7gGOf7yYTcy3NGk99Rxe5rSc947Iy2jTYPIwAoTrp3Ui135zHyGVfLkwPTb9qe2c5JJysqbZW24pFjiD/AOQtYdBK0ftGTjxlUvgxe2Fgs3vlYKwXV6IoCooqKGPQb+CASnmzrhwC5PRqFpkJy0TU5AErTCVozZIU7GuvTBCD3dOEWp1pCHaiMI2xSRSouRBhwg7H5ROg/CpEaC+nVtg3DkldC1ANNtueYAAMlcystzqlNgGC4I5/FvVXMt6dtT/HUImOdoSZ+5NM0Y24tNdhakLeB+FRc0s7OtsbL3cd1Fg9H9nS/wDR+hAUUUWoxlm2rhpBAzPJz9lfaQ5xbJM5BKEIjZP/AAntKn7Di70GtN0scyc91lq1odsNVixuxC23FYHlA5vlbOjHxY+jyTFpunvOBknEd00DRH21DyNc+s4S7aOD0HeBk+vPEJo0Dw4WsFd+HOE0wfy4w8+vUAdp7IZrFq8Ek1Q6ZkSDy4YnrJDWf/EnhGsjs52SMU6TE06fUA+JVpvc+ThwxgdRye+ELubl1R2cngCAI4ECE1VC4fm78Z5d5o9zgeyrvrgzuY1xMgkjH1P5W8IvUYviLN0ZccR0hYB4AOAZ6np7I1U0+m6SCafXOR6SD1J4AKG3OnPYYjd6tyO8e6Lkn0SimvFFCoQM6Fcw7aTg8eh/umSlVLSCCQRwRgpHt6xY4OHIMpwo1Q5ocOCJWfIt2d/+MzcoOD7X+hitPEDh5ag3D+YYPzHVE2VGPEsII/T3SdKzp1HMMtJB9EiUF8GzLgjL8dDLdNGB3Sv4iuv+q1k4DST88D9EXtNSa4+fyuj5FALmkH1XVT6AD26qRVdmCOGayLQG11n4HdSIQcovrr5LfSUHWmPRzvNr1nRFFFCEZlIoooqIRWrK5LHBVV6ii6ZTSapj5pmo7hyrd5V3NSfo9YzCcbanuatFmVxpg5jCiVkwuIaOphYm3IKPeEbMPuGzw3JURTHbRfD7GbHuGWifmqrbClVualeoA7b5GT0A5P1TBX1BjARuHZDLuzGHsPl6julNDkD6+j0y4kQAeFFY8ndRL4IZyZ80KKKKgiBWG1IaR1Kiitdl/Bf0ysUf061c8/FeQ2jTILzySByA0ZJKiiqSXIa8klj7Neq+ILi8dU2vLKTBudBIO0exlxjgcY6ISzTHVGCpTLgySNz3ZJB6BoMZPVRRUKNZaATFw7ESNpdEcckA9StRvy0gTvaI5G04n3HXnKiishbtr0OIAncYAB7nkzwYHfKsUnDoe8e3UwfzFRRQtFe6pMeJI2kCZHbET3JQitQLTBH3UUVxKZpTJoLz8MieHY+gKiiGfRu/jf8AOv6CiiiiSeiN9jampUYwcucB98/Zb/FrWMu6lOmwMGCAOPwj6d49V6ooYfIm1mil9CreW+5p7jIQIqKJkDl+dFckzxerxRNMB6vFFFRCKKKKiBbQ2S9dCsKflUUWiPSM0/yZ5cEAFNPge1aWmofxKKKMqPYS1ii3dPSFWstULWlh46KKJT0x/wAGncO/6r1RRUCf/9k=" alt=" "/>
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