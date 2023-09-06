<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'indian_movies';

$connect = mysqli_connect($servername , $username , $password , $dbname);
if (!$connect){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else
{
    //echo " connection is successful";
}
?>
