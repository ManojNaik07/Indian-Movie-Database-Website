

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>MOVIE SEARCH</title>
  </head>
  <body style="background-color:grey;">
  <body>

  <div>
    <form action="search01.php" method="post">
    
    <div class="form-group">
<center>
<nav class = "navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #000000;">
    <nav>
  <div class="container-fluid">
    <form>
      <input class="form-control" type="search" placeholder="Enter Movie Name" aria-label="Search" name = "name">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
  </div>
</nav>
</nav>

    </div>

</center>
</div>

  
<div>
  <div class="row">
    <div class="col">
      
	

<?php


require 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];


        if (!$connect)
        {
          die("Sorry we failed to connect: ". mysqli_connect_error());
        }
      else{ 
            $sql = "SELECT * from movie m, movie_crew c ,crew cc where m.movie_name LIKE '$name' and m.movie_id = c.movie_id and c.artist_id = cc.artist_id ";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                        $row = mysqli_fetch_assoc($result);
                        
                            echo "<center>";
                            echo "<b>";
                            echo '<h1>'. $row['movie_name'] ."</h1><br>"." LANGUAGE : ". $row['movie_language'] ."<br>"."CERTIFICATE : ". $row['movie_certificate']."<br>"."DURATION : ". $row['movie_duration']."<br>"."GENRE : ". $row['movie_genre'];
                            echo "<br>";
                            echo "</b>";
                            echo " </center>";
                        
                    }
            }


			$sql = "SELECT  rating from movie m, rating s where m.movie_name LIKE '$name' and m.movie_id = s.movie_id ";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
							echo "<b>";
                            echo "<center>";
							echo "IMDB = ". $row['rating'] ."/10";
							echo "<br>";
							echo "</b>";
                            echo " </center>";
                        }
                    }
                    else
                    {
                      echo "<h1>";
                      echo "NO RECORDS FOUND";
                      echo "</h1>";
                    }
            }

			$sql = "SELECT  cp.company_name , s.budget , s.collection from movie m, finance_department s , production_company cp  where m.movie_name LIKE '$name' and m.movie_id = s.movie_id  and cp.company_id = s.prod_comp_id";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<center>";
                            echo "<b>";
							echo "PRODUCTION COMPANY NAME :". $row['company_name']."<br>"."BUDGET : ". $row['budget'] ."Cr"."<br>" ."COLLECTION : ". $row['collection'] ."Cr";
                            echo "<br>";
                            echo "</b>";
                            echo " </center>";
                        }
                    }
            }
			echo "<br>";

			$sql = "SELECT cc.artist_name from movie m, movie_crew c ,crew cc where m.movie_name LIKE '$name' and m.movie_id = c.movie_id and c.artist_id = cc.artist_id ";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                      echo "<center>";
                      echo "<b>";
                      echo "<h3>";
                      echo "PERFORMED BY : ";
                      echo "</h3>";
                      echo "</b>";
                      echo "</center>";
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<center>";
                            echo "<b>";
                            echo  $row['artist_name'] ;
                            echo "<br>";
                            echo "</b>";
                            echo " </center>";
                        }
                    }
            }
			echo "<br>";


			$sql = "SELECT  song_name from movie m, songs s  where m.movie_name LIKE '$name' and m.movie_id = s.movie_id ";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                      echo "<center>";
                      echo "<b>";
                      echo "<h3>";
                      echo "SONGS";
                      echo "</h3>";
                      echo "</b>";
                      echo "</center>";
                        while($row = mysqli_fetch_assoc($result))
                        {
							echo "<b>";
                            echo "<center>";
                            echo  $row['song_name'] ;
                            echo "<br>";
							echo "</b>";
                            echo " </center>";
                        }
                    }
            }

			$sql = "SELECT  age from movie m, category s where m.movie_name LIKE '$name' and m.movie_id = s.movie_id ";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                      echo "<center>";
                      echo "<b>";
                      echo "<h3>";
                      echo "OTHER INFORMATIVE THINGS";
                      echo "</h3>";
                      echo "</b>";
                      echo "</center>";
                        while($row = mysqli_fetch_assoc($result))
                        {
							echo "<b>";
                            echo "<center>";
							echo "The Minimum Age Limit to Watch ". $name ." is ". $row['age'];
							echo "<br>";
							echo "</b>";
                            echo " </center>";
                        }
                    }
            }
			echo "<div class = ccontainer mt-3>";

			$sql = "SELECT movie_summary from movie where movie_name LIKE '$name'";
            $result = mysqli_query($connect, $sql);
            if($result)
            {
                    $num = mysqli_num_rows($result);
                    if($num)
                    {
                        $row = mysqli_fetch_assoc($result);
                        
                            echo "<center>";
                            echo "<b>";
                            echo "STORY PLOT LINE : ". $row['movie_summary'];
                            echo "<br>";
                            echo "</b>";
                            echo " </center>";
                        
                    }
            }
     else
        {
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
            </button>
            </div>';
        }
		echo "</div>";

      }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
    
    
    </div>
  </div>
</div>


    </div>
  </div>
</div>
    </body>
</html>