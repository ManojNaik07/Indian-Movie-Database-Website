<!doctype html>
<html lang="en">
  <head>
  <body style="background-color:powderblue;">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>MOVIE INSERTION</title>
  </head>
  <body>
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'indian_movies';

$connect = mysqli_connect($servername , $username , $password , $dbname);

            echo "<H1>";
            echo "<b>";
            echo "#TRENDING MOVIES";
            echo "<br>";
            echo "</H1>";
            echo "</b>";
            echo "<br>";

            $sql = "SELECT * from movie order by movie_release_date desc";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                        $num = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<h3>";
                            echo "TRENDING #".$num;
                            echo "</h3>";
                            echo ' ---> MOVIE NAME : '."<b>". $row['movie_name'] ."</b>"."<br>"." ---> LANGUAGE : ". $row['movie_language'] ."<br>"." ---> CERTIFICATE : ". $row['movie_certificate'];
                            echo "<br>";
                            $num = $num + 1;
                        }
                    }
            }
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>