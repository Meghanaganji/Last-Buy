<!-- <?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'train';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");

?> -->


<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'train';

$connect = mysqli_connect($hostname, $username, $password, $dbname);
if (!$connect) {
    die("Error connecting to the database: " . mysqli_connect_error());
}
?>
