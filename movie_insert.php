<!doctype html>
<html lang="en">
  <head>
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
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mi = $_POST['aaa'];
        $mt = $_POST['bbb'];
        $ml = $_POST['bbe'];
        $pc = $_POST['ccc'];
        $mc = $_POST['ddd'];
        $md = $_POST['eee'];
        $mr = $_POST['fff'];
        $mp = $_POST['ggg'];
        $mg = $_POST['hhh'];
      if (!$connect){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        //$sql = "INSERT INTO `contactus` (`name`, `email`, `desciption`) VALUES ('$name', '$email', '$desciption')";
        $sql = "INSERT INTO `movie` (`movie_id`,`movie_name`,`movie_language`,`production_company_ID`,`movie_certificate`,`movie_duration`,`movie_release_date`,`movie_summary`,`movie_genre`) VALUES
                                        ('$mi', '$mt', '$ml','$pc','$mc', '$md', '$mr', '$mp', '$mg')";
        $result1 = mysqli_query($connect, $sql);
        //$sqli = "INSERT INTO `rating`(`rating_id`,`movie_id`,`rating`) VALUES ( $mi , $rr)";
        //$result2 = mysqli_query($connect , $sqli);
 
        if($result1){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
        }

      }

    }

    
?>


<div class="container mt-3">
<h1>MOVIE TABLE INSERTION</h1>
    <form action="movie_insert.php" method="post">
    
    <div class="form-group">
        <label for="Movie name">Movie ID</label>
        <input type="text" name="aaa" class="form-control" id="aaa">
    </div>

    <div class="form-group">
        <label for="Movie Title">Movie Title</label>
        <input type="text" name="bbb" class="form-control" id="bbb"> 
    </div>

    <div class="form-group">
        <label for="Movie Language">Movie Language</label>
        <input type="text" name="bbe" class="form-control" id="bbe"> 
    </div>

    <div class="form-group">
        <label for="Production Company ID">Production Company ID</label>
        <input type="text" name="ccc" class="form-control" id="ccc"> 
    </div>
    
    <div class="form-group">
        <label for="Movie Certificate">Movie Certificate</label>
        <input type="text" name="ddd" class="form-control" id="ddd"> 
    </div>

    <div class="form-group">
        <label for="Movie Duration">Movie Duration</label>
        <input type="text" name="eee" class="form-control" id="eee"> 
    </div>

    <div class="form-group">
        <label for="Movie Release Date">Movie Release Date</label>
        <input type="text" name="fff" class="form-control" id="fff"> 
    </div>

    <div class="form-group">
        <label for="Movie Plot Outline">Movie Plot Outline</label>
        <input type="text" name="ggg" class="form-control" id="ggg"> 
    </div>

    <div class="form-group">
        <label for="Movie Genre">Movie Genre</label>
        <input type="text" name="hhh" class="form-control" id="hhh"> 
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


