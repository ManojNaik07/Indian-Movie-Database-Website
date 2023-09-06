
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>MOVIES</title>
    <style>
    h1 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
    </style>
  </head>
  <body style="background-color:grey;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <font face="Arial" size="18px" color="#FF0000">PVRS CINIMAS</font>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          OPERATIONS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="btn btn-outline-danger" href="insertion.php">INSERT RECORD INTO TABLES</a>
          <a class="btn btn-outline-danger" href="update.php">UPDATE RECORD IN THE TABLE</a>
          <a class="btn btn-outline-danger" href="delete.php">DELETE RECORD IN THE TABLE</a>
        </div>
      </li>
    </ul>
    <form action="movie_awards.php" method="post">
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="btn btn-outline-danger" href="insertion.php">INSERT RECORD INTO TABLES</a>
          <a class="btn btn-outline-danger" href="#">UPDATE RECORD IN THE TABLE</a>
          <a class="btn btn-outline-danger" href="#">DELETE RECORD IN THE TABLE</a>
        </div>
    </form>
  </div>
</nav>

  <div class="container">
  <div class="row">
    <div class="col">
    <!DOCTYPE html>
<html>
<body>
<img src="https://thumbs.dreamstime.com/b/retro-movie-projector-poster-retro-movie-projector-poster-video-camera-tripod-gray-background-118507439.jpg" alt="Trulli" width="600" height="700">

</body>
</html>
    </div>
    <div class="col">
    <div class="container mt-3">
<div class="card" style="width: 18rem;">
  <img src="https://assets.wallpaperbison.com/thumbnail/video-game/a-hat-in-time-wallpapers/6598-thumb-a-hat-in-time-hd-wallpaper.jpg"  width="450" height = "250">
  </div>
  <div class="card" style="width: 500;">
  <div class="card-body">
    <a href="search01.php" class="btn btn-danger">CLICK HERE TO EXPLORE</a>
  </div>
</div>
</div>
    <br>
        <br>
        <br>
        <br>
    <h3>Frequently Movie Searched Based on : </h3>
    <div class="container">
        <br>
        <div class="container">
<center>
    
  <div class="row">
    <div class="col">
  <img src="https://yt3.ggpht.com/yzFWvJgfPCkYbKzI8voefjcOzXlR6vhvbnC860Uf8KCbK7vkV5BikvWouOsweEbcK4CjR4Om=s900-c-k-c0x00ffffff-no-rj" alt="Trulli" width="150" height="150">
  <a href="trending.php" class="btn btn-dark" role="button" data-bs-toggle="button">TRENDING</a>
  </div>


  <div class="col">
  <img src="https://ia.media-imdb.com/images/M/MV5BMTczNjM0NDY0Ml5BMl5BcG5nXkFtZTgwMTk1MzQ2OTE@._V1_.png" alt="Trulli" width="150" height="150">
  <a href="imdb.php" class="btn btn-dark" role="button" data-bs-toggle="button">IMDB</a>
  </div>

</div>
<center>

  </div>
</div>
</div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){


  $aid = $_POST['name'];

  $_SESSION['name'] = $aid;
  echo $_SESSION['name'];
  echo "we have saved ur session";
}
?>